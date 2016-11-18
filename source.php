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

		<div class = "row" style="text-align:center">
			<div class ="col-sm-3">
				<h5>First Name</h5>
				<input type="text" required name="first_name" placeholder="First Name"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Last Name</h5>
				<input type="text" required name="last_name" placeholder="Last Name"><br>
			</div>
			<div class ="col-sm-3">
				<h5>SCU ID</h5>
				<input type="text" required name="id" placeholder="SCU ID"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Major</h5>
				<input type="text" required name="major" placeholder="Major"><br>
			</div>
		</div>

		<div class ="row" style="text-align:center">
			<div class ="col-sm-3">
				<h5>Student Email</h5>
				<input type="email" required name="email" placeholder="Student Email"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor</h5>
				<input type="text" required name="advisor" placeholder="Advisor"><br>
			</div>
			<div class ="col-sm-3">
				<h5>Advisor Email</h5>
				<input type="email" required name="ademail" placeholder="Advisor Email"><br>
			</div>
		</div>

		<br>
		<div class = "divider"> </div>

		<h3>Position Data</h3>

		<script type="text/javascript">
            function engrCheck() {
                if(document.getElementById('engineerTotal').checked) {
                    document.getElementById('total').value = parseInt(document.getElementById('total').value) + 150;
                }
                else {
                    document.getElementById('total').value -= "150";
                }
            }
            function yesnoCheck() {
                if (document.getElementById('RA').checked) {
                	document.getElementById('RAYes').style.display = 'block';
                    document.getElementById('TAYes').style.display = 'none';
                    document.getElementById("is_ra").value="true";
                }
                else {
                    document.getElementById('RAYes').style.display = 'none';
                    document.getElementById('TAYes').style.display = 'block';
                    document.getElementById("is_ra").value="false";
                }
            }
            function findTotal(){
                var arr = document.getElementsByName('cc');
                var tot=0;
                for(var i=0;i<arr.length;i++){
                    var target = "credit".concat(i+1);
                    var val = parseInt(arr[i].value)
                    if(val) {
                        tot += (val * 925);
                        document.getElementById(target).value = val;
                    }
                }
                document.getElementById('total').value = tot;
            }
            function addClass() {
                if(document.getElementById('class_2').style.display == "none") {
                    if(document.getElementById('cid1').value != '' && document.getElementById('ctitle1').value != '' && document.getElementById('credit1').value != '') {
                        document.getElementById('class_2').style.display = "block";
                        document.getElementById('class_2').style.textAlign="center";
                        document.getElementById('class_2_break').style.display = "block";
                    }
                    return;
                }
                if(document.getElementById('class_3').style.display == "none") {
                    if(document.getElementById('cid2').value != '' && document.getElementById('ctitle2').value != '' && document.getElementById('credit2').value != '') {
                        document.getElementById('class_3').style.display = "block";
                        document.getElementById('class_3').style.textAlign="center";
                        document.getElementById('class_3_break').style.display = "block";
                    }
                    return;
                }
                if(document.getElementById('class_4').style.display == "none") {
                    if(document.getElementById('cid3').value != '' && document.getElementById('ctitle3').value != '' && document.getElementById('credit3').value != '') {
                        document.getElementById('class_4').style.display = "block";
                        document.getElementById('class_4').style.textAlign="center";
                        document.getElementById('class_4_break').style.display = "block";
                    }
                    return;
                }
                if(document.getElementById('class_5').style.display == "none") {
                    if(document.getElementById('cid4').value != '' && document.getElementById('ctitle4').value != '' && document.getElementById('credit4').value != '') {
                        document.getElementById('class_5').style.display = "block";
                        document.getElementById('class_5').style.textAlign="center";
                        document.getElementById('class_5_break').style.display = "block";
                    }
                    return;
                }
                if(document.getElementById('class_6').style.display == "none") {
                    if(document.getElementById('cid5').value != '' && document.getElementById('ctitle5').value != '' && document.getElementById('credit5').value != '') {
                        document.getElementById('class_6').style.display = "block";
                        document.getElementById('class_6').style.textAlign="center";
                        document.getElementById('class_6_break').style.display = "block";
                    }
                    return;
                }
            }function removeClass() {
                if(document.getElementById('class_6').style.display == "block") {
                    document.getElementById('class_6').style.display = "none";
                    document.getElementById('cid6').value='';
                    document.getElementById('ctitle6').value='';
                    document.getElementById('credit6').value='';
                    document.getElementById('class_6_break').style.display = "none";
                    return;
                }
                if(document.getElementById('class_5').style.display == "block") {
                    document.getElementById('class_5').style.display = "none";
                    document.getElementById('cid5').value='';
                    document.getElementById('ctitle5').value='';
                    document.getElementById('credit5').value='';
                    document.getElementById('class_5_break').style.display = "none";
                    return;
                }
                if(document.getElementById('class_4').style.display == "block") {
                    document.getElementById('class_4').style.display = "none";
                    document.getElementById('cid4').value='';
                    document.getElementById('ctitle4').value='';
                    document.getElementById('credit4').value='';
                    document.getElementById('class_4_break').style.display = "none";
                    return;
                }
                if(document.getElementById('class_3').style.display == "block") {
                    document.getElementById('class_3').style.display = "none";
                    document.getElementById('cid3').value='';
                    document.getElementById('ctitle3').value='';
                    document.getElementById('credit3').value='';
                    document.getElementById('class_3_break').style.display = "none";
                    return;
                }
                if(document.getElementById('class_2').style.display == "block") {
                    document.getElementById('class_2').style.display = "none";
                    document.getElementById('cid2').value='';
                    document.getElementById('ctitle2').value="";
                    document.getElementById('credit2').innerHTML="";
                    document.getElementById('class_2_break').style.display = "none";
                    return;
                }
            }
		</script>

		TA <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="TA" value="TA">
		RA <input type="radio" onclick="javascript:yesnoCheck();" name="atype" id="RA" value="RA"><br>
        <input type="hidden" name="is_ra" value="false" id="is_ra"/>
        <div id="TAYes" style="display:none">
            <div class="row" style="text-align:center">
               <div class ="col-sm-3">
                    <select>
                        <option value="Full Time">Full Time</option>
                        <option value="2/3 Time">2/3 Time</option>
                        <option value="1/3 Time">1/3 Time</option>
                    </select>
                </div>
            </div>
        </div>
		<div id="RAYes" style="display:none">
			<div class = "row" style="text-align:center">
				<div class ="col-sm-3">
					<h5>Account</h5>
					<input type='text' id='RAAcc' name='RAAcc' placeholder="Account">
				</div>
				<div class ="col-sm-3">
					<h5>Fund</h5>
				  	<input type='text' id='RAFund' name='RAFund' placeholder="Fund">
			  	</div>
			  	<div class ="col-sm-3">
					<h5>Dept.</h5>
				  	<input type='text' id='RADept' name='RADept' placeholder="Department">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Prgm. Code</h5>
				  	<input type='text' id='RAcode' name='RAcode' placeholder="Prgm. Code">
			  	</div>
		 	</div>
		 	<div class ="row" style="text-align:center">
			  	<div class ="col-sm-3">
				  	<h5>Activity</h5>
				  	<input type='text' id='RAAct' name='RAAct' placeholder="Activity">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Class</h5>
				  	<input type='text' id='RAClass' name='RAClass' placeholder="Class">
			  	</div>
			  	<div class ="col-sm-3">
				  	<h5>Project ID</h5>
				  	<input type='text' id='RAId' name='RAId' placeholder="Project ID">
			  	</div>
		  	</div>

		  	<br>
			<div class = "divider"> </div>

		</div>

		<div class = "row" style="text-align:center">
			<div class ="col-sm-4">
				<h5>Academic Year</h5>
				<input type="text" required name="year" placeholder="Academic Year"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Quarter</h5>
				<input type="text" required name="quarter" placeholder="Quarter"><br>
			</div>
			<div class ="col-sm-4">
				<h5>Hiring Dept/Pgm</h5>
				<input type="text" required name="hdept" placeholder="Hiring Department"><br>
			</div>
		</div>
        <br>
		<div class = "divider"> </div>

		<h3>Courses</h3>

        <div class = "row" style="text-align:center">
        	<div class = "col-sm-4">
        		<h5>Course ID</h5>
				1. <input type="text" name="cid1" id="cid1" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<h5>Course Title</h5>
				<input type="text" name="ctitle1" id="ctitle1" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<h5>Number of Credits</h5>
				<input type="text" name="cc" oninput="findTotal()" id="cc1" placeholder="Credits">
                <input type="hidden" name="credit1" id="credit1">
			</div>
            <br>
		</div>
        <br>

		 <div class = "row" id="class_2" style="display:none">
        	<div class = "col-sm-4">
				2. <input type="text" name="cid2" id="cid2" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle2" id="ctitle2" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="cc" oninput="findTotal()" id="cc2" placeholder="Credits">
                <input type="hidden" name="credit2" id="credit2">
			</div>
		</div>
        <br id="class_2_break" style="display:none">


		 <div class = "row" id="class_3" style="display:none">
        	<div class = "col-sm-4">
				3. <input type="text" name="cid3" id="cid3" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle3" id="ctitle3" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="cc" oninput="findTotal()" id="cc3" placeholder="Credits">
                <input type="hidden" name="credit3" id="credit3">
			</div>
		</div>
        <br id="class_3_break" style="display:none">


		 <div class = "row" id="class_4" style="display:none">
        	<div class = "col-sm-4">
				4. <input type="text" name="cid4" id="cid4" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle4" id="ctitle4" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="cc" oninput="findTotal()" id="cc4" placeholder="Credits">
                <input type="hidden" name="credit4" id="credit4">
			</div>
		</div>
        <br id="class_4_break" style="display:none">


		 <div class = "row" id="class_5" style="display:none">
        	<div class = "col-sm-4">
				5. <input type="text" name="cid5" id="cid5" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle5" title="ctitle5" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="cc" oninput="findTotal()" id="cc5" placeholder="Credits">
                <input type="hidden" name="credit5" id="credit5">
			</div>
		</div>
        <br id="class_5_break" style="display:none">


		 <div class = "row" id="class_6" style="display:none">
        	<div class = "col-sm-4">
				6. <input type="text" name="cid6" id="cid6" placeholder="ID">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="ctitle6" id="ctitle6" placeholder="Title">
			</div>
			<div class = "col-sm-4">
				<input type="text" name="cc" oninput="findTotal()" id="cc6" placeholder="Credits">
                <input type="hidden" name="credit6" id="credit6">
			</div>
		</div>
        <br id="class_6_break" style="display:none">
        <div style="text-align:center;">
            <button type="button" id="add_class" onClick="addClass()" style="display:inline">+</button>
            <button type="button" id="add_class" onClick="removeClass()" style="display:inline">-</button>
        </div>
        <br>
		<div class = "divider"> </div>
        <br>
        <div style="text-align:center">
            TOTAL: $ <input type="text" name="total" id="total" value="0" style="display:inline"><br><br>
        </div>
		<input type="checkbox" required name="engineerTotal" id="engineerTotal" onClick="engrCheck()" value="true"> &nbsp;
		<label for="engineerTotal"> Engineering Design Center and Student Association Fee ($150 per quarter) </label><br>
		<input type="checkbox" required name="tandc" id="tandc" value="true"> &nbsp;
		<label for="tandc"> All information provided is correct to my knowledge.</label><br><br>

		<b>Student's Signature</b>
		<input type="text" name="stusign" placeholder="Student Signature"> &nbsp;

		<b>Date</b>
		<input type="text" name="studate" placeholder="Date"> &nbsp;

		<input type="submit" value="Submit"><br>

		</form>
	</body>
</html>
