<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-kraj.css">



	<script src="js/jquery-3.6.0.min.js"></script>

	<script src="js/resize-menu.js" defer></script>

	<script src="js/unos-ime.js" defer></script>



</head>



<body>



	<?php

		include 'php/mysqli.php';
		
		include 'php/provjera-kraj.php';
	
	?>

	

	<h1>Tko Želi Biti Milijunaš?</h1>

	

	<?php if (isset($_GET['gg'])) { echo '<p id="gg">GG</p>'; } ?>



	<span style="white-space:nowrap">Molimo unesite</span>

	<span sryle="white-space:nowrap">vaše ime:</span><br>



<!-- input ime -->

	<div class="okvir-glow">

		<div class="okvir-silver">

			<form id="ime-forma" action="poredak.php#igrac" method="post">

				<input

					required

					id="ime"

					type="text"

					name="ime"

					pattern="\w{3,10}"

					maxlength="10"

					autocomplete="off"

					title="">

			</form>

		</div>

	</div>



	<p id="toast">Ime se sastoji od 3-10 znakova eng. abecede bez razmaka.</p>



	<br>



	<input id="unesi" type="submit" form="ime-forma" name="unesi" value="UNESI">



	<h2 id="odustani" onclick="location='index.php'">Odustani</h2>

	

</body>

</html>