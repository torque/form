<html>
<head>
	<title> My shitty website </title>
</head>
<body>
<?php
	$host = "127.0.0.1";
	$db = "DB";
	$table = "Students";
	$user = "root";
	$pass = "";
	$charset = "utf8";
	try {
		$pdo = new PDO("mysql:host=localhost", $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = "CREATE DATABASE IF NOT EXISTS $db";
		$pdo->exec($sql);
		// echo "Database $db created successfully <br>";
		$sql = "USE $db";
		$pdo->exec($sql);
		$sql = "CREATE TABLE IF NOT EXISTS $table (first_name VARCHAR(255), last_name VARCHAR(255), email_student VARCHAR(255) PRIMARY KEY)";
		$pdo->exec($sql);
		// echo "Table $table create successfully. <br>";
		$statement = $pdo->prepare("INSERT IGNORE INTO $table (first_name, last_name, email_student) VALUES (:fname, :lname, :email_student)");
		$statement->bindParam(':fname', $firstname);
		$statement->bindParam(':lname', $lastname);
		$statement->bindParam(':email_student', $email_student);
		$firstname = $_GET["first_name"];
		$lastname = $_GET["last_name"];
		$email_student = $_GET["email"];
		// echo "$firstname $lastname <br>";
		$statement->execute();
		// echo "Added $firstname $lastname to table $table in $db. <br>";
		$to = $email_student;
		// $to      = strtolower($firstname[0]).strtolower($lastname)."@scu.edu";
		$subject = "I have submitted a form";
		$message = "Please approve my form at $host/get_student_info.php?email=$to!\n\nSincerely,\n$firstname $lastname";
		$headers = "From: $firstname";
		mail($to, $subject, $message, $headers);
		// echo "Sent an email to $to <br>";
		echo "First Name: ".$firstname."<br>";
		echo "Last Name: ".$lastname."<br>";
		echo "Email: ".$to."<br>";
	}
	catch(PDOException $e) {
		echo "Failed to connect: ".$e->getMessage()."<br>";
	}
	$pdo = null;
?>
</body>
</html>