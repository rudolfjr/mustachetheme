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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/bxslider/jquery.bxslider.min.js"></script>

    <script>
        jQuery(document).ready(function(){

            jQuery('.telefone-mascara').mask('(99) 99999-9999');
            jQuery('.nascimento-mascara').mask('99/99/9999');
            jQuery('.cep-mascara').mask('99999-999');

            jQuery('.bxslider').bxSlider({
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

    <?php wp_footer(); ?>
  </body>
</html>