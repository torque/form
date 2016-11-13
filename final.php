<html>
<head>
<title> Tuition and Fees Payment Authorization for Graduate Students </title>
</head>
<body>
<?php
    $host = "dbserver.engr.scu.edu";
    $db = "sdb_mdemeter";
    $table = "Students";
    $secrets = fopen("../form/secrets.txt", "r");
    $user = fgets($secrets);
    $user = trim($user, "\n");
    $pass = fgets($secrets);
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
        if($result[0]["atype"] == "RA") {
            echo "Account: ".$result[0]["ra_acc"]."<br>";
            echo "Fund: ".$result[0]["ra_fund"]."<br>";
            echo "Department: ".$result[0]["ra_dept"]."<br>";
            echo "Pgm Code: ".$result[0]["ra_pgm"]."<br>";
            echo "Activity: ".$result[0]["ra_act"]."<br>";
            echo "Class: ".$result[0]["ra_class"]."<br>";
            echo "Project ID: ".$result[0]["ra_id"]."<br>";
        }
        echo "<h2>Courses:</h2>"."<br>";
        echo "1. ".$result[0]["cid1"]." ".$result[0]["ctitle1"]." ".$result[0]["credit1"]."<br>";
        if($result[0]["cid2"] != '') {
            echo "2. ".$result[0]["cid2"]." ".$result[0]["ctitle2"]." ".$result[0]["credit2"]."<br>";
        }
        if($result[0]["cid3"] != '') {
            echo "3. ".$result[0]["cid3"]." ".$result[0]["ctitle3"]." ".$result[0]["credit3"]."<br>";
        }
        if($result[0]["cid4"] != '') {
            echo "4. ".$result[0]["cid4"]." ".$result[0]["ctitle4"]." ".$result[0]["credit4"]."<br>";
        }
        if($result[0]["cid5"] != '') {
            echo "5. ".$result[0]["cid5"]." ".$result[0]["ctitle5"]." ".$result[0]["credit5"]."<br>";
        }
        if($result[0]["cid6"] != '') {
            echo "6. ".$result[0]["cid6"]." ".$result[0]["ctitle6"]." ".$result[0]["credit6"]."<br>";
        }
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
        if($result[0]["adv_sig_4"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_4"]."<br>";
            $advisor_number = 5;
        }
        if($result[0]["adv_sig_5"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_5"]."<br>";
            $advisor_number = 6;
        }
        if($result[0]["adv_sig_6"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_6"]."<br>";
            $advisor_number = 7;
        }
        if($result[0]["adv_sig_7"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_7"]."<br>";
            $advisor_number = 8;
        }
        if($result[0]["adv_sig_8"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_8"]."<br>";
            $advisor_number = 9;
        }
        if($result[0]["adv_sig_9"] != '') {
            echo "Approved by: ".$result[0]["adv_sig_9"]."<br>";
            $advisor_number = 10;
        }

        $pdo = null;
    }
    catch(PDOException $e) {
        echo "Error: ".$e."<br>";
    }
    echo '<button type="button" onClick="print_function()">Print</button>';
    echo '<script>';
        echo 'function print_function() {';
            echo 'window.print();';
        echo '}';
    echo '</script>';
    echo '<form action="deletion.php" method="post">';
    echo '<input type="hidden" name="student_email" value="'.$email_student.'" />';
    echo '<input type="hidden" name="student_first_name" value="'.$result[0]["first_name"].'" />';
    echo '<input type="hidden" name="student_last_name" value="'.$result[0]["last_name"].'" />';
    echo '<input type="submit" class="button" name="delete" value="Delete" />';
    echo '</form>';
?>
</body>
</html>