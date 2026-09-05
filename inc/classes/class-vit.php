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
        // Read manifest.json and enqueue BY NAME. This used to take the first two keys by position,
        // which broke as soon as a bundled asset (a font) was added and shifted the order.
        $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );

        if ( ! is_array($manifest) || empty($manifest['main.js']) ) {
            return;
        }

        $entry = $manifest['main.js'];

        // every stylesheet the entry pulls in
        foreach ( (array) ( $entry['css'] ?? [] ) as $i => $css_file ) {
            if ( ! empty($css_file) ) {
                wp_enqueue_style( 'main' . ( $i ? '-' . $i : '' ), DIST_URI . '/' . $css_file );
            }
        }

        // main JS file
        if ( ! empty($entry['file']) ) {
            wp_enqueue_script( 'main', DIST_URI . '/' . $entry['file'], [], '', true );
        }
    }



 }