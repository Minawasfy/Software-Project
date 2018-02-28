<html>
<head>
	<title>Fun & Learn</title>
	
</head>
<link rel="stylesheet" type="text/css" href="Logo.css">
<img src="logo.png" id="logo">
<h1 id="hdr">Application</h1>
<body>
    
<header> 
<a href="/index.php" > Back </a>
	
<button type="button"><< previous application</button>
<button type="button">next aplication >></button>
</header>   
    <br>
	<div class = "appform">
	<form name="app">
	Child's name:<br>
	<input type="text" name="cname" required><br>
	Date of birth:<br>
	<input type="date" name="dob" required><br>
	Present age:<br>
	<input type="number" name="page" min="1" max ="5" required><br>
	Desired Date of entry:<br>
	<input type="number" name="dde" min="1" max ="5" required><br>
	<!--desired age > present age-->
	<hr>
	Father's name:<br>
	<input type="text" name="Fname"  required><br>
	Mobile number:<br>
	<input type="text" name="number1" maxlength="11" required><br>
	Facebook Account:<br>
	<input type="text" name="Fb1" required><br>
	Occupation:<br>
	<input type="text" name="occ1" required><br>
	Office phone number:<br>
	<input type="text" name="off1" maxlength="8" required><br>
	<hr>
	Mother's name:<br>
	<input type="text" name="Mname" required><br>
	Mobile number:<br>
	<input type="text" name="number2" maxlength="11"  required><br>
	Facebook Account:<br>
	<input type="text" name="Fb2" ><br>
	Occupation:<br>
	<input type="text" name="occ2" required><br>
	Office phone number:<br>
	<input type="text" name="off2" maxlength="8" required><br>
	<hr>
	Parents Are:<br>
	<label><input type="radio" name="status" value="Married"  > Married</label>
	<label><input type="radio" name="status" value="Separated" > Separated<br></label>
	<!-- Make this a required field/ choice-->
	Home Address:<br>
	<input type="text" name="address" required><br>
	Home Telephone number:<br>
	<input type="text" name="htn" maxlength="8 required"><br>
	Name of the person who will usually pick up the child:<br>
	<input type="text" name="name1" required><br>
	<hr>
	<h1 align="center"> Requested for Attendance</h1>
	Please fill in with a tick below in order of preference:<br>
	<input type="radio" name="status" value="FT" id="ozr" onclick="ptdays();" checked> Full Time attendance : Sun.  - Thurs.(08:00 am - 3:00pm)<br>
	<input type="radio" name="status" value="PT" id="PTD" onclick="ptdays();"> Part Time attendance : Three days a week, please specify the days in the box below <br>
	<div id="ptdyz" >
		<input type="checkbox" name="sun" value="DY" onclick="KeepCount(), ptdays()" id="sun">Sunday<br>
		<input type="checkbox" name="mon" value="DY" onclick="KeepCount(), ptdays()" id="mon">Monday<br>
		<input type="checkbox" name="tue" value="DY" onclick="KeepCount(), ptdays()" id="tue">Tuesday<br>
		<input type="checkbox" name="wed" value="DY" onclick="KeepCount(), ptdays()" id="wed">Wednesday<br>
		<input type="checkbox" name="thu" value="DY" onclick="KeepCount(), ptdays()" id="thu">Thursday<br>
	</div>
	<input type="radio" name="status" value="other" id="ozr2" onclick="ptdays();"> Sun. - Thurs. (09:00 am - 1:00pm)
	<br>
	<strong>Note</strong> For working mothers who can not collect their children at 3:00pm extra fees will be charged<br><br>	
	<hr>
	<h1 align="center"> Emergency contact </h1>
	Emergency Contact's Name:<br>
	<input type="text" name="ern" required><br>
	Emergency Contact's Address:<br>
	<input type="text" name="address1" required><br>
	<!-- Make this a required field/ choice-->
	Relationship:<br>
	<select>
		<option value="auntM">Aunt (mum's side)</option>
	    <option value="uncleM">Uncle (mum's side)</option>
	    <option value="grandpaM">Grandpa (mum's side)</option>
	    <option value="grandmaM">Grandma (mum's side)</option>
	    <option value="auntD">Aunt (dad's side)</option>
	    <option value="uncleD">Uncle (dad's side)</option>
	    <option value="grandpaD">Grandpa (dad's side)</option>
	    <option value="grandmaD">Grandma (dad's side)</option>
	    <option value="cousin">Cousin (has to be 18+ years old)</option>
	</select><br>
	
	Emergency Contact's Number:<br>
	<input type="text" name="contact1"  maxlength="11" required><br>

	Does your child have special needs, require regular medical attention, have any allergies, food dislikes or intolerances, if yes please give more details in the text are below:<br>
	<textarea name="info" rows="4" cols="50"></textarea><br>
	<hr>
	<button type="button">Accept Applicant</button>
	<button type="button">Refuse Applicant</button>	
	<!--send a mail, maybe?-->

	</form>

	</div>

</body>



</html>