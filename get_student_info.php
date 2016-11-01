<html>
<head>
<title> Tuition and Fees Payment Authorization for Graduate Students </title>
</head>
<body>
<?php
	$host = "dbserver.engr.scu.edu";
	$db = "sdb_mdemeter";
	$table = "Students";
	$user = "mdemeter";
	$pass = "00001023775";
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
        echo "<h1><u>Tuition and Fees Payment Authorization for Graduate Students</u><h1>";
        echo "<h2>Student Data:</h2>";
		echo "Student Name: ".$result[0]["first_name"]." ".$result[0]["last_name"]."<br>";
        echo "Student's Email: ".$result[0]["email_student"]."<br>";
        echo "Major: ".$result[0]["major"]."<br>";
        echo "Advisor: ".$result[0]["advisor"]."<br>";
        echo "<h2>Position Data:</h2>"."<br>";
        echo "TA/RA: ".$result[0]["atype"]."<br>";
        echo "Academic Year: ".$result[0]["year"]."<br>";
        echo "Quarter: ".$result[0]["quarter"]."<br>";
        echo "Hiring Dept/Pgm: ".$result[0]["hdept"]."<br>";
        echo "<h2>Courses:</h2><br>1. ".$result[0]["cid1"]." ".$result[0]["ctitle1"]." ".$result[0]["credit1"]."<br>";
        echo "2. ".$result[0]["cid2"]." ".$result[0]["ctitle2"]." ".$result[0]["credit2"]."<br>";
        echo "3. ".$result[0]["cid3"]." ".$result[0]["ctitle3"]." ".$result[0]["credit3"]."<br>";
        echo "4. ".$result[0]["cid4"]." ".$result[0]["ctitle4"]." ".$result[0]["credit4"]."<br>";
        echo "5. ".$result[0]["cid5"]." ".$result[0]["ctitle5"]." ".$result[0]["credit5"]."<br>";
        echo "6. ".$result[0]["cid6"]." ".$result[0]["ctitle6"]." ".$result[0]["credit6"]."<br>";
        echo "Total: ".$result[0]["total"]."<br><br>";
        echo "Student's Signature: ".$result[0]["stusign"]." Date: ".$result[0]["studate"]."<br>";
        $advisor_number = 1;
        if($result[0]["adv_sig_1"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_1"]."<br>";
            $advisor_number = 2;
        }
        if($result[0]["adv_sig_2"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_2"]."<br>";
            $advisor_number = 3;
        }
        if($result[0]["adv_sig_3"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_3"]."<br>";
            $advisor_number = 4;
        }
		$pdo = null;
	}
	catch(PDOException $e) {
		echo "Error: ".$e."<br>";
	}
?>
<form action="confirmation.php" method="post">

    <input type="hidden" name="student_email" value="<?=$email_student?>" />
    <input type="hidden" name="advisor_num" value="<?=$advisor_number?>" />
    <?php
        if($advisor_number != 4) {
            echo 'Signature: <input type="text" name="advisor_name" />';
        }
    ?>
    <?php
        if($advisor_number < 3) {
            echo 'Forward to: <input type="email" name="next_email" />';
        }
        if($advisor_number != 4) {
            echo '<input type="submit" class="button" name="approve" value="Approve" />';
            echo '</form>';
            echo '<form action="rejection.php" method="post">';
            echo '<input type="hidden" name="student_first_name" value="'.$result[0]["first_name"].'" />';
            echo '<input type="hidden" name="student_last_name" value="'.$result[0]["last_name"].'" />';
            echo '<input type="hidden" name="student_email" value="<?=$email_student?>" />';
            echo '<input type="submit" class="button" name="reject" value="Reject" />';
            echo '</form>';
        }
        else {
            echo '<button type="button" onClick="print_function()">Print</button>';
            echo '<script>';
                echo 'function print_function() {';
                    echo 'window.print();';
                echo '}';
            echo '</script>';
        }
    ?>
</body>
</html>