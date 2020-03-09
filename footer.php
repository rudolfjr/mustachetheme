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

    <?php wp_footer(); ?>

    <script>
        (function($) {

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


            $('#formulario').submit(function(e){
                e.preventDefault();
                
                valores = $(this).serialize();

                $.ajax({
                    url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=enviarForm",
                    type: 'POST',
                    data: valores,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function( response ){
                        if(response){
                            $('.alert-primary').fadeIn().html('Formulário enviado com sucesso.');
                            $('input').val('');
                        }else{
                            $('.alert-danger').fadeIn().html('Formulário não pode ser enviado, tente novamente mais tarde.');
                        }
                    }
                });
            });

        })( jQuery );

    </script>

    
  </body>
</html>