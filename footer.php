    <!-- Modal Carregando Notícia Via Ajax -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
    
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

            // Máscaras para formulário
            $('.telefone-mascara').mask('(99) 99999-9999');
            $('.nascimento-mascara').mask('99/99/9999');
            $('.cep-mascara').mask('99999-999');

            /* Configuração do slider/ Carrosel de cards */
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

            /* Envio de Formulário via Ajax*/
            $('#formulario').submit(function(e){
                e.preventDefault();
                
                valores = $(this).serialize();

                $.ajax({
                    url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=enviarForm",
                    type: 'POST',
                    data: valores,
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

            /* Carregar Notícia Via ajax */
            $('.carregar-noticia').click(function(){     
                
                $.ajax({
                    url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php?action=carregarNoticia",
                    type: 'POST',
                    data: {
                        id: $(this).data('id')
                    },
                    success: function( response ){
                        var json = $.parseJSON(response)
                        $('.modal-title').html(json.titulo);
                        $('.modal-body').html(json.descricao);
                    }
                });
            });

        })( jQuery );

    </script>

    
  </body>
</html>