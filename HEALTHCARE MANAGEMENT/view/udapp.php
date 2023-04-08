<?php include('../control/udappControl.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>
</head>

<body>
<h1> UPDATE APPOINMENT </h1>
<?php echo $udapperror; ?>
<form name="appoinment" action="" method="post">
<br>
<?php echo $searcherror ?> <br> 
Appointment Code : <input type="text" id="name" name="appcode" value="<?php echo $getcode; ?>" onkeyup="AppointmentCode()"> <input name="search" type="submit" id="green" value="SEARCH"><br> <br>
<br>
Patient Name : <input type="text" id="name" name="pname" value="<?php echo $getpname; ?>" > <br>
<br>
Patient ID : <input type="text" id="name" name="pid" value="<?php echo $getpid; ?>" > <br>
<br>
Doctor Name : </label> <input type="name" id="name" name="dname" value="<?php echo $getdname; ?>"> <br>
<br>
Doctor ID : <input type="text" id="name" name="did"  value="<?php echo $getdid; ?>"><br>
<br>
Day : <input type="text" id="name" name="day" value="<?php echo $getday; ?>" ><br>
<br>
Time : <input type="text" id="name" name="time"  value="<?php echo $gettime; ?>"><br>
<br>
Room : <input type="text" id="name" name="room" value="<?php echo $getroom; ?>" ><br>
<br>
<input name="upapp" type="submit" id="green" value="UPDATE APPOINMENT">
<input name="delapp" type="submit" id="green" value="DELETE APPOINMENT">
<br><br>
</form>

<p id="codemsg"> </p> 

<br><br><br> 
<a href="../view/admin.php"> <input name="home" type="submit" id="green" value="Home Page"> </a> <br>
</body>
</html>