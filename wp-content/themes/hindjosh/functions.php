<?php 

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-background');


register_sidebar(
    array(
        'name' => 'Sidebar Location', 
        'id' => 'sidebar',
    )
);
register_sidebar(
    
    array(
        'name' => 'Category Location', 
        'id' => 'category',
    ),
);