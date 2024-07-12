<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// DEVELOPMENT = TRUE , PRODUCTION = FALSE
define('IS_VITE_DEVELOPMENT', true);

// defining some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/dist');
define('DIST_PATH', get_template_directory() . '/dist');

if (!defined('PORTFOLIOKAROL_DIR_PATH')) {
    define('PORTFOLIOKAROL_DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('PORTFOLIOKAROL_DIR_URI')) {
    define('PORTFOLIOKAROL_DIR_URI', untrailingslashit(get_template_directory_uri()));
}




require_once PORTFOLIOKAROL_DIR_PATH . '/inc/helpers/autoloader.php';

function karolPortfolio_first_instance_of_classes()
{
    KarolPortfolio\Inc\KarolPortfolio::get_instance();
}
karolPortfolio_first_instance_of_classes();
