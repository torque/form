<html>
<head>
	<title> Form Confirmation </title>
</head>
<body>
<?php
	$host = "dbserver.engr.scu.edu";
	$db = "sdb_jho2";
	$table = "Students";
	$user = "jho2";
	$pass = "00001025576";
	$charset = "utf8";
	try {
		$pdo = new PDO("mysql:host=$host", $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$sql = "CREATE DATABASE IF NOT EXISTS $db";
		$pdo->exec($sql);
		// echo "Database $db created successfully <br>";
		$sql = "USE $db";
		$pdo->exec($sql);
		$sql = "CREATE TABLE IF NOT EXISTS $table (first_name VARCHAR(255), last_name VARCHAR(255), email_student VARCHAR(255) PRIMARY KEY, major VARCHAR(255), advisor VARCHAR(255), ademail VARCHAR(255), atype VARCHAR(255), year VARCHAR(255), quarter VARCHAR(255), hdept VARCHAR(255), cid1 VARCHAR(255), ctitle1 VARCHAR(255),credit1 VARCHAR(255), cid2 VARCHAR(255), ctitle2 VARCHAR(255),credit2 VARCHAR(255), cid3 VARCHAR(255), ctitle3 VARCHAR(255),credit3 VARCHAR(255), cid4 VARCHAR(255), ctitle4 VARCHAR(255),credit4 VARCHAR(255), cid5 VARCHAR(255), ctitle5 VARCHAR(255),credit5 VARCHAR(255), cid6 VARCHAR(255), ctitle6 VARCHAR(255),credit6 VARCHAR(255), total VARCHAR(255), stusign VARCHAR(255),studate VARCHAR(255))";
		$pdo->exec($sql);
		// echo "Table $table create successfully. <br>";
		$statement = $pdo->prepare("INSERT IGNORE INTO $table (first_name, last_name, email_student, major, advisor, ademail, atype, year, quarter, hdept, cid1, ctitle1, credit1, cid2, ctitle2, credit2, cid3, ctitle3, credit3, cid4, ctitle4, credit4, cid5, ctitle5, credit5, cid6, ctitle6, credit6, total, stusign, studate) VALUES (:fname, :lname, :email_student, :major, :advisor, :ademail, :atype, :year, :quarter, :hdept, :cid1, :ctitle1, :credit1, :cid2, :ctitle2, :credit2, :cid3, :ctitle3, :credit3, :cid4, :ctitle4, :credit4, :cid5, :ctitle5, :credit5, :cid6, :ctitle6, :credit6, :total, :stusign, :studate)");
		$statement->bindParam(':fname', $firstname);
		$statement->bindParam(':lname', $lastname);
		$statement->bindParam(':email_student', $email_student);
		$statement->bindParam(':major', $major);
		$statement->bindParam(':advisor', $advisor);
		$statement->bindParam(':ademail', $ademail);
		$statement->bindParam(':atype', $atype);
		$statement->bindParam(':year', $year);
		$statement->bindParam(':quarter', $quarter);
		$statement->bindParam(':hdept', $hdept);
		$statement->bindParam(':cid1', $cid1);
		$statement->bindParam(':ctitle1', $ctitle1);
		$statement->bindParam(':credit1', $credit1);
		$statement->bindParam(':cid2', $cid2);
		$statement->bindParam(':ctitle2', $ctitle2);
		$statement->bindParam(':credit2', $credit2);
		$statement->bindParam(':cid3', $cid3);
		$statement->bindParam(':ctitle3', $ctitle3);
		$statement->bindParam(':credit3', $credit3);
		$statement->bindParam(':cid4', $cid4);
		$statement->bindParam(':ctitle4', $ctitle4);
		$statement->bindParam(':credit4', $credit4);
		$statement->bindParam(':cid5', $cid5);
		$statement->bindParam(':ctitle5', $ctitle5);
		$statement->bindParam(':credit5', $credit5);
		$statement->bindParam(':cid6', $cid6);
		$statement->bindParam(':ctitle6', $ctitle6);
		$statement->bindParam(':credit6', $credit6);
		$statement->bindParam(':total', $total);
		$statement->bindParam(':stusign', $stusign);
		$statement->bindParam(':studate', $studate);

		$firstname = $_POST["first_name"];
		$lastname = $_POST["last_name"];
		$email_student = $_POST["email"];
 		$major = $_POST["major"];
		$advisor = $_POST["advisor"];
		$ademail = $_POST["ademail"];
		$atype = $_POST["atype"];
		$year = $_POST["year"];
		$quarter = $_POST["quarter"];
		$hdept = $_POST["hdept"];
		$cid1 = $_POST["cid1"];
		$ctitle1 = $_POST["ctitle1"];
		$credit1 = $_POST["credit1"];
		$cid2 = $_POST["cid2"];
		$ctitle2 = $_POST["ctitle2"];
		$credit2 = $_POST["credit2"];
		$cid3 = $_POST["cid3"];
		$ctitle3 = $_POST["ctitle3"];
		$credit3 = $_POST["credit3"];
		$cid4 = $_POST["cid4"];
		$ctitle4 = $_POST["ctitle4"];
		$credit4 = $_POST["credit4"];
		$cid5 = $_POST["cid5"];
		$ctitle5 = $_POST["ctitle5"];
		$credit5 = $_POST["credit5"];
		$cid6 = $_POST["cid6"];
		$ctitle6 = $_POST["ctitle6"];
		$credit6 = $_POST["credit6"];
		$total = $_POST["total"];
		$stusign= $_POST["stusign"];
		$studate = $_POST["studate"];
		
		// echo "$firstname $lastname <br>";
		$statement->execute();
		// echo "Added $firstname $lastname to table $table in $db. <br>";
		$to = $ademail;
		// $to      = strtolower($firstname[0]).strtolower($lastname)."@scu.edu";
		$subject = "I have submitted a form";
		$message = "Please approve my form at students.engr.scu.edu/~jho2/form-master/get_student_info.php?email=$email_student!\n\nSincerely,\n$firstname $lastname";
		$headers = "From: $firstname";
		mail($to, $subject, $message, $headers);
		// echo "Sent an email to $to <br>";
		echo "Thanks for submitting the form, $firstname!";
	}
	catch(PDOException $e) {
		echo "Failed to connect: ".$e->getMessage()."<br>";
	}
	$pdo = null;
?>
</body>
</html>