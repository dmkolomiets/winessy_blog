<?php

add_action('wp_enqueue_scripts', 'winessy_styles');
add_action('wp_enqueue_scripts', 'winessy_scripts');

function winessy_styles() {
    
    wp_enqueue_style( 'winassy-style', get_stylesheet_uri() );
    //wp_enqueue_style( 'twest-style', get_template_directory_uri() . '/assets/css/app.css' ); //conect any style
    
};

function winessy_scripts() {
    wp_enqueue_script( 'winessy-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	echo implode(' ', $words).' ...';
}

// function wp_corenavi() {
//     global $wp_query;
//     $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
//     $a['total'] = $total;
//     $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
//     $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
//     $a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
//     $a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"
  
//     if ( $total > 1 ) echo '<nav class="pagination">';
//     echo paginate_links( $a );
//     if ( $total > 1 ) echo '</nav>';
//   }

add_image_size( 'theme-preview', 300, 200, true );


?>

