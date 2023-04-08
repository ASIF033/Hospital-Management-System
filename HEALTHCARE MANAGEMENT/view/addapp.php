<?php include('../control/addappControl.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>
</head>

<body>
<div class="bgi"> 
<div class="content"> 
<h1> ADD APPOINMENT </h1>
<?php echo $apperror; ?>
<form name="appoinment" action="" method="post">
<br>
Appointment Code : <input type="text" id="name" name="appcode" > <br>
<br>
Patient Name : <input type="text" id="name" name="pname" > <br>
<br>
Patient ID : <input type="text" id="name" name="pid" > <br>
<br>
Doctor Name : </label> <input type="text" id="name" name="dname" > <br>
<br>
Doctor ID : <input type="text" id="name" name="did" > <br>
<br>
Day : <input type="text" id="name" name="day" > <br>
<br>
Time : <input type="text" id="name" name="time" > <br>
<br>
Room : <input type="text" id="name" name="room" > <br>
<br>
<input name="addapp" type="submit" id="green" value="CREATE APPOINMENT">
<br><br>
</form>

<br><br><br> 
<a href="../view/admin.php"> <input name="home" type="submit" id="green" value="Home Page"> </a> <br>
</div>
</body>
</html>