<!DOCTYPE HTML>
<html>
	<head>
		<title> Tuition and Fees Payment Authorization for Graduate Students </title>
	</head>
	<body>

		<form action="process_form.php" method="post">
		<h1><u>Tuition and Fees Payment Authorization for Graduate Students</u></h1>
		<h2>Student Data:</h2>
		First Name: <input type="text" required name="first_name"><br>
		Last Name: <input type="text" required name="last_name"><br>
		SCU ID: <input type="text" required name="id"><br>
		Student Email: <input type="email" required name="email"><br>
		Major: <input type="text" required name="major"><br>
		Advisor: <input type="text" required name="advisor"><br>
		Advisor Email: <input type="email" required name="ademail"><br>
		<h2>Position Data:</h2>
		<script type="text/javascript">
		  function yesnoCheck() {
		    if (document.getElementById('RA').checked) {
			document.getElementById('RAYes').style.display = 'block';
		    }
		    else document.getElementById('RAYes').style.display = 'none';
		  }
		</script>
		TA: <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="TA" value="TA"> RA: <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="RA" value="RA"><br>
		<div id="RAYes" style="display:none">
		  Account:<input type='text' id='RAAcc' name='RAAcc'>
		  Fund:<input type='text' id='RAFund' name='RAFund'>
		  Dept:<input type='text' id='RADept' name='RADept'>
		  Pgm Code:<input type='text' id='RAcode' name='RAcode'>
		  Activity:<input type='text' id='RAAct' name='RAAct'>
		  Class:<input type='text' id='RAClass' name='RAClass'>
		  Project ID:<input type='text' id='RAId' name='RAId'>
		</div>
		Academic Year: <input type="text" required name="year"><br>
		Quarter: <input type="text" required name="quarter"><br>
		Hiring Dept/Pgm: <input type="text" required name="hdept"><br>
		<h2>Courses:</h2>
        <u>Course ID</u><u>Course Title</u><u>Number of Credits</u><br>
		1. <input type="text" name="cid1"> <input type="text" name="ctitle1"> <input type="text" name="credit1"><br>
		2. <input type="text" name="cid2"> <input type="text" name="ctitle2"> <input type="text" name="credit2"><br>
		3. <input type="text" name="cid3"> <input type="text" name="ctitle3"> <input type="text" name="credit3"><br>
		4. <input type="text" name="cid4"> <input type="text" name="ctitle4"> <input type="text" name="credit4"><br>
		5. <input type="text" name="cid5"> <input type="text" name="ctitle5"> <input type="text" name="credit5"><br>
		6. <input type="text" name="cid6"> <input type="text" name="ctitle6"> <input type="text" name="credit6"><br>
		TOTAL: $<input type="text" name="total"><br><br>
		<input type="checkbox" required name="tandc" id="tandc" value="true"><label for="tandc"> All information provided is correct to my knowledge.</label><br> 
		Student's Signature: <input type="text" name="stusign"> Date: <input type="text" name="studate"> <input type="submit" value="Submit"><br>
		</form>
	</body>
</html>
