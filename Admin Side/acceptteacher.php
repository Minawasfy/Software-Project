<!DOCTYPE html>
<html>
<?php
  require 'db.php';
  require 'addteacher.php';
  $mysqli=new mysqli('localhost','root','','swe');
  if(mysqli_connect_errno())
  {
   print_f("Connection Failed: %s\n",mysqli_connect_error());
  }
   class teacherACC
   {
     private $utype $Fname, $dob, $nat, $address1, $Tell, $mobile1, $number2, $maritalstatus, $q1;
     private $q2, $q3, $q4, $q5, $q11, $q22, $q33, $q44, $q55, $prempname, $prempaddress, $prempnum;
     private $corlsalary, $reqsalary, $othernursurey, $povnersurey;
     var $db_obj = new dbconnect;
     var $con = $db_obj.connect();
     public static function display_teacher ()
     {
       $sql = "SELECT main.appstatus, main.fname, main.lname, nationality.name,
         teacher.telnum, address.name, dob.day, dob.month, dob.year, teacher.mobile1, teacher.maritalstatus,
         teacher.acaqual1, teacher.date_acaqual1, teacher.personal_qual1, teacher.date_ppersonalqual1, teacher.pempname,
         teacher.pempnum, teacher.corlsalary, teacher.reqsalary, teacher.othernursery, teacher.povnursery
         FROM main, teacher, nationality, address, dob WHERE main.id=teacher.main_id AND teacher.nationality=nationality.id
         AND teacher.address_id= address.id AND main.dob_id= dob.id";
         $result = $db_obj.executesql($sql);
         $row = $result.fetch_assoc();
     }
   }
   ?>
<head>
  <title>Fun & Learn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  <link rel="stylesheet" href="AdminSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
      <p id="h1T">Teacher</p><p id="h1Ac">Acceptance</p>
      <button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
      <button type="button" id="pabtn" onclick="location.href='';">Previous Applicaton</button>
      <button type="button" id="nabtn" onclick="location.href='';">Next Applicaton</button>
    </header>

    <div class = "teacher2">
      <form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
           <input type="text" name="Search"id="boxes" placeholder="Search for names.." onkeyup="myFunction()">
      </form>
      <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
      <form method="REQUEST" action="<?php $_SERVER["PHP_SELF"];?>">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
          $s=$_POST["Search"];
          if($s)
          {
            $sql2="SELECT main.appstatus, main.fname, main.lname, nationality.name,
              teacher.telnum, address.name, dob.day, dob.month, dob.year, teacher.mobile1, teacher.maritalstatus,
              teacher.acaqual1, teacher.date_acaqual1, teacher.personal_qual1, teacher.date_ppersonalqual1, teacher.pempname,
              teacher.pempnum, teacher.corlsalary, teacher.reqsalary, teacher.othernursery, teacher.povnursery
              FROM main, teacher, nationality, address, dob WHERE main.id=teacher.main_id AND teacher.nationality=nationality.id
              AND teacher.address_id= address.id AND main.dob_id= dob.id AND main.fname Like '$s' AND main.lname Like '$s' ";
            $array=array();
            $result2=$db_obj2.executesql($sql2); elmoshkla mn awl hna ****
            while($row2=mysqli_fetch_array($result2))
            {
                $result2=$db_obj2.executesql($sql2);
                $row2 = mysqli_fetch_array($result2);
                if(($s==$row2['fname'])||($s==$row2['lname'])):
      ?>
        Full name: <?php echo $row['fname']; $row['lname'];?><br><br>
        Date of birth:
        <?php echo $row['dob'];?><br><br>
        Nationality age:<?php echo $row['nat'];?><br><br>
        Home Address: <?php echo $row['address1'];?><br><br>
        Telephone number:<?php echo $row['telnum'];?><br><br>
        Mobile number 1:<?php echo $row['mobile1'];?><br><br>
        Mobile number 2:
        <input type="text" name="number2" maxlength="11" id="boxes"><br><br>
        Marital Status: <?php echo $row['maritalstatus'];?><br><br>
        Academic Qualifications with Dates:<br>
        Qualification 1:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q1" id="boxes"><br>
        Qualification 2:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q2" id="boxes"><br>
        Qualification 3:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q3" id="boxes"><br>
        Qualification 4:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q4" id="boxes"><br>
        Qualification 5:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q5" id="boxes"><br><br><hr>
        Professional Qualifications with Dates:<br>
        Qualification 1:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q11" id="boxes"><br>
        Qualification 2:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q22" id="boxes"><br>
        Qualification 3:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q33" id="boxes"><br>
        Qualification 4:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q44" id="boxes"><br>
        Qualification 5:
        <textarea rows="1" cols="50" id="boxes"></textarea>
        <input type="Date" name="q55" id="boxes"><br><br><hr>

        Present Employer's Name: <?php echo $row['prempname'];?><br><br>
        Present Employer's Address:
        <input type="text" name="num123"  id="boxes"><br><br>
        Present Employer's phone number: <?php echo $row['prempnum'];?><br><br><hr>

        Current or Last Salary: <?php echo $row['corlsalary'];?><br><br>
        Required Salary: <?php echo $row['reqsalary'];?><br><br>

        Have you been interviewed recently at other nurseries? if yes, please mention names:<br>
        <?php echo $row['othernursery'];?><br><br>

        In your point of view, how do you see an ideal nursery regarding its academic side?<br>
        <?php echo $row['povnursery'];?></textarea><br> <?php } } ?>
        <br><br>
        <button type="button" id="ACbtn" name="ACbtn">Accept Applicant</button>
        <button type="button" id="RFbtn" name="RFbtn">Refuse Applicant</button>
        <?php
          class AccBTNS
          {
            $ACbtn, $RFbtn, $appStatus, $sql;
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
          }
        ?>
      </form>
    </div>

    <!--an alert should show-->
</body>
</html>
