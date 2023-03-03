<footer>
      <h2>Feito por<a target="_blank" href="https://nadsistemas.com/">NADSistemas</a></h2>
      <p>Todos os direitos reservados!</p>
     
</footer>


<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/slick.min.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/constants.js"></script> 
<script src="<?php echo INCLUDE_PATH ?>js/formularios.js"></script>     
             
        <script>
             $('nav.mobile h3').click(function(){
    		$('nav.mobile ul').slideToggle();
    	    });
  
     
        </script>  

<script>
$('section.depoimentos .depoimentos-box').slick({
    dots: true,
    arrows:false,
    speed:1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
     pauseOnHover:false,
	});
</script>

        
<script>
$('section.carros-destaques .carros-box').slick({
    dots: true,
    arrows:false,
    speed:1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
     pauseOnHover:false,
	});
</script>


</body>
</html>