<?php
// Carregando certas funções do bootstrap
require_once('wp_bootstrap_navwalker.php');

if (function_exists('add_theme_support'))
{
    // Adicionar suporte a menus
    add_theme_support('menus');

    // Adicionando suporte para thumbs
    add_theme_support('post-thumbnails');
    add_image_size('img-card', 391, 147, true); 

    // Adicionando suporte para pingbacks
    add_theme_support('automatic-feed-links');
}

// Função que carrega scripts no header
function headerScripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1'); 
        wp_enqueue_style('bootstrap');

        wp_register_style('fontawsome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2'); 
        wp_enqueue_style('fontawsome');


        wp_register_style('bxslider', get_template_directory_uri() . '/assets/bxslider/jquery.bxslider.css', array(), '1.0.0'); 
        wp_enqueue_style('bxslider');

        wp_register_style('styles', get_template_directory_uri() . '/assets/css/stylesheets/styles.css', array(), '1.0.0'); 
        wp_enqueue_style('styles');

    }
}

// Função que carrega scripts no footer
function footerScripts(){
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1'); 
    wp_enqueue_script('jquery');

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0'); 
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1'); 
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery-mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array(), '1.0.0'); 
    wp_enqueue_script('jquery-mask');

    wp_register_script('bxslider', get_template_directory_uri() . '/assets/bxslider/jquery.bxslider.min.js', array(), '1.0.0'); 
    wp_enqueue_script('bxslider');

    
}

// Limitar o tamanho do Excerpt
function limiteExcerpt( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'limiteExcerpt', 999 );


/* Requisições Ajax */
function my_ajax_enviarForm() {

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');

    $msg_email = '';

    foreach ($_POST as $key => $value) {
        $msg_email .= $key . ': ' . $value . '\n';
    }

    if(wp_mail( get_option('admin_email'), 'Contato Website | '.$data.' | ' . get_bloginfo('name'), $msg_email)){
        echo json_encode(array('resposta' => true));
    }else{
        echo json_encode(array('resposta' => false));
    };
    
    wp_die();

}

function my_ajax_carregarNoticia() {


    $post = get_post( $_POST['id'] );

    if($post){
        echo json_encode(array('titulo' => $post->post_title, 'descricao' => $post->post_content));
    }else{
        echo json_encode(array('titulo' => 'Não foi possível carregar esta notícia, tente mais tarde', 'descricao' => ''));
    };
    
    wp_die();

}



//Adicionando ações
add_action('init', 'headerScripts'); // Adicionando scripts no header
add_action( 'wp_footer', 'footerScripts' ); // Adicionando scripts no footer

add_action( 'wp_ajax_enviarForm', 'my_ajax_enviarForm' );
add_action( 'wp_ajax_nopriv_enviarForm', 'my_ajax_enviarForm' );

add_action( 'wp_ajax_carregarNoticia', 'my_ajax_carregarNoticia' );
add_action( 'wp_ajax_nopriv_carregarNoticia', 'my_ajax_carregarNoticia' );
?>