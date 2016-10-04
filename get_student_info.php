<html>
<head>
<title> My Shitty Website </title>
</head>
<body>
<?php
	$host = "localhost";
	$db = "DB";
	$table = "Students";
	$user = "root";
	$pass = "";
	try {
		$pdo = new PDO("mysql:host=$host", $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = "USE $db";
		$pdo->exec($sql);
		$email_student = $_GET["email"];
		$statement = $pdo->prepare("SELECT * FROM $table WHERE email_student='$email_student'");
		$statement->execute();
		$result = $statement->fetchAll();
		echo $result[0]["first_name"]."<br>".$result[0]["last_name"]."<br>".$result[0]["email_student"]."<br>";
		$pdo = null;
	}
	catch(PDOException $e) {
		echo "Error: ".$e."<br>";
	}
?>
</body>
</html>