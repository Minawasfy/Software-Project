<html>

<head>
	<title>
	Fun & Learn: Welcome
	</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" href="SecretGetAway.css">
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('sBar').style.display = 'none';
		};
		function sgaBox() {
			document.getElementById('sBar').style.display = 'block';
		};
		function cancelGA(){
			document.getElementById('sBar').style.display= 'none';
		};
	</script>
</head>

<body>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='index.php';">
		<h1 id="welcm">Welcome</h1>
		<button type="button" class="secretGABtn" onclick="sgaBox()">Admin</button>
		<ul id="topnav">
			<li id="opt"><a id="addr" href="/Onlineapplication.php" >Online Application </a></li>
			<li id="opt"><a id="addr" href="/About us.php" >About us </a></li>
      <li id="opt"><a id="addr" href="/addteacher.php" >Teacher Registration </a></li>
      <li id="opt"><a id="addr" href="/Schedules.php" >Schedule </a></li>
			<li id="opt"><a id="addr" href="" >Gallery </a></li> <!--UPDATE LINKS-->
			<li id="opt"><a id="addr" href="" >Events </a></li>
		</ul>
		<h3 id="hdr2">Admin Side</h1>
		<ul id="admin">
			<li id="admnNav"><a href="/acceptteacher.php" id="admAdr">Teacher Acceptance</a></li>
      <li id="admnNav"><a href="/Addusers.php" id="admAdr">User Add</a></li>
      <li id="admnNav"><a href="/deleteuser.php" id="admAdr">User Delete</a></li>
      <li id="admnNav"><a href="/editteacher.php" id="admAdr">Teacher Edit</a></li>
		</ul>

	</header>
	
	<div>
		<div class="secret-bar" id="sBar">
			<strong id="title">Please enter your Serial Code:</strong><br>
			<input type="text" name="serial number" id="serialBar" > <!--value="Serial Code"-->
			<input type="button" value="Submit" id="serialBtn">
			<input type="button" value="Cancel" onclick="cancelGA()" id="cancelBtn">
		</div>
	</div>

	<div align="justify" class = "wt">
		<h2>An important Message to all the parents : </h2><hr>
		Many parents are concerned when their children are not practicing letters
		and numbers, they feel that completing paper and pencil exercises will most
		effectively prepare their children for elementary school. To change this common idea
		in our society we are working in our nursery hand in hand with parents in order to
		enrich your child's physical and mental development through our "Fun and Learn" strategy,
		where the child can enjoy learning through playing by using different activities.
		Our concept is aiming to increase the child's self confidence, encourage him to think
		widely and independently & work using his/her  own hands to prepare him to do pencil & paper
		work, a step that should come at some stage of preschool education without stressing over it.
	</div>

	<div align="justify" class="ei">
		<h2>Extra Information:</h2><hr>
		<ul>
			<li>We have opened our second branch @ Al Me3rag, starting october 2017 </li>
			<li>We have the honor serving Maadi children since 2008 </li>
			<li>Ask about our new baby class for age under 1 year old </li>
			<li>Transportation is available inside Maadi</li>
			<li>All teachers are foreigners or egyptians who are fluent in English </li>
		</ul>
	</div>

	<div id="footer">
		<object type="text/html" data="Contactus.php" id="ftr"></object>
	</div>

	<br>

</body>
</html>
