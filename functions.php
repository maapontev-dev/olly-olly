<?php

// Add scripts and stylesheets
function olly_scripts()
{
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_script('app', get_template_directory_uri() . '/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'olly_scripts');

// WordPress Titles
function olly_wp_title($title, $sep)
{
	global $paged, $page;
	if (is_feed()) {
		return $title;
	}
	// Add the site name.
	$title .= get_bloginfo('name');
	// Add the site description for the home/front page.
	$site_description = get_bloginfo('description', 'Fdisplay');
	if ($site_description && (is_home() || is_front_page())) {
		$title = "$title $sep $site_description";
	}
	return $title;
}
add_filter('wp_title', 'olly_wp_title', 10, 2);

function main_menu() {
    register_nav_menus(
        array(
            'main-menu' => _( 'Main menu' )
        )
    );
}
add_action( 'init', 'main_menu' );