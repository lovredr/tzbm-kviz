<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-kviz.css">



	<script src="js/jquery-3.6.0.min.js"></script>

	<script src="js/resize-kviz.js" defer></script>

	<script src="js/timer.js" defer></script>

	<script src="js/klik.js" defer></script>



</head>



<body>

	

	<?php

		include 'php/mysqli.php';

		include 'php/provjera-kviz.php';

		include 'php/odabir-pitanja.php';

		$mysqli -> close();

	?>



	<h1>Tko Želi Biti Milijunaš?</h1>



	<h2>

		Pitanje<br>

		<?php echo "$broj_pitanja / 10"; ?>

	</h2>



	<div class="okvir-pitanje">

		<div class="okvir-pitanje-textbox">

			<span class="hide">

				<?php

					echo $row['tekst_pitanja'];

				?>

			</span>

			<span>&ZeroWidthSpace;</span> <!-- treba da bude u livelu, dodano i na sve ABCD -->

		</div>

	</div>

	

<br>

	

<!-- A -->

	<div class="okvir-odgovor">

		<div class="okvir-odabir" id="a" onclick="klik(this.id)">

			<div class="okvir-odgovor-textbox">

				<span class="dot orange hide">&#9670;</span>

				<span class="orange hide">A:&nbsp;</span>

				<span class="okvir-odgovor-text hide">

					<?php

						echo $odgovor[0];

					?>

				</span>

				<span class="dot">&ZeroWidthSpace;</span>

			</div>

		</div>

	</div><!--

	

B--><div class="okvir-odgovor">

		<div class="okvir-odabir" id="b" onclick="klik(this.id)">

			<div class="okvir-odgovor-textbox">

				<span class="dot orange hide">&#9670;</span>

				<span class="orange hide">B:&nbsp;</span>

				<span class="okvir-odgovor-text hide">

					<?php

						echo $odgovor[1];

					?>

				</span>

				<span class="dot">&ZeroWidthSpace;</span>

			</div>

		</div>

	</div>



<br>



<!-- C -->

	<div class="okvir-odgovor">

		<div class="okvir-odabir" id="c" onclick="klik(this.id)">

			<div class="okvir-odgovor-textbox">

				<span class="dot orange hide">&#9670;</span>

				<span class="orange hide">C:&nbsp;</span>

				<span class="okvir-odgovor-text hide">

					<?php

						echo $odgovor[2];

					?>

				</span>

				<span class="dot">&ZeroWidthSpace;</span>

			</div>

		</div>

	</div><!--

			

D--><div class="okvir-odgovor">

		<div class="okvir-odabir" id="d" onclick="klik(this.id)">

			<div class="okvir-odgovor-textbox">

				<span class="dot orange hide">&#9670;</span>

				<span class="orange hide">D:&nbsp;</span>

				<span class="okvir-odgovor-text hide">

					<?php

						echo $odgovor[3];

					?>

				</span>

				<span class="dot">&ZeroWidthSpace;</span>

			</div>

		</div>

	</div>



<br>



	<h2 class="timer">

		Vrijeme<br>

		<span id="vrijeme-num"></span>

		<span id="proteklo-vrijeme" style="display:none"><?php echo $proteklo_vrijeme; ?></span>

	</h2>

	

	<h2 id="odustani" onclick="location='index.php'">Odustani</h2>



	<form id="konacan-odgovor" action="kviz-odgovor.php" method="post">

		<input type="hidden" name="a" value="<?php echo $odgovor[0]; ?>">

		<input type="hidden" name="b" value="<?php echo $odgovor[1]; ?>">

		<input type="hidden" name="c" value="<?php echo $odgovor[2]; ?>">

		<input type="hidden" name="d" value="<?php echo $odgovor[3]; ?>">

		<input type="hidden" name="konacno-slovo" id="konacno-slovo" value="">

	</form>

	

</body>

</html>