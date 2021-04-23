<?php 
function load_files() {
    wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', null,'1.0',true);
    wp_enqueue_script('mainjs', get_theme_file_uri('/scripts/app.js'), null,'1.0',true);
    wp_enqueue_style('bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', '//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css');
    wp_enqueue_style('google-font-lato', '//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','load_files');
?>