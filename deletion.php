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
        $charset = "utf8";

        try {
            $pdo = new PDO("mysql:host=$host", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $sql = "USE $db";
            $pdo->exec($sql);
            $statement = $pdo->prepare("DELETE from $table WHERE email_student = :email_student");
            $statement->bindParam(':email_student', $email_student);
            $email_student = $_POST["student_email"];
            $statement->execute();
        }
        catch(PDOException $e) {
            echo "Error: ".$e."<br>";
        }
        $pdo = null;
        echo "You have deleted the form."
    ?>
</body>
</html>