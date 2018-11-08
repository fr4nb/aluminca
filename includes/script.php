<!-- jQuery -->
<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
</script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->

<!-- Theme JavaScript -->
<script src="/js/creative.js"></script>

<!-- Custom JS -->
<script src="/js/custom.js"></script>

<!-- Page scripts -->
<?php 
	switch ($page) {
		case 'promo':
		?> 
			<script src="/js/pages/promo.js"></script>
		<?php
			break;
		
		default:
			?> 
			<script src="/js/pages/home.js"></script>

			<!-- Etiqueta global de sitio (gtag.js) de Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126567685-3"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-126567685-3');
			</script>
		<?php
			break;
	}
?>