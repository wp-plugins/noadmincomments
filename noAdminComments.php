<?php
/*
Plugin Name: noAdminComments
Plugin URI: 
Description: Plugin que esconde comentários dentro do Painel Administrador do Wordpress
Author: Nova Brazil Agência Interativa
Version: 1.0.0
Author URI: http://www.novabrazil.art.br
*/


/* Adiciona login.css na tela de LOGIN */
add_filter( 'admin_head', 'nbrazil_admin_hideComments' ); 
function nbrazil_admin_hideComments() {
  echo "<link rel='stylesheet' href='" . plugins_url( 'estilo.css', __FILE__ )."' type='text/css'/>"."\n";
}
?>