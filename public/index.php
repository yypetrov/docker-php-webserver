<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ITF: PHP</title>
    <link rel="stylesheet" href="styles.css">
  </head>
<body class="body">
	<header>
		<?php include "header.php"; ?>
	</header>

	<main>
		<h2>What is PHP?</h2>
		<p>
			<?php
			echo "<h4> Function </h4>";
			function sumTwo(int $a, int $b) : float {
				return ($a + $b)*2.0;
			}
			$res = sumTwo(5,5);
			echo $res;

			echo "<h4> Arrays </h4>";
			$cars = array("Volvo", "BMW", "Toyota");
			var_dump($cars);
			$strCars = implode(", ", $cars);
			echo "<br> Cars: $strCars";
			
			// foreach loop
			echo "<ul>";
			foreach ($cars as $car) {
				echo "<li>$car</li>";
			}
			echo "</ul>";
			
			echo "<h4> == VS === </h4>";
			echo "5 == 5: "; var_dump(5 == 5); echo("<br>");
			echo "5 == '5': "; var_dump(5 == '5'); echo("<br>");
			echo "5 === '5': "; var_dump(5 === '5'); echo("<br>");
			?>
		</p>
	</main>

	<footer>
		<p>mysql -h localhost -P 3306 --protocol=tcp -u latrobe -p</p>
		<p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
	</footer>
</body>
</html>