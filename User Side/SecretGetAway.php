<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="SecretGetAway.css">
    <meta charset="utf-8">
    <script type="text/javascript">
            function cancelGA(){
              document.getElementById('sBar').style.display= 'none';
            }
    </script>
  </head>
  <body>
    <div class="secret-bar" id="sBar">
      <strong id="title">Please enter your Serial Code:</strong><br>
      <input type="text" name="serial number" id="serialBar" > <!--value="Serial Code"-->
      <input type="button" value="Submit" id="serialBtn">
      <input type="button" value="Cancel" onclick="cancelGA()" id="cancelBtn">
    </div>

  </body>
</html>
