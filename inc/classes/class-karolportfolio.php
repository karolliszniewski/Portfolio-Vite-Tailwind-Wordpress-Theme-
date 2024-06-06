<?php
/**
 * Bootstrap the Theme.
 * 
 * @package portfolioKarol
 */

 namespace KarolPortfolio\inc;
 use KarolPortfolio\inc\Traits\Singleton;

 class KarolPortfolio{
    use Singleton;

    protected function __construct(){
        // load class.
        Assets::get_instance();
        Menus::get_instance();
        Vit::get_instance();

        $this->set_hooks();
        
    }


    protected function set_hooks(){
        /**
         * Actions.
         */

         add_action('after_setup_theme',[$this,'setup_theme']);

    }

    public function setup_theme(){
        add_theme_support( 'title-tag' );

        $defaults = array(

        );

        add_theme_support('custom-logo', [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => ['site-title', 'site-description' ],
            'unlink-homepage-logo' => true, 
        ]);

        add_theme_support("post-thumbnails");
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support('automatic-feed-links');

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list', 
            'gallery',
            'caption',
            'script',
            'style'
        ) );


        add_editor_style();
        add_theme_support('wp-block-style');
        add_theme_support('align-wide');

        global $content_width;
        if(!isset($content_width)){
            $content_width = 1240;
        }
    }




 }