<html>
<head>
	<title>Fun & Learn</title>
	<h1>Online Application</h1>
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('ptdyz').style.display = 'none';
		};
		function ptdays(){
			if (document.getElementById('PTD').checked) {
        		document.getElementById('ptdyz').style.display = 'block';
			}
			else if (document.getElementById('ozr').checked || document.getElementById('ozr2').checked){
				document.getElementById('ptdyz').style.display = 'none';
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
				alert('Pick Just Three Please');
				document.getElementById('ptdyz').style.display= 'none';
			}	
		}
		function relocate(){
			if (document.getElementById('editp').clicked) {
				window.location= 'http://localhost/stuff/Lab01/Edit.php';
			}
			else if (document.getElementById('deletep').clicked){
				window.location= 'http://localhost/stuff/Lab01/Delete.php';
			}
		}
	</script>
</head>

<body>
    
<header> 
<a href="/index.php" > Back </a>    
</header>   
    
	<div class = "appform">
	<h1 align="center"> Application Form </h1>
	<form name="app">

	Child's name:<br>
	<input type="text" name="cname"><br>
	Date of birth:<br>
	<input type="date" name="dob"><br>
	Present age:<br>
	<input type="number" name="page" min="1" max ="5"><br>
	Desired Date of entry:<br>
	<input type="number" name="dde" min="1" max ="5"><br>
	<hr>
	Father's name:<br>
	<input type="text" name="Fname"><br>
	Mobile number:<br>
	<input type="text" name="number1" maxlength="11"><br>
	Facebook Account:<br>
	<input type="text" name="Fb1"><br>
	Occupation:<br>
	<input type="text" name="occ1"><br>
	Office phone number:<br>
	<input type="text" name="off1" maxlength="8"><br>
	<hr>
	Mother's name:<br>
	<input type="text" name="Mname"><br>
	Mobile number:<br>
	<input type="text" name="number2" maxlength="11"><br>
	Facebook Account:<br>
	<input type="text" name="Fb2"><br>
	Occupation:<br>
	<input type="text" name="occ2"><br>
	Office phone number:<br>
	<input type="text" name="off2" maxlength="8"><br>
	<hr>
	Parents Are:<br>
	<input type="radio" name="status" value="Married" checked> Married
	<input type="radio" name="status" value="Separated"> Separated<br>
	Home Address:<br>
	<input type="text" name="address"><br>
	Home Telephone number:<br>
	<input type="text" name="htn" maxlength="8"><br>
	Name of the person who will usually pick up the child:<br>
	<input type="text" name="name1"><br>

	<p><u>Under any circumstance we will not receive the child to any other person unless the parents will inform us previously with the identity of this person</u>.</p>
	<p><u>*Nursery is serving 2 nutritious meals included in the monthly fees</u>.</p>
	<hr>

	<h1 align="center"> Requested for Attendance</h1>
	Please fill in with a tick below in order of preference:<br>
	<input type="radio" name="status" value="FT" id="ozr" onclick="ptdays();" checked> Full Time attendance : Sun.  - Thurs.(08:00 am - 3:00pm)<br>
	<input type="radio" name="status" value="PT" id="PTD" onclick="ptdays();"> Part Time attendance : Three days a week, please specify the days in the box below <br>
	<div id="ptdyz" >
		<input type="checkbox" name="sun" value="DY" onclick="KeepCount()">Sunday<br>
		<input type="checkbox" name="mon" value="DY" onclick="KeepCount()">Monday<br>
		<input type="checkbox" name="tue" value="DY" onclick="KeepCount()">Tuesday<br>
		<input type="checkbox" name="wed" value="DY" onclick="KeepCount()">Wednesday<br>
		<input type="checkbox" name="thu" value="DY" onclick="KeepCount()">Thursday<br>
	</div>
	<!--- FIX THIS PART URGENTLY -->
	<input type="radio" name="status" value="other" id="ozr2" onclick="ptdays();"> Sun. - Thurs. (09:00 am - 1:00pm)
	<br>
	<strong>Note</strong> For working mothers who can not collect their children at 3:00pm extra fees will be charged<br><br>	
	<hr>
	<h1 align="center"> Emergency contact 1 </h1>
	Emergency Contact's Name:<br>
	<input type="text" name="ern"><br>
	Emergency Contact's Address:<br>
	<input type="text" name="address1"><br>
	Relationship:<br>
	<input type="text" name="relation"><br>
	<!--- FIX THIS PART URGENTLY -->
	Emergency Contact's Number:<br>
	<input type="text" name="contact1"  maxlength="11"><br>

	Does your child have special needs, require regular medical attention, have any allergies, food dislikes or intolerances, if yes please give more details in the text are below:<br>
	<textarea name="info" rows="4" cols="50"></textarea><br>
	<hr>
	<p><u><h2 align="left">Rules and Regulations</h2></u>.</p>
	<ol>
	<li>Nursery working hours is from 08:00am till 03:00pm,1 waiting hour is applied for parents (Till 04:00pm) as pick up time, any delay after 04:00pm will be charged.</li>
	<li>In case of child absence, please notify our nursery management one week before the vacation, if parent would not notify the nursery and this absence will exceed a month, registration fee will be charged again.</li>
	<li>Absence due to illness is not deducted from monthly fees.</li>
	<li>All public holidays mentioned in the Egyptian calender are fully paid either they come in the begging, middle or end of the month.</li>
	<li>Monthly fees should be paid in advance at the begging of each month, latest by 3<sup>rd</sup> of the month.</li>
	<li>10% Annual increase is applied on nursery fees at the beginning of academic year. (September of each year).</li>
	<li>Any contact between staff and parents should be done through nursery office, it is not allowed to contact staff via their personal mobile phones, so if you like to check about your child, please contact nursery phone number and we will communicate you with concerned personnel.</li>
	<li>The Principal reserves the right to require the removal of a child from the nursery on health grounds where necessary. Child may only return to the nursery 24 hours after the last bout of sickness. should a child become sick at the nursery, every effort will be made to contact the parents, and the child will be isolated from others untill parent will arrive to pick him/her up.</li>
	<li>After child leaving the nursery, his/her personal items are kept at the nursery premises only for a week after his departure, so please be keen to take all personal items upon leaving.</li>
	<li>Please make your decision either your child will be full-timer or part-timer, noting that monthly fees are not refundable under any circumstances.</li>
	</ol>
	<br>
	<input type="checkbox" name="hereby" value="acceptance"> By checking this field, I hereby accepted all above mentioned rules and regulations.<br>
	The date this formed is being filled out:<br>
	<input type="date" name="date1"><br>
	<hr>
	<input type="submit" value="Submit Form">
	<input type="reset"  value="Reset Form">
	<hr>

	</form>

	</div>

	<div class = "application">
	<!--- FIX THIS PART URGENTLY -->
	<h1 align="center"> Things to bring </h1>

	<ul>

	<li>Personal towel to be sent with the child at the beginning of the week and will be taken at the week end to wash it </li>
	<li>Tooth Paste </li>
	<li>Tooth Brush </li>
	<li>Hair brush </li>
	<li>clothes set to be remained permanently at the nursery</li>
	<li>3 pieces of diapers or wet tissues (only for babies under the age of 1) </li>
	<li>Large box of tissues </li>
	<li>Large bag of Dettol antibacterial wipes</li>
	<li>Plastic Cup & Bowl (preferably the same color)  </li>
	<li>For Junior class only: Small sketch </li>

	</ul>



	<h1 align="center"> Registration Paper </h1>

	<ul align="left">

	<li>Birth Certificate</li>
	<li>Vaccination Certificate </li>
	<li>One personal photo of the child </li>
	<li>Copy of parent's IDs </li>
	<li>Medical Certificate </li>


	</ul>
	 
	</div>

	<br>
	<button onclick="relocate()" id="editp">Edit</button>
	<button onclick="relocate()" id="deletep">Delete</button>


</body>



</html>
