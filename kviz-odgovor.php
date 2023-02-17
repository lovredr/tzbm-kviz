<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-odgovor.css">



	<script src="js/jquery-3.6.0.min.js"></script>

	<script src="js/resize-kviz.js" defer></script>

	<script src="js/timer.js" defer></script>

	<script src="js/tocnost.js" defer></script>



</head>



<body>

	

	<?php

		include 'php/mysqli.php';

		include 'php/provjera-kviz-odgovor.php';

		include 'php/konacan.php';

		include 'php/tocnost.php';

		$mysqli -> close();

	?>



	<h1>Tko Želi Biti Milijunaš?</h1>



	<h2>

		Pitanje<br>

		<?php echo "<span id='timer-stop'>$broj_pitanja</span> / 10"; ?>

	</h2>



	<div class="okvir-pitanje">

		<div class="okvir-pitanje-textbox">

			<span>

				<?php

					echo $tekst_pitanja;

				?>

			</span>

		</div>

	</div>

	

<br>

	

<!-- A -->

	<div id="a" class="okvir-odgovor">

		<div class="okvir-odgovor-textbox">

			<span class="dot orange">&#9670;</span>

			<span class="orange">A:&nbsp;</span>

			<span class="okvir-odgovor-text">

				<?php

					echo $a;

				?>

			</span>

		</div>

	</div><!--

	

B--><div id="b" class="okvir-odgovor">

		<div class="okvir-odgovor-textbox">

			<span class="dot orange">&#9670;</span>

			<span class="orange">B:&nbsp;</span>

			<span class="okvir-odgovor-text">

				<?php

					echo $b;

				?>

			</span>

		</div>

	</div>



<br>



<!-- C -->

	<div id="c" class="okvir-odgovor">

		<div class="okvir-odgovor-textbox">

			<span class="dot orange">&#9670;</span>

			<span class="orange">C:&nbsp;</span>

			<span class="okvir-odgovor-text">

				<?php

					echo $c;

				?>

			</span>

		</div>

	</div><!--

			

D--><div id="d" class="okvir-odgovor">

		<div class="okvir-odgovor-textbox">

			<span class="dot orange">&#9670;</span>

			<span class="orange">D:&nbsp;</span>

			<span class="okvir-odgovor-text">

				<?php

					echo $d;

				?>

			</span>

		</div>

	</div>



<br>



	<h2 class="timer">

		Vrijeme<br>

		<span id="vrijeme-num"></span>

		<span id="proteklo-vrijeme" style="display:none"><?php echo $proteklo_vrijeme; ?></span>

	</h2>

	

	<h2 id="odustani" onclick="location='index.php'">Odustani</h2>



	<span id="konacno-slovo" style="display:none"><?php echo $konacno_slovo ?></span>

	<span id="tocno-slovo" style="display:none"><?php echo $tocno_slovo ?></span>

	

</body>

</html>