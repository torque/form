<html>
<head>
<?php
    $num = $_POST["advisor_num"];
    $email_student = $_POST["student_email"];
    if($num == 3) {
        echo '<meta http-equiv="refresh" content="2; url=get_student_info.php?email='.$email_student.'" />';
    }
?>

<title> Tuition and Fees Payment Authorization for Graduate Students </title>
</head>
<body>
    <?php
        $host = "dbserver.engr.scu.edu";
        $db = "sdb_mdemeter";
        $table = "Students";
        $user = "mdemeter";
        $pass = "00001023775";
        $charset = "utf8";

        try {
            $sig = $_POST["advisor_name"];
            $pdo = new PDO("mysql:host=$host", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $sql = "USE $db";
            $pdo->exec($sql);
            if($num == 1) {
                $statement = $pdo->prepare("UPDATE $table SET adv_sig_1 = :sig WHERE email_student = :email_student");
            }
            else if($num == 2) {
                $statement = $pdo->prepare("UPDATE $table SET adv_sig_2 = :sig WHERE email_student = :email_student");
            }
            else {
                $statement = $pdo->prepare("UPDATE $table SET adv_sig_3 = :sig WHERE email_student = :email_student");
            }
            $statement->bindParam(':sig', $sig);
            $statement->bindParam(':email_student', $email_student);
            $sig = $_POST["advisor_name"];
            $statement->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e."<br>";
        }
        $pdo = null;
        if($num < 3) {
        $to = $_POST["next_email"];
        // $to      = strtolower($firstname[0]).strtolower($lastname)."@scu.edu";
        $subject = "I have approved a form";
        $message = "Please take a look at the form at students.engr.scu.edu/~mdemeter/get_student_info.php?email=$email_student!";
        $headers = "From: me";
        mail($to, $subject, $message, $headers); }
    ?>
    You have approved a form.<br>
</body>
</html>