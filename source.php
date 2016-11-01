<!DOCTYPE HTML>
<html>
	<head>
		<title> Tuition and Fees Payment Authorization for Graduate Students </title>
	</head>
	<body>

		<form action="process_form.php" method="post">
		<h1><u>Tuition and Fees Payment Authorization for Graduate Students</u></h1>
		<h2>Student Data:</h2>
		First Name: <input type="text" name="first_name"><br>
		Last Name: <input type="text" name="last_name"><br>
		SCU ID: <input type="text" name="id"><br>
		Student Email: <input type="email" name="email"><br>
		Major: <input type="text" name="major"><br>
		Advisor: <input type="text" name="advisor"><br>
		Advisor Email: <input type="email" name="ademail"><br>
		<h2>Position Data:</h2>
		TA/RA: <input type="text" name="atype"><br>
		Academic Year: <input type="text" name="year"><br>
		Quarter: <input type="text" name="quarter"><br>
		Hiring Dept/Pgm: <input type="text" name="hdept"><br>
		<h2>Courses:</h2>
		1. <input type="text" name="cid1"> <input type="text" name="ctitle1"> <input type="text" name="credit1"><br>
		2. <input type="text" name="cid2"> <input type="text" name="ctitle2"> <input type="text" name="credit2"><br>
		3. <input type="text" name="cid3"> <input type="text" name="ctitle3"> <input type="text" name="credit3"><br>
		4. <input type="text" name="cid4"> <input type="text" name="ctitle4"> <input type="text" name="credit4"><br>
		5. <input type="text" name="cid5"> <input type="text" name="ctitle5"> <input type="text" name="credit5"><br>
		6. <input type="text" name="cid6"> <input type="text" name="ctitle6"> <input type="text" name="credit6"><br>
		TOTAL: $<input type="text" name="total"><br><br>
		Student's Signature: <input type="text" name="stusign"> Date: <input type="text" name="studate"> <input type="submit" value="Submit"><br>
		</form>
	</body>
</html>