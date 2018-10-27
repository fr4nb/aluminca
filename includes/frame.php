<!DOCTYPE html>
<html lang = <?php echo $lang ?> >

<head>
	
	<?php require 'includes/head.php'; ?>

</head>

<body id="page-top">	
	
	<?php 
		// page select
		switch ($page) {
			case 'promo':
				require 'includes/content-promo.php';
				break;
			
			default:
				require 'includes/content.php';
				break;
		}

		require 'includes/script.php';
	?>

</body>

</html>