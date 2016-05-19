<footer class="footer">
	<br><br><br>

	<div class="container text-center">
	     Feito por Desenvolvedores Apaixonados <i class="fa fa-heart heart text-danger"></i> da <a class="text-warning" href="#">Zimpbox</a>
	</div>
</footer>



<script src="js/bootstrap.min.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/material-kit.js" type="text/javascript"></script>


<script type="text/javascript">
	$().ready(function(){
		// the body of this function is in assets/material-kit.js
		$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
	});
</script>

<script type="text/javascript">

    // Chamada para funcionar Tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Animação Hover para botões
    // $( ".btn" ).hover(function() {
    //   $( this ).toggleClass( "animated jello" );
    // });



    $().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

            window_width = $(window).width();

            if (window_width >= 768){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});



		// Definindo a Altura do StickyFooter
		var alturafooter = $( ".footer" ).height();  // Descobrindo a altura do elemento.
		$( ".home__site" ).css( "margin-bottom", alturafooter );


		// Fixar Menu no Topo ao rolar mouse. Usar a função.height();
		$(window).scroll(function() {
			var scroll_top = $(window).scrollTop();

				if ($(window).scrollTop() >= 160) {
					$(".navbar-fixed-top").addClass("fixa__topo");
				}
				else {
					$(".navbar-fixed-top").removeClass("fixa__topo");
				}

		});


</script>

</body>
</html>
