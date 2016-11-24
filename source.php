<!DOCTYPE HTML>
<html>
	<head>
		<title> Tuition and Fees Payment Authorization for Graduate Students </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		<script defer type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script defer type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<script defer type="text/javascript" src="main.js"></script>
	</head>

	<body>
        <div style="width:100%;background-color:#F8F8F8">
    		<img src="scu.jpg" alt="Santa Clara Uniersity" style="display:block;margin:auto;width:20%;height:20%;">
        </div>
		<form action="process_form.php" method="post">

		<center><h2><u>Tuition and Fees Payment Authorization for Graduate Students</u></h2></center>

		<h3>Student Data</h3>

		<div class = "row">
			<div class ="col-sm-3">
				<h5>First Name</h5>
				<input type="text" required name="first_name" placeholder="First Name" id="first_name" oninput="setName(this.id)"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Last Name</h5>
				<input type="text" required name="last_name" placeholder="Last Name" id="last_name" oninput="setName(this.id)"><br>
			</div>
			<div class ="col-sm-3">
				<h5>SCU ID</h5>
				<input type="text" required name="id" id="id" oninput="checkId(this.id,11)" placeholder="SCU ID"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Major</h5>
				<input type="text" required name="major" placeholder="Major" id="major" oninput="checkLetters(this.id,true)"><br>
			</div>
		</div>

		<div class ="row">
			<div class ="col-sm-3">
				<h5>Student Email</h5>
				<input type="email" required name="email" placeholder="Student Email"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor</h5>
				<input type="text" required name="advisor" placeholder="Advisor" id="advisor" oninput="checkLetters(this.id,true)"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor Email</h5>
				<input type="email" required name="ademail" placeholder="Advisor Email"><br>
			</div>
		</div>

		<br>
		<div class = "divider"> </div>

		<h3>Position Data</h3>
		<label for="TA" style="font-weight: normal">TA</label>
        <input type="radio" required onclick="yesnoCheck()" name="atype" id="TA" value="TA" style="display:inline">
		<label for="RA" style="font-weight: normal">RA</label>
        <input type="radio" onclick="yesnoCheck()" name="atype" id="RA" value="RA" style="display:inline">
        <input type="hidden" name="is_ra" value="false" id="is_ra"/>
        <div id="TAYes" style="display:none">
            <div class="row">
               <div class ="col-sm-3">
                    <select id="ta_option" class="ta_option">
                        <option value="Full Time">Full Time</option>
                        <option value="2/3 Time">2/3 Time</option>
                        <option value="1/3 Time">1/3 Time</option>
                    </select>
                </div>
            </div>
            <br style="margin-top: 0px">
            <div class = "divider"> </div>
        </div>

		<div id="RAYes" style="display:none">
			<div class = "row">
				<div class ="col-sm-3">
					<h5>Account</h5>
					<input type='text' id="RAAcc" oninput="checkLetters(this.id,true)" name='RAAcc' placeholder="Account">
				</div>
				<div class ="col-sm-3">
					<h5>Fund</h5>
				  	<input type='text' id="RAFund" oninput="checkLetters(this.id,true)" name='RAFund' placeholder="Fund">
			  	</div>
			  	<div class ="col-sm-3">
					<h5>Dept.</h5>
				  	<input type='text' id="RADept" oninput="checkLetters(this.id,true)" name='RADept' placeholder="Department">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Prgm. Code</h5>
				  	<input type='text' id="RAcode" oninput="checkAlphaNumeric(this.id,true)" name='RAcode' placeholder="Prgm. Code">
			  	</div>
		 	</div>
		 	<div class ="row">
			  	<div class ="col-sm-3">
				  	<h5>Activity</h5>
				  	<input type='text' id="RAAct" oninput="checkLetters(this.id,true)" name='RAAct' placeholder="Activity">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Class</h5>
				  	<input type='text' id="RAClass" oninput="checkAlphaNumeric(this.id)" name='RAClass' placeholder="Class">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Project ID</h5>
				  	<input type='text' id="RAId" oninput="checkId(this.id)" name='RAId' placeholder="Project ID">
			  	</div>
		  	</div>

		  	<br>
			<div class = "divider"> </div>

		</div>

		<div class = "row">
			<div class ="col-sm-4">
				<h5>Academic Year</h5>
				<input type="text" required name="year" id="year" oninput="checkId(this.id,4)" placeholder="Academic Year"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Quarter</h5>
				<input type="text" required name="quarter" id="quarter" oninput="checkLetters(this.id)" placeholder="Quarter"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Hiring Dept/Pgm</h5>
				<input type="text" required name="hdept" id="hdept" oninput="checkLetters(this.id,true)" placeholder="Hiring Department"><br>
			</div>
		</div>
        <br>
		<div class = "divider"> </div>

		<h3>Courses</h3>
        <input type="hidden" name="course_val" value=1 id="course_val">
        <input type="hidden" name="cred_total" value=0 id="cred_total">
        <input type="hidden" name="cred_max" value=0 id="cred_max">
        <input type="hidden" name="cval1" id="cval1" value=0>
        <input type="hidden" name="cval2" id="cval2" value=0>
        <input type="hidden" name="cval3" id="cval3" value=0>
        <input type="hidden" name="cval4" id="cval4" value=0>
        <input type="hidden" name="cval5" id="cval5" value=0>
        <input type="hidden" name="cval6" id="cval6" value=0>
        <input type="hidden" name="cval7" id="cval7" value=0>
        <input type="hidden" name="cval8" id="cval8" value=0>

        <div class = "row">
        	<div class = "col-sm-4">
        		<h5>Course ID</h5>
				1. <input type="text" required name="cid1" id="cid1" oninput="checkId(this.id,5)" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<h5>Course Title</h5>
				<input type="text"  required name="ctitle1" id="ctitle1" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<h5>Number of Credits</h5>
				<input type="text" required name="credit1" oninput="findTotal()" id="credit1" placeholder="Credits" class="cc">
			</div>
            <br>
		</div>
        <br>

		<div class = "row" id="class_2" style="display:none">
        	<div class = "col-sm-4">
				2. <input type="text" name="cid2" id="cid2" oninput="checkId(this.id,5)" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle2" id="ctitle2" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit2" oninput="findTotal()" id="credit2" placeholder="Credits" class="cc">
			</div>
		</div>
        <br id="class_2_break" style="display:none">


		<div class = "row" id="class_3" style="display:none">
        	<div class = "col-sm-4">
				3. <input type="text" name="cid3" id="cid3" oninput="checkId(this.id,5)" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle3" id="ctitle3" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit3" oninput="findTotal()" id="credit3" placeholder="Credits" class="cc">
			</div>
		</div>
        <br id="class_3_break" style="display:none">


		<div class = "row" id="class_4" style="display:none">
        	<div class = "col-sm-4">
				4. <input type="text" name="cid4" id="cid4" oninput="checkId(this.id,5)" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle4" id="ctitle4" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit4" oninput="findTotal()" id="credit4" placeholder="Credits" class="cc">
			</div>
		</div>
        <br id="class_4_break" style="display:none">


		<div class = "row" id="class_5" style="display:none">
        	<div class = "col-sm-4">
				5. <input type="text" name="cid5" id="cid5" oninput="checkId(this.id,5)" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle5" id="ctitle5" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="credit5" oninput="findTotal()" id="credit5" placeholder="Credits" class="cc">
			</div>
		</div>
        <br id="class_5_break" style="display:none">

        <div class = "row" id="class_6" style="display:none">
        	<div class = "col-sm-4">
        		6. <input type="text" name="cid6" id="cid6" oninput="checkId(this.id,5)" placeholder="ID">
        	</div>
        	<div class = "col-sm-4">
        		<input type="text" name="ctitle6" id="ctitle6" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
        	</div>
        	<div class = "col-sm-4">
        		<input type="text" name="credit6" oninput="findTotal()" id="credit6" placeholder="Credits" class="cc">
        	</div>
        </div>
        <br id="class_6_break" style="display:none">


        <div class = "row" id="class_7" style="display:none">
            <div class = "col-sm-4">
                7. <input type="text" name="cid7" id="cid7" oninput="checkId(this.id,5)" placeholder="ID">
            </div>
            <div class = "col-sm-4">
                <input type="text" name="ctitle7" id="ctitle7" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
            </div>
            <div class = "col-sm-4">
                <input type="text" name="credit7" oninput="findTotal()" id="credit7" placeholder="Credits" class="cc">
            </div>
        </div>
        <br id="class_7_break" style="display:none">

        <div class = "row" id="class_8" style="display:none">
            <div class = "col-sm-4">
                8. <input type="text" name="cid8" id="cid8" oninput="checkId(this.id,5)" placeholder="ID">
            </div>
            <div class = "col-sm-4">
                <input type="text" name="ctitle8" id="ctitle8" oninput="checkAlphaNumeric(this.id,true)" placeholder="Title">
            </div>
            <div class = "col-sm-4">
                <input type="text" name="credit8" oninput="findTotal()" id="credit8" placeholder="Credits" class="cc">
            </div>
        </div>
        <br id="class_8_break" style="display:none">


        <div style="text-align:center">
            <button type="button" id="add_class" onClick="addClass()" style="display:inline">+</button>
            <button type="button" id="remove_class" onClick="removeClass()" style="display:inline">-</button>
        </div>

        <br>
		<div class = "divider"> </div>
        <br>
        <div style="text-align:center">
            <label for="total" style="font-weight: normal">Total: $</label>
            <input type="text" name="total" id="total" style="display:inline" placeholder="0"><br><br>
        </div>
		<input type="checkbox" name="engineerTotal" id="engineerTotal" onClick="engrCheck()"> &nbsp;
		<label for="engineerTotal"> Engineering Design Center and Student Association Fee ($150 per quarter) </label><br>
		<input type="checkbox" required name="tandc" id="tandc" value="true"> &nbsp;
		<label for="tandc"> All information provided is correct to my knowledge.</label><br><br>

		<label for="stusign" style="font-weight: normal">Student's Signature</label>
		<input type="text" required name="stusign" id="stusign" oninput="checkLetters(this.id,true)" placeholder="Student Signature"> &nbsp;

		<label for="studate" style="font-weight: normal">Date</label>
		<input type="text" required name="studate" id="studate" oninput="checkDate(this.id)" placeholder="Date"> &nbsp;
        <script>setTheDate()</script>
		<input type="submit" value="Submit"><br>

		</form>
	</body>
</html>
