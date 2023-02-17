<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-admin.css">



	<script src="js/jquery-3.6.0.min.js"></script>

	<script src="js/resize-admin.js" defer></script>



</head>



<body>

	<?php

		include 'php/mysqli.php';

		include 'php/provjera-admin.php';

		include 'php/unos-brisanje-pitanja.php';

	?>



	<h1>ADMINISTRATOR</h1>



	<span class="x-button" onclick="location='index.php'">&#10006;</span>



	<div><span id="novo-button" onclick="novoPrikaz()">NOVO PITANJE</span></div>



	<hr>



	<?php

		include 'php/ispis-pitanja.php';

		$mysqli -> close();

	?>



	<div id="shade">

		<div id="modal">

			<span class="x-button" onclick="novoSakrij()">&#10006;</span>

			<form method="post" >



				<label>Pitanje</label><br>

				<input required type="text" name="tekst-pitanja" id="tekst-pitanja"><br>



				<label>Tocno</label><br>

				<input required type="text" name="tocno-odg"><br>



				<label>Krivo 1</label><br>

				<input required type="text" name="krivo1-odg"><br>



				<label>Krivo 2</label><br>

				<input required type="text" name="krivo2-odg"><br>



				<label>Krivo 3</label><br>

				<input required type="text" name="krivo3-odg"><br>



				<input type="submit" id="dodaj" name="dodaj" value="DODAJ">

			</form>

		</div>

	</div>



	<script>

			// animacija prikaza modala

			function novoPrikaz() {

				$("#modal").fadeIn(500);

				$("#shade").fadeIn(500);

			}



			function novoSakrij() {

				$("#modal").fadeOut(500);

				$("#shade").fadeOut(500);

			}

	</script>



</body>

</html>