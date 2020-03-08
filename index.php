<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet">
    <link href="assets/css/stylesheets/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="42" height="14" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preços</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Link dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Ação</a>
                        <a class="dropdown-item" href="#">Outra ação</a>
                        <a class="dropdown-item" href="#">Algo mais aqui</a>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav><!-- linha do menu ao topo -->

    <div class="sliders">
        <div class="slide">
            <div class="conteudo">
                <div class="centralizar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="assets/img/slogan.png" class="img-fluid" alt="Sua Próxima Agência, Seu Próximo Resultado">
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
                    <img src="assets/img/brasil.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="bloco-card-empresa">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <hr>
                    <img src="assets/img/brasil.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="bloco-card-empresa">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <hr>
                    <img src="assets/img/eua.png" alt="">
                    Lorem ipsum dolo sit, 10<br />
                    Lorem ipsum dolor sit, CEP: 0000000
                </div>
            </div>
        </div><!-- linha bandeiras -->

    </div><!-- bloco do container -->

   
    <footer class="container-fluid">
        <div class="row">
            <div class="col">
                Copyright &copy; Agência Moustache LTDA. Todos os direitos reservados
            </div>
            <div class="col text-right">
                <a href="#">Link Externo 1</a> | <a href="#">Link Externo 2</a>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/bxslider/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.telefone-mascara').mask('(99) 99999-9999');
            $('.nascimento-mascara').mask('99/99/9999');
            $('.cep-mascara').mask('99999-999');

            $('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                auto: true,
                default: true,
                moveSlides: 1,
                infiniteLoop: true,
                slideWidth: 370,
                slideMargin: 10,
                autoHover: true,
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '>',
                prevText: '<',
            });

        });

    </script>
  </body>
</html>