<?php
/**
 * Register menus;
 * 
 * @package portfolioKarol
 */

 namespace KarolPortfolio\inc;
 use KarolPortfolio\inc\Traits\Singleton;

 class Menus{
    use Singleton;

    protected function __construct(){


        $this->set_hooks();
        
    }


    protected function set_hooks(){
        /**
         * Actions.
         */

         add_action('init',[$this,'register_my_menus']);
        
          
    }

    public function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => esc_html__( 'Header Menu Desktop' ),
            'header-menu-mobile' => esc_html__( 'Header Menu Mobile' ),
            'extra-menu' => esc_html__( 'Footer' )
           )
         );
       }

       public function get_menu_id($location){
        // Get all the locations
        $locations = get_nav_menu_locations();

        // get object id by location
        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
       }




 }