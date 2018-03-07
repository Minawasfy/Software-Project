<html>
<?php
require 'db.php';
require 'Onlineapplication.php'
	$cname=$dob=$page=$dde=$Fname=$number1=$Fb1=$occ1=$off1=$Mname=$number2=$Fb2="";
  $occ2=$off2=$status=$address=$htn=$name1=$status1=$ern=$address1=$status2=$contact1=$info="";

	$sql= "SELECT * FROM (/*-table name-*/)"; /*btgib el records mn el db*/

  if ($_SERVER["REQUEST_METHOD"] == "REQUEST") {
    $cname=$_REQUEST['cname'];
    $dob=$_REQUEST['dob'];
		$page=$_REQUEST['page'];
		$dde=$_REQUEST['dde'];
    $Fname=$_REQUEST['Fname'];
		$number1=$_REQUEST['number1'];
		$Fb1=$_REQUEST['Fb1'];
		$occ1=$_REQUEST['occ1'];
    $off1=$_REQUEST['off1'];
    $Mname=$_REQUEST['Mname'];
		$number2=$_REQUEST['number2'];
		$Fb2=$_REQUEST['Fb2'];
		$occ2=$_REQUEST['occ2'];
    $off2=$_REQUEST['off2'];
		$status=$_REQUEST['status'];
    $address=$_REQUEST['address'];
		$htn=$_REQUEST['name1'];
		$status1=$_REQUEST['status1'];
		$ern=$_REQUEST['ern'];
		$address1=$_REQUEST['address1'];
		$status2=$_REQUEST['status2'];
		$contact1=$_REQUEST['contact1'];
		$info=$_REQUEST['info'];
  }

  $result= $db->excute($sql);
  $row = $result->fetch_assoc();
  if ($result-> num_rows> 0){
		$cname=$_row['cname'];
    $dob=$_row['dob'];
		$page=$_row['page'];
		$dde=$_row['dde'];
    $Fname=$_row['Fname'];
		$number1=$_row['number1'];
		$Fb1=$_row['Fb1'];
		$occ1=$_row['occ1'];
    $off1=$_row['off1'];
    $Mname=$_row['Mname'];
		$number2=$_row['number2'];
		$Fb2=$_row['Fb2'];
		$occ2=$_row['occ2'];
    $off2=$_row['off2'];
		$status=$_row['status'];
    $address=$_row['address'];
		$htn=$_row['name1'];
		$status1=$_row['status1'];
		$ern=$_row['ern'];
		$address1=$_row['address1'];
		$status2=$_row['status2'];
		$contact1=$_row['contact1'];
		$info=$_row['info'];
		echo '<div class = "Uappform">
			<form name="app" method="REQUEST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Child s name: '.$cname.'
				<br><br>
				Date of birth: '.$dob.'
				<br><br>
				Present age: '.$page.'
				<br><br>
				Desired Date of entry: '.$dde.'
				<br>
				<hr>
				Father s name: '.$Fname.'
				<br>
				Mobile number: '.$number1.'
				<br><br>
				Facebook Account: '.$Fb1.'
				<br><br>
				Occupation: '.$occ1.'
				<br><br>
				Office phone number: '.$off1.'
				<br><br>
				<hr>
				Mother s name: '.$Mname.'
				<br><br>
				Mobile number: '.$number2.'
				<br><br>
				Facebook Account: '.$Fb2.'
				<br><br>
				Occupation: '.$occ2.'
				<br><br>
				Office phone number: '.$off2.'
				<br><br>
				<hr>
				Parents Are: '.$status.'
				<br><br>
				Home Address: '.$address.'
				<br><br>
				Home Telephone number: '.$htn.'
				<br><br>
				Name of the person who will usually pick up the child: '.$status1.'
				<hr>
				<h1 align="center" id="h11"> Emergency contact </h1>
				Emergency Contact s Name: '.$ern.'
				<br><br>
				Emergency Contact s Address: '.$address1.'
				<br><br>
				Relationship: '.$status2.'
				<br><br>
				Emergency Contact s Number: '.$contact1.'
				<br><br>
				Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
				intolerances, if yes please give more details in the text are below:<br> '.$info.' <br>
				<br>
				</form></div>'
}
 ?>
<head>
	<title>Fun & Learn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" href="AdminSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <h1 align="left"> <p><u>Teacher Application:</u></p> </h1>
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('ptdyz').style.display = 'none';
		}
		function ptdays(){
			if (document.getElementById('PTD').checked) {
        		document.getElementById('ptdyz').style.display = 'block';
			}
			else if (document.getElementById('ozr').checked || document.getElementById('ozr2').checked){
				document.getElementById('ptdyz').style.display = 'none';
				document.getElementById('sun').checked= false;
				document.getElementById('mon').checked= false;
				document.getElementById('tue').checked= false;
				document.getElementById('wed').checked= false;
				document.getElementById('thu').checked= false;
			}
		};
		function KeepCount() {
			var count = 0;
			if (document.app.sun.checked)
			{count = count + 1;}
			if (document.app.mon.checked)
			{count = count + 1;}
			if (document.app.tue.checked)
			{count = count + 1;}
			if (document.app.wed.checked)
			{count = count + 1;}
			if (document.app.thu.checked)
			{count = count + 1;}
			if (count > 3)
			{
				alert('Please only pick 3 days or one of the other options.');
				document.getElementById('ozr').checked= true;
			}
		};
	</script>
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
			<p id="h1A">Add</p><p id="h1U">User</p>
      <button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
			<button type="button" id="pabtn" onclick="location.href='';">Previous Applicaton</button>
		  <button type="button" id="nabtn" onclick="location.href='';">Next Applicaton</button>
    </header>
</header>
    <br>
	<div class = "Uappform">
		<form name="app" method="REQUEST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Child's name:
			<input type="text" name="cname" id="boxes" required><br><br>
			Date of birth:
			<input type="date" name="dob"  id="boxes" required><br><br>
			Present age:
			<input type="number" name="page" min="1" max ="5" id="boxes" required><br><br>
			Desired Date of entry:
			<input type="date" name="dde" min="1" max ="5" id="boxes" required><br>
			<!--desired age > present age-->
			<hr>
			Father's name:
			<input type="text" name="Fname"  id="boxes" required><br><br>
			Mobile number:
			<input type="text" name="number1" maxlength="11" id="boxes" required><br><br>
			Facebook Account:
			<input type="text" name="Fb1" id="boxes" required><br><br>
			Occupation:
			<input type="text" name="occ1" id="boxes" required><br><br>
			Office phone number:
			<input type="text" name="off1" id="boxes" maxlength="8" required><br><br>
			<hr>
			Mother's name:
			<input type="text" name="Mname" id="boxes" required><br><br>
			Mobile number:
			<input type="text" name="number2" id="boxes" maxlength="11"  required><br><br>
			Facebook Account:
			<input type="text" name="Fb2" id="boxes" ><br><br>
			Occupation:
			<input type="text" name="occ2" id="boxes" required><br><br>
			Office phone number:
			<input type="text" name="off2" id="boxes" maxlength="8" required><br><br>
			<hr>
			Parents Are:<br>
			<label><input type="radio" name="status" value="Married"  > Married</label><br>
			<label><input type="radio" name="status" value="Separated" > Separated</label><br><br>
			<!-- Make this a required field/ choice-->
			Home Address:
			<input type="text" name="address" id="boxes" required><br><br>
			Home Telephone number:
			<input type="text" name="htn" maxlength="8" id="boxes" required><br><br>
			Name of the person who will usually pick up the child:
			<input type="text" name="name1" id="boxes" required><br><br>
			<hr>
			<h1 align="center" id="h11"> Requested for Attendance</h1>
			Please fill in with a tick below in order of preference:<br>
			<input type="radio" name="status1" value="FT" id="ozr" onclick="ptdays();" checked> Full Time attendance : Sun.  - Thurs.(08:00 am - 3:00pm)<br>
			<input type="radio" name="status1" value="PT" id="PTD" onclick="ptdays();"> Part Time attendance : Three days a week, please specify the days in the box below <br>
			<div id="ptdyz" >
				<input type="checkbox" name="sun" value="DY" onclick="KeepCount(), ptdays()" id="sun">Sunday<br>
				<input type="checkbox" name="mon" value="DY" onclick="KeepCount(), ptdays()" id="mon">Monday<br>
				<input type="checkbox" name="tue" value="DY" onclick="KeepCount(), ptdays()" id="tue">Tuesday<br>
				<input type="checkbox" name="wed" value="DY" onclick="KeepCount(), ptdays()" id="wed">Wednesday<br>
				<input type="checkbox" name="thu" value="DY" onclick="KeepCount(), ptdays()" id="thu">Thursday<br>
			</div>
			<input type="radio" name="status1" value="other" id="ozr2" onclick="ptdays();"> Sun. - Thurs. (09:00 am - 1:00pm)
			<br>
			<strong>Note</strong> For working mothers who can not collect their children at 3:00pm extra fees will be charged<br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name:
			<input type="text" name="ern" id="boxes" required><br><br>
			Emergency Contact's Address:
			<input type="text" name="address1" id="boxes" required><br><br>
			<!-- Make this a required field/ choice-->
			Relationship:
			<select id="boxes" name="status2">
				<option value="auntM">Aunt (mum's side)</option>
			    <option value="uncleM">Uncle (mum's side)</option>
			    <option value="grandpaM">Grandpa (mum's side)</option>
			    <option value="grandmaM">Grandma (mum's side)</option>
			    <option value="auntD">Aunt (dad's side)</option>
			    <option value="uncleD">Uncle (dad's side)</option>
			    <option value="grandpaD">Grandpa (dad's side)</option>
			    <option value="grandmaD">Grandma (dad's side)</option>
			    <option value="cousin">Cousin (has to be 18+ years old)</option>
			</select><br><br>

			Emergency Contact's Number:
			<input type="text" name="contact1" id="boxes"  maxlength="11" required><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:<br><br>
			<textarea name="info" rows="4" cols="50" id="boxes"></textarea><br>
			<button type="button" id="ACbtn" name="ACbtn">Accept Applicant</button>
			<button type="button" id="RFbtn" name="RFbtn">Refuse Applicant</button>
			<?php
				$ACbtn=$RFbtn=$appStatus"";
				$sql="";
				$appStatus=$_REQUEST['App Status']
				$ACbtn= 'ACbtn';
				$RFbtn= 'RFbtn';
				if (isset($ACbtn)) {
					$appStatus=0;
				}
				elseif (isset($RFbtn)) {
					$appStatus=1;
				}
				else {
					$appStatus=2;
				}
			 ?>
			<!--send a mail, maybe?-->
		</form>
	</div>

</body>



</html>
