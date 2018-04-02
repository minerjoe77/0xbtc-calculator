<html>
 <head>
  <title>0xBTC Calculator</title>
 </head>
 <body>

 
 
 
<?php
 $varGlobalDiff =  "19677033";
  if($_POST['formSubmit'] == "Submit")
  {
    $varHashrate = $_POST['formHashrate'];
    $varGlobalDiff = $_POST['formGlobalDiff'];

  }
?> 

 
 
<form action="index.php" method="post">
<br><br>
What is your current total hash rate?  <br>
e.g.<br>
if 1.5MH/s then type in 1,500,000 <br>

<input type="text" name="formHashrate" maxlength="50" value"<?=$varHashrate;?>">


<br><br>
What is the current Global Difficulty?  <br>
refer to https://0x1d00ffff.github.io/0xBTC-Stats <br>

<br>
<input type="text" name="formGlobalDiff" maxlength="50" value"<?=$varGlobalDiff;?>">


<input type="submit" name="formSubmit" value="Submit">

</form>

  
 

 
 
 </body>
</html>
