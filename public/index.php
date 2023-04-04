<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ITF: PHP</title>
</head>

<body class="body">
	<header>
		<ol>
			<li><a href="./index.php"><h3>PHP info</h3></a></li>
			<li><a href="./db-test.php"><h3>DB info</h3></a></li>
		<ol>
	</header>

	<main>
		You should see PHP version below:
        <p><?php phpinfo(); ?></p>
    </main>

	<footer>
		<p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
	</footer>
</body>
</html>