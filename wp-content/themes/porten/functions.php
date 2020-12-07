<?php 

add_action( 'wp_enqueue_scripts', 'porten_style' );

function porten_style() {

    // wp_enqueue_style( 'normalize-style', get_template_directory_uri() . 'style.css' );
    // wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/asstes/css/magnific-popup.css' );
    // //! подключаем стили через папку
	wp_enqueue_style( 'main-style', get_stylesheet_uri() ); //! подключаем стили через ссылку
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

// правильный способ подключить стили и скрипты темы

?>
