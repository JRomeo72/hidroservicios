<?php
	require_once "./controllers/viewsController.php";
	$IV = new viewsController();

	$view=$IV -> get_view_controller();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Hidroservicios</title>

		<?php include "./components/Links.php" ?>

	</head>
	<body>

		<?php
			if( $view=="404" ){
				require_once "./views/".$view."-view.php";
			}else {
		?>
		
		<!-- Main container -->

		<header>
			<?php include "./components/Header.php"; ?>
		</header>

		<nav>
			<?php include "./components/Navbar.php" ?>
		</nav>
		
		<main>
			<?php include $view; ?>
		</main>
		<div class="elfsight-app-d606ffeb-a53a-4153-b1fb-64c8e03130f5"></div>
        <footer>
            <?php include "./components/Footer.php"; ?>
        </footer>
		
		<?php } include "./components/Scripts.php" ?>
	</body>
</html>