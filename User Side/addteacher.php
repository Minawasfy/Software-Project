<html>
<head>

  <title>Fun & Learn: Teacher App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  <header id="bkbtn">
    <img src="logo.png" id="logo" onclick="location.href='/index.php';">
    <button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
  </header>
</head>

<body>

  <div class = "teacher1">
    <form>
      <p id="h1t"><u>Preliminary Teacher Application:</u></p><br><br><hr>
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
      <input type="text" name="number1" maxlength="11" id="boxes"><br><br>
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
      <textarea rows="1" cols="50" id="boxes"></textarea><br>

      <br>
      <input type="submit" value="Submit Form" id="Sbtn">
      <input type="reset"  value="Reset Form" id="REbtn">
    </form>
  </div>

  <div id="footer" style="top:250%;">
		<object type="text/html" data="Contactus.php" id="ftr"></object>
	</div>

</body>
</html>
