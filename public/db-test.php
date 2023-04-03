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
		<h2>Database</h2>
          <p>
          Connect to MySQL on docker.
          mysql -h mysql -P 3306 --protocol=tcp -u latrobe -p
          </p>
          <?php

          $host = 'mysql';
          $db   = 'week4';
          $user = 'latrobe';
          $pass = 'password';
          $port = "3306";
          $charset = 'utf8mb4';

          $options = [
               PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
               PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
               PDO::ATTR_EMULATE_PREPARES   => false,
          ];

          $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
          $pdo = new PDO($dsn, $user, $pass, $options);

          $query = $pdo->query('SHOW VARIABLES like "version"');
          $result = $query->fetch();

          echo "Database version: " . $result['Value'];
          ?>
	</main>

	<footer>
		<p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
	</footer>
</body>
</html>