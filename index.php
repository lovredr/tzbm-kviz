<!DOCTYPE html>
<html lang="hr-HR">
<head>
	<title>TŽBM?</title>
	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">

	<link rel="stylesheet" href="css/style-index.css">

	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/resize-menu.js" defer></script>

</head>

<body>

	<?php

		include 'php/mysqli.php';
		
		include 'php/provjera-index.php';

	?>

	<h1>Tko Želi Biti Milijunaš?</h1>
	
<!-- 1 -->
	<div class="okvir-glow">
		<div class="okvir-silver">
			<div class="okvir-odabir" onclick="location='kviz.php'">
				<div class="okvir-textbox">
					<span class="okvir-text">
						Pokreni Kviz
					</span>
				</div>
			</div>
		</div>
	</div>

    <br>
	
<!-- 2 -->
	<div class="okvir-glow">
		<div class="okvir-silver">
			<div class="okvir-odabir" onclick="location='poredak.php'">
				<div class="okvir-textbox">
					<span class="okvir-text">
						Poredak
					</span>
				</div>
			</div>
		</div>
	</div>

	<br>

<!-- 3 -->
	<div class="okvir-glow">
		<div class="okvir-silver">
			<div class="okvir-odabir" onclick="location='login.php'">
				<div class="okvir-textbox">
					<span class="okvir-text">
						Admin
					</span>
				</div>
			</div>
		</div>
	</div>

</body>
</html>