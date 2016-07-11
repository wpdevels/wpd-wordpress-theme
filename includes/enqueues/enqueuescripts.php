<?php
/*
 * Register the JS scripts
 */
function site_scripts() {
	/*
	* Para discriminar por la versión comprimida o descomprimida agrego una constante en
	* el wp-config.php llamada 'WP_DEVELOPMENTMODE'. En caso de que sea TRUE estamos en entorno
	* de 'Desarrollo', en caso de que sea FALSE o bien que no exista estamos en el entorno de 'Producción'
	*
	* Teniendo en cuenta el valor de la constante genero la extensión del fichero '.js' para 'Desarrollo'
	* y 'min.js' para 'Producción'
	*/
  	$jsExtension = (defined('WP_DEVELOPMENTMODE') && WP_DEVELOPMENTMODE )?'.js':'.min.js';
  
	/* Registrar y encolar aquí los ficheros Javascripts. Ejemplo:
	wp_register_script('commonjs', get_bloginfo('template_url') . '/js/common' . $jsExtension, array('jquery'),'',true);
	wp_enqueue_script('contactojs');
	*/
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );
?>