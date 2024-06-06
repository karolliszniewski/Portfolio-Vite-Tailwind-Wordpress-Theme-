<?php
/**
 * Vite live preview development / production
 */

 namespace KarolPortfolio\inc;
 use KarolPortfolio\Inc\Traits\Singleton;

 class Vit{
    use Singleton;


    protected function __construct(){
        $this->set_hooks();


    }

    protected function set_hooks(){
        if(IS_VITE_DEVELOPMENT){
            add_action("wp_head", [$this, 'vite_development']);
        }else{
            add_action("wp_head", [$this, 'vite_production']);
        }
    }

    public function vite_development(){
        echo '<script type="module" crossorigin src="http://localhost:3000/main.js"></script>';
    }

    public function vite_production(){
                // read manifest.json to figure out what to enqueue
                $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );
        
                if (is_array($manifest)) {
                
                    // get first key, by default is 'main.js' but it can change
                    $manifest_key = array_keys($manifest);
                    if (isset($manifest_key[0])) {
        
        
                        // enqueue CSS files
                        $css_file = $manifest[$manifest_key[0]]['file'];
                        if(!empty($css_file)) {
                            wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
                        }
                        
                        // enqueue main JS file
                        $js_file = @$manifest[$manifest_key[1]]['file'];
                        if ( ! empty($js_file)) {
                            wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, [], '', true );
                        }
                        
                    }
        
                }
    }



 }