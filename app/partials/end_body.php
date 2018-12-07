	<script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/slick/slick.min.js"></script>
    <script type="text/javascript">
    	$('.echo-feature-slider').slick({
		  infinite: true,
		  autoplay: true,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  dots: true,
		  responsive: [
		  	{
		  		breakpoint: 480,
		  		settings: {
		  			slidesToShow: 1,
		  			slidesToScroll: 1,
		  			arrows: false,
		  			dots: false,
		  			centerMode: true,
		  			centerPadding: '60px',
		  			slidedToShow: 3
		  		}
		  	}
		  ]
		});
    </script>
    <script type="module" src="../assets/js/search_product.js"></script>
    <script src="../assets/js/edit_cart_quantity.js"></script>
    <script type="text/javascript" src="../assets/js/update_cart.js"></script>
    <script src="../assets/js/delete_from_cart.js"></script>
    <!-- <script type="module" src="../assets/js/function_templates.js"></script> -->
    <script type="module" src="../assets/js/filter_by_category.js"></script>
    <script type="text/javascript" src="../assets/js/create_user.js"></script>
    <script type="text/javascript" src="../assets/js/authenticate.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>