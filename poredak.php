<!DOCTYPE html>

<html lang="hr-HR">

<head>

	<title>TŽBM?</title>

	<link rel="icon" type="image/x-icon" href="resources/tzbm.ico">



	<link rel="stylesheet" href="css/style-poredak.css">



</head>



<body>



	<?php

		include 'php/mysqli.php';

		include 'php/provjera-unos-igraca.php';

	?>



	<h1>Tko Želi Biti Milijunaš?</h1>



	

	<div id="home-button"  onclick="location='index.php'">

		<img src="resources/home.png"

			 alt="Pocetna"

			 width="100%"

			 height="100%">

		<div class="button-hover">

			<img src="resources/home-hover.png"

				 alt="Pocetna"

				 title="Idi na početnu"

				 width="100%"

				 height="100%">

		</div>

	</div>



	<h2>Poredak</h2>



	<div id="play-button"  onclick="location='kviz.php'">

		<?php

			if ($trenutni_id == '') {

				// igraj ako zelimo pokrenit iz poretka

				echo '<img src="resources/play.png"

						   alt="Igraj"

						   width="100%"

						   height="100%">



					  <div class="button-hover">

					  	  <img src="resources/play-hover.png"

									alt="Igraj"

				 		    		title="Zaigraj kviz"

				 					width="100%"

				 					height="100%">

					  </div>';	

			}

			else {

				// restart ako smo zavrsili  igrat

				echo '<img src="resources/restart.png"

						   alt="Restart"

						   width="100%"

						   height="100%">

						   

					  <div class="button-hover">

					  	  <img src="resources/restart-hover.png"

									alt="Restart"

				 		    		title="Igraj opet"

				 					width="100%"

				 					height="100%">

					  </div>';					   

			}

		?>

	</div>

	

	<table width="80%">

		<thead>

			<tr>

				<th width="10%"></th>

				<th width="35%" style="text-align:left">IME</th>

				<th width="30%">VRIJEME</th>

				<th width="25%">BODOVI</th>

			</tr>

		</thead>

		

		<tbody>

			<?php

				include 'php/ispis-poredak.php';

				$mysqli -> close();

			?>

		</tbody>

	</table>



</body>

</html>