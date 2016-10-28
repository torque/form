<html>
<head>
<title> Tuition and Fees Payment Authorization for Graduate Students </title>
</head>
<body>
<?php
	$host = "dbserver.engr.scu.edu";
	$db = "sdb_jho2";
	$table = "Students";
	$user = "jho2";
	$pass = "00001025576";
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
		echo $result[0]["first_name"]."<br>".$result[0]["last_name"]."<br>".$result[0]["email_student"]."<br>".$result[0]["major"]."<br>".$result[0]["advisor"]."<br>".$result[0]["atype"]."<br>".$result[0]["year"]."<br>".$result[0]["quarter"]."<br>".$result[0]["hdept"]."<br>".$result[0]["cid1"]." ".$result[0]["ctitle1"]." ".$result[0]["credit1"]."<br>".$result[0]["cid2"]." ".$result[0]["ctitle2"]." ".$result[0]["credit2"]."<br>".$result[0]["cid3"]." ".$result[0]["ctitle3"]." ".$result[0]["credit3"]."<br>".$result[0]["cid4"]." ".$result[0]["ctitle4"]." ".$result[0]["credit4"]."<br>".$result[0]["cid5"]." ".$result[0]["ctitle5"]." ".$result[0]["credit5"]."<br>".$result[0]["cid6"]." ".$result[0]["ctitle6"]." ".$result[0]["credit6"]."<br>".$result[0]["stusign"]."<br>".$result[0]["studate"]."<br>";
		$pdo = null;
	}
	catch(PDOException $e) {
		echo "Error: ".$e."<br>";
	}
?>
</body>
</html>