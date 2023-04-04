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
		<h3>Database</h3>
          <p>
               Connect to MySQL over MySQL client: mysql -h mysql -P 3306 --protocol=tcp -u latrobe -p
          </p>
          <p>
               You should see database version below:
          </p>
          <?php

          $host = 'mysql';
          $db   = 'latrobe';
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

          echo "<b>Database version: " . $result['Value']."</b>";
          ?>
	</main>

	<footer>
		<p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
	</footer>
</body>
</html>