<?php

add_theme_support( 'menus' ); //Habilitar a funcão menu no wordpress

function registrar_menu_principal_desktop() {
    register_nav_menu('header-principal-desktop',__('Header Principal Desktop')); //Criar funcão para registar o menu
}
function registrar_menu_principal_mobile() {
    register_nav_menu('menu-principal-mobile',__('Header Principal Mobile')); //Criar funcão para registar o menu
}
function registrar_menu_rodape_1() {
    register_nav_menu('menu-rodape-1',__('Menu Rodape 1')); //Criar funcão para registar o menu
}
function registrar_menu_rodape_2() {
    register_nav_menu('menu-rodape-2',__('Menu Rodape 2')); //Criar funcão para registar o menu
}

function registrar_menu_rodape_3() {
    register_nav_menu('menu-rodape-3',__('Menu Rodape 3')); //Criar funcão para registar o menu
}


acf_add_options_page(array(
	'page_title' 	=> 'Editar Rodapé',
	'menu_title'	=> 'Editar Rodapé',
	'menu_slug' 	=> 'editar-rodape',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));

add_action('init', 'registrar_menu_principal_desktop');//Inicializar função do menu
add_action('init', 'registrar_menu_principal_mobile');//Inicializar função do menu
add_action('init', 'registrar_menu_rodape_1');//Inicializar função do menu
add_action('init', 'registrar_menu_rodape_2');//Inicializar função do menu
add_action('init', 'registrar_menu_rodape_3');//Inicializar função do menu