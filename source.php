<!DOCTYPE HTML>
<html>
	<head>
		<title> Tuition and Fees Payment Authorization for Graduate Students </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>

		<div class = "header-bar">

			<img src="scu.jpg" alt="Santa Clara Uniersity">

		</div>

		<form action="process_form.php" method="post">

		<center><h2><u>Tuition and Fees Payment Authorization for Graduate Students</u></h2></center>

		<h3>Student Data</h3>

		<div class = "row">
			<div class ="col-sm-3">
				<h5>First Name</h5>
				<input type="text" required name="first_name"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Last Name</h5>
				<input type="text" required name="last_name"><br>
			</div>
			<div class ="col-sm-3">
				<h5>SCU ID</h5>
				<input type="text" required name="id"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Major</h5>
				<input type="text" required name="major"><br>
			</div>
		</div>

		<div class ="row">
			<div class ="col-sm-3">
				<h5>Student Email</h5>
				<input type="email" required name="email"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor</h5>
				<input type="text" required name="advisor"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor Email</h5>
				<input type="email" required name="ademail"><br>
			</div>
		</div>

		<br>
		<div class = "divider"> </div>

		<h3>Position Data</h3>

		<script type="text/javascript">
		  function yesnoCheck() {
		    if (document.getElementById('RA').checked) {
    			document.getElementById('RAYes').style.display = 'block';
                document.getElementById("is_ra").value="true";
		    }
		    else {
                document.getElementById('RAYes').style.display = 'none';
                document.getElementById("is_ra").value="false";
            }
		  }
		</script>

		TA <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="TA" value="TA">
		RA <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="RA" value="RA"><br>
        <input type="hidden" name="is_ra" value="false" id="is_ra"/>
		<div id="RAYes" style="display:none">
			<div class = "row">
				<div class ="col-sm-3">
					<h5>Account</h5>
					<input type='text' id='RAAcc' name='RAAcc'>
				</div>
				<div class ="col-sm-3">
					<h5>Fund</h5>
				  	<input type='text' id='RAFund' name='RAFund'>
			  	</div>
			  	<div class ="col-sm-3">
					<h5>Dept.</h5>
				  	<input type='text' id='RADept' name='RADept'>
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Prgm. Code</h5>
				  	<input type='text' id='RAcode' name='RAcode'>
			  	</div>
		 	</div>
		 	<div class ="row">
			  	<div class ="col-sm-3">
				  	<h5>Activity</h5>
				  	<input type='text' id='RAAct' name='RAAct'>
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Class</h5>
				  	<input type='text' id='RAClass' name='RAClass'>
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Project ID</h5>
				  	<input type='text' id='RAId' name='RAId'>
			  	</div>
		  	</div>

		  	<br>
			<div class = "divider"> </div>

		</div>

		<div class = "row">
			<div class ="col-sm-4">
				<h5>Academic Year</h5>
				<input type="text" required name="year"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Quarter</h5>
				<input type="text" required name="quarter"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Hiring Dept/Pgm</h5>
				<input type="text" required name="hdept"><br>
			</div>
		</div>

		<br>
		<div class = "divider"> </div>

		<h3>Courses</h3>

        <div class = "row">
        	<div class = "col-sm-4">
        		<h5>Course ID</h5><br>
				1. <input type="text" name="cid1">
			</div>
			<div class = "col-sm-4">
				<h5>Course Title</h5><br>
				<input type="text" name="ctitle1">
			</div>
			<div class = "col-sm-4">
				<h5>Number of Credits</h5><br>
				<input type="text" name="credit1">
			</div>
		</div>

		 <br>

		 <div class = "row">
        	<div class = "col-sm-4">
				2. <input type="text" name="cid2">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle2">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit2">
			</div>
		</div>

		<br>

		 <div class = "row">
        	<div class = "col-sm-4">
				3. <input type="text" name="cid3">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle3">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit3">
			</div>
		</div>

		<br>

		 <div class = "row">
        	<div class = "col-sm-4">
				4. <input type="text" name="cid4">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle4">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit4">
			</div>
		</div>

		<br>

		 <div class = "row">
        	<div class = "col-sm-4">
				5. <input type="text" name="cid5">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle5">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit5">
			</div>
		</div>

		<br>

		 <div class = "row">
        	<div class = "col-sm-4">
				6. <input type="text" name="cid6">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle6">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit6">
			</div>
		</div>

		<br><br>

		TOTAL: $<input type="text" name="total"><br><br>

		<input type="checkbox" required name="tandc" id="tandc" value="true"> &nbsp;

		<label for="tandc"> All information provided is correct to my knowledge.</label><br><br>

		<b>Student's Signature</b>
		<input type="text" name="stusign"> &nbsp;

		<b>Date</b>
		<input type="text" name="studate"> &nbsp;

		<input type="submit" value="Submit"><br>

		</form>
	</body>
</html>
