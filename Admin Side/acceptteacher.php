<html>
<?php
  require 'db.php';
  require 'addteacher.php';

  $Fname=$tdob=$nat=$address1=$Tell=$number1=$number2=$status=$q1="";
  $q2=$q3=$q4=$q5=$q11=$q22=$q33=$q44=$q55=$Emname=$num123=$Emnum="";
  $salary=$salary1=$other1=$other="";

  $sql= "SELECT * FROM (/*-table name-*/)"; /*btgib el records mn el db*/

  if ($_SERVER["REQUEST_METHOD"] == "REQUEST") {
    $Fname=$_REQUEST['Fname'];
    $tdob=$_REQUEST['tdob'];
    $nat=$_REQUEST['nat'];
    $address1=$_REQUEST['address1'];
    $Tell=$_REQUEST['Tell'];
    $number1=$_REQUEST['number1'];
    $number2=$_REQUEST['number2'];
    $status=$_REQUEST['status'];
    $q1=$_REQUEST['q1'];
    $q2=$_REQUEST['q2'];
    $q3=$_REQUEST['q3'];
    $q4=$_REQUEST['q4'];
    $q5=$_REQUEST['q5'];
    $q11=$_REQUEST['q11'];
    $q22=$_REQUEST['q22'];
    $q33=$_REQUEST['q33'];
    $q44=$_REQUEST['q44'];
    $q55=$_REQUEST['q55'];
    $Emname=$_REQUEST['Emname'];
    $Emnum=$_REQUEST['Emnum'];
    $num123=$_REQUEST['num123']
    $salary=$_REQUEST['salary'];
    $salary1=$_REQUEST['salary1'];
    $other1=$_REQUEST['other1'];
    $other=$_REQUEST['other'];
  }

  $result= $db->excute($sql);
  $row = $result->fetch_assoc();
  if ($result-> num_rows> 0){
    $Fname=$row['Fname'];
    $tdob=$row['tdob'];
    $nat=$row['nat'];
    $address1=$row['address1'];
    $number1=$row['number1'];
    $number2=$row['number2'];
    $status=$row['status'];
    $q1=$row['q1'];
    $q2=$row['q2'];
    $q3=$row['q3'];
    $q4=$row['q4'];
    $q5=$row['q5'];
    $q11=$row['q11'];
    $q22=$row['q22'];
    $q33=$row['q33'];
    $q44=$row['q44'];
    $q55=$row['q55'];
    $Emname=$row['Emname'];
    $Emnum=$row['Emnum'];
    $num123=$row['num123']
    $salary=$row['salary'];
    $salary1=$row['salary1'];
    $other1=$row['other1'];
    $other=$row['other'];
    echo '<div class = "teacher2">
      <form method="REQUEST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Full name: '.$Fname.'
        <br><br>
        Date of birth: '.$tdob.'
        <br><br>
        Nationality age: '.$nat.'
        <br><br>
        Home Address: '.$address1.'
        <br><br>
        Telephone number: '.$Tell.'
        <br><br>
        Mobile number 1: '.$number1.'
        <br><br>
        Mobile number 2: '.$number2.'
        <br><br>
        Marital Status: '.$status.' <br>
        Academic Qualifications with Dates:<br>
        Qualification 1: '.$q1.'
        <br>
        Qualification 2: '.$q2.'
        <br>
        Qualification 3: '.$q3.'
        <br>
        Qualification 4: '.$q4.'
        <br>
        Qualification 5: '.$q5.'
        <br><br><hr>
        Professional Qualifications with Dates:<br>
        Qualification 1: '.$q11.'
        <br>
        Qualification 2: '.$q22.'
        <br>
        Qualification 3: '.$q33.'
        <br>
        Qualification 4: '.$q44.'
        <br>
        Qualification 5: '.$q55.'

        Present Employer s Name: '.$Emname.'

        Present Employer s Address: '.$num123.'
        <br><br>
        Present Employer s phone number: '.$Emnum.'
        <br><br><hr>

        Current or Last Salary: '.$salary.'
        <br><br>
        Required Salary: '.$salary1.'
        <br><br>

        Have you been interviewed recently at other nurseries? if yes, please mention names:<br> '.$other1.'
        <br><br>

        In your point of view, how do you see an ideal nursery regarding its academic side?<br> '.$other.'
        <br>
        <br><br>
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
  <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
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
      <!--<form method="REQUEST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Full name:
        <input type="text" name="Fname" id="boxes" required><br><br>
        Date of birth:
        <input type="Date" name="tdob" id="boxes" required><br><br>
        Nationality age:
        <input type="number" name="nat" id="boxes" required><br><br>
        Home Address:
        <input type="text" name="address1" id="boxes" required><br><br>
        Telephone number:
        <input type="text" name="Tel" maxlength="8" id="boxes" required><br><br>
        Mobile number 1:
        <input type="text" name="number1" maxlength="11" id="boxes" required><br><br>
        Mobile number 2:
        <input type="text" name="number2" maxlength="11" id="boxes"><br><br>
        Marital Status:<br>
        <input type="radio" name="status" value="Single" checked>Single<br>
        <input type="radio" name="status" value="Married">Married<br>
        <input type="radio" name="status" value="Divorced">Divorced<br>
        <input type="radio" name="status" value="Widowed">Widowed<br><br>
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

        Present Employer's Name:
        <input type="text" name="Emname" id="boxes" required><br><br>
        Present Employer's Address:
        <input type="text" name="num123"  id="boxes"><br><br>
        Present Employer's phone number:
        <input type="text" name="Emnum" id="boxes" maxlength="11" required><br><br><hr>

        Current or Last Salary:
        <input type="number" name="salary" id="boxes" min="1" max ="10000" required><br><br>
        Required Salary:
        <input type="number" name="salary1" id="boxes" min="1" max ="10000" required><br><br>

        Have you been interviewed recently at other nurseries? if yes, please mention names:<br>
        <input type="text" name="other1" id="boxes"><br><br>

        In your point of view, how do you see an ideal nursery regarding its academic side?<br>
        <textarea rows="1" cols="50" name="other" id="boxes"></textarea><br>
        <br><br>-->
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
      </form>
    </div>

    <!--an alert should show-->
</body>
</html>
