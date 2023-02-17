<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-login.css">



	<script src="js/jquery-3.6.0.min.js"></script>

	<script src="js/resize-menu.js" defer></script>



</head>



<body>



	<?php include 'php/login-setup.php'; ?>

	

	<h1>Tko Želi Biti Milijunaš?</h1>

	

	<form method="post">



		<div class="okvir-glow">

				<input type="text" name="username" title="" placeholder="USERNAME">

		</div><br>



		<div class="okvir-glow">

			<input type="password" name="password" title="" placeholder="PASSWORD">

		</div><br>

		<input id="unesi" type="submit" name="unesi" value="UNESI">

	</form>

	



	<h2 id="odustani" onclick="location='index.php'">Odustani</h2>





	<?php

	    if (isset($_GET['krivo'])) { $krivo = 'krivo'; }

		else { $krivo = ''; }

	?>



	<script>

		$(document).ready(function() {

			if ( "<?php echo $krivo; ?>" == "krivo") {

				$(".okvir-glow").css("background", "red");

			}

		});

	</script>

	

</body>

</html>