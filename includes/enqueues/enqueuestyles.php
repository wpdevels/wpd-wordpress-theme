<?php

/*
 * Enqueue the stylesheets
 */
function site_styles() {
	/*
	* Para discriminar por la versión comprimida o descomprimida agrego una constante en
	* el wp-config.php llamada 'WP_DEVELOPMENTMODE'. En caso de que sea TRUE estamos en entorno
	* de 'Desarrollo', en caso de que sea FALSE o bien que no exista estamos en el entorno de 'Producción'
	*
	* Teniendo en cuenta el valor de la constante genero la extensión del fichero '.css' para 'Desarrollo'
	* y 'min.css' para 'Producción'
	*/
  	$cssExtension = (defined('WP_DEVELOPMENTMODE') && WP_DEVELOPMENTMODE )?'.css':'.min.css';
  
	// Register the styles
	wp_register_style('style', get_bloginfo('template_url') . '/style' . $cssExtension, array(),false);


	// Enqueue the styles
	wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'site_styles' );

?>