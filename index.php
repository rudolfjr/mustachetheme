<?php get_header(); ?>

    <div class="sliders">
        <div class="slide">
            <div class="conteudo">
                <div class="centralizar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/slogan.png" class="img-fluid" alt="Sua Próxima Agência, Seu Próximo Resultado">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- linha do topo, podendo mudar para slider -->

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="title">Conteúdo Interno</h1>
            </div>
        </div><!-- linha de título -->

        <div class="row">
            <div class="col-xs-12">
                <div class="bxslider">
                    <?php
                        $wp_query = new WP_Query( array ( 
                            'post_type' => 'post',
                            'posts_per_page' => 5
                        ) );
                        if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts()) : $wp_query->the_post(); 
                
                            if ( has_post_thumbnail() ) 
                            {
                                $img_final = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'img-card' );
                            }
                    ?>
                    <div class="slide">
                        <div class="card">
                            <div class="caixa-imagem" style="backgorund-image: url('<?php echo $img_final['0']; ?>');">
                                <?php the_category(' '); ?>
                            </div>
                            <div class="card-body">
                                <h2><?php the_title(); ?></h2>
                                <div class="card-text">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#modalExemplo" data-id="<?php echo get_the_ID(); ?>" class="btn carregar-noticia">Link Externo</a>
                            </div>
                        </div>
                    </div><!-- slide -->
                    <?php endwhile;  else: {} endif; ?>
                </div>
            </div>
        </div><!-- Linha para slider de cards -->

        <div class="row">
            <div class="col text-center">
                <div class="setas-box" id="slider-prev"></div>
            </div>
            <div class="col text-center">
                <div class="setas-box" id="slider-next"></div>
            </div>
        </div><!-- linha para comando de anterior e próximo de cards -->

        <div class="row">
            <div class="col text-center">
                <h1 class="title">Lorem ipsum dolor sit amet</h1>
            </div>
        </div><!-- linha de título -->

        <form class="row" id="formulario">
            <div class="col-xs-12 col-sm-6">
                <input type="text" placeholder="Seu Nome" name="nome" required>
                <input type="email" placeholder="Seu E-mail" name="email" required>
                <input type="text" placeholder="Seu Telefone" class="telefone-mascara" name="telefone" required>
                <input type="text" placeholder="Data de Nascimento" class="nascimento-mascara" name="nascimento" required>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input type="text" placeholder="CEP" class="cep-mascara" name="cep" required>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" placeholder="Endereço" name="endereco" required>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <input type="text" placeholder="Número" name="numero" required>
                    </div>
                </div>
                <input type="text" placeholder="Bairro" name="bairro" required>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" placeholder="Cidade" name="cidade" required>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <input type="text" placeholder="Estado" name="estado" required>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 text-center">
                <button type="submit">Enviar Dados</button> <div class="alert alert-primary" role="alert"></div><div class="alert alert-danger" role="alert"></div>
            </div>

        </form><!-- linha para formulário -->

        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="bloco-card-empresa">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <hr>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/brasil.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="bloco-card-empresa">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <hr>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/brasil.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="bloco-card-empresa">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <hr>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/eua.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
        </div><!-- linha bandeiras -->

    </div><!-- bloco do container -->

   
<?php get_footer(); ?>