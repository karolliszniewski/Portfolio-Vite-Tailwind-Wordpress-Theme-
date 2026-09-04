<?php
/**
 * Enqueue theme assets
 */

 namespace KarolPortfolio\inc;

use KarolPortfolio\Inc\Traits\Singleton;

 class Assets{
    use Singleton;

    protected function __construct(){
        // load class.

        $this->set_hooks();
    }


    protected function set_hooks(){
        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);

    }

    public function enqueue_assets(){
        wp_enqueue_script('jquery');
    }




 }