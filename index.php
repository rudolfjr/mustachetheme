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
                    <div class="slide">
                        <div class="card">
                            <div class="caixa-imagem" style="backgorund-image: url('assets/img/card.jpg');">
                                <a href="#">Categoria A</a>
                            </div>
                            <div class="card-body">
                                <h2>Lorem ipsum<br/>dolor sit</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn">Link Externo</a>
                            </div>
                        </div>
                    </div><!-- slide -->

                    <div class="slide">
                        <div class="card">
                            <div class="caixa-imagem" style="backgorund-image: url('assets/img/card.jpg');">
                                <a href="#">Categoria A</a>
                            </div>
                            <div class="card-body">
                                <h2>Lorem ipsum<br/>dolor sit</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn">Link Externo</a>
                            </div>
                        </div>
                    </div><!-- slide -->

                    <div class="slide">
                        <div class="card">
                            <div class="caixa-imagem" style="backgorund-image: url('assets/img/card.jpg');">
                                <a href="#">Categoria A</a>
                            </div>
                            <div class="card-body">
                                <h2>Lorem ipsum<br/>dolor sit</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn">Link Externo</a>
                            </div>
                        </div>
                    </div><!-- slide -->

                    <div class="slide">
                        <div class="card">
                            <div class="caixa-imagem" style="backgorund-image: url('assets/img/card.jpg');">
                                <a href="#">Categoria A</a>
                            </div>
                            <div class="card-body">
                                <h2>Lorem ipsum<br/>dolor sit</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn">Link Externo</a>
                            </div>
                        </div>
                    </div><!-- slide -->
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

        <form class="row">
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
                <button type="submit">Enviar Dados</button>
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