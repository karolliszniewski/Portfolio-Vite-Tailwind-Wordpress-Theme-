<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// DEVELOPMENT = TRUE , PRODUCTION = FALSE
define('IS_VITE_DEVELOPMENT', false);

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



// Dodajemy metabox do edycji posta
function add_project_url_meta_box()
{
    add_meta_box(
        'project_url_meta_box', // Unikalny identyfikator
        'External Project URL', // Tytuł metaboxa
        'render_project_url_meta_box', // Callback do wyświetlenia pola
        'post', // Post type
        'side', // Gdzie wyświetlić (może być też 'normal' lub 'advanced')
        'default'
    );
}
add_action('add_meta_boxes', 'add_project_url_meta_box');

function render_project_url_meta_box($post)
{
    $project_url = get_post_meta($post->ID, '_project_url', true);
?>
    <label for="project_url">External URL:</label>
    <input type="text" id="project_url" name="project_url" value="<?= esc_attr($project_url); ?>" style="width: 100%;" />
<?php
}


function save_project_url_meta_box($post_id)
{
    if (array_key_exists('project_url', $_POST)) {
        update_post_meta(
            $post_id,
            '_project_url',
            sanitize_text_field($_POST['project_url'])
        );
    }
}
add_action('save_post', 'save_project_url_meta_box');
