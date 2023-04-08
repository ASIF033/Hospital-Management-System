<?php
include('../model/database.php');

$udapperror= $searcherror=$getcode=$getpname=$getpid=$getdname= $getdid=$getday=$gettime= $getroom="";

if(isset($_POST['search']))
{
    $searchcode=$_POST['appcode'];
    if ($searchcode !="")
    {
        $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckAppointment($conobj,"appointment",$searchcode);
    if ($userQuery->num_rows > 0 && $userQuery->num_rows < 2)
    {
        while($row = $userQuery->fetch_assoc())
        {
            $getcode=$row['acode'];
            $getpname= $row['pname'];
            $getpid=$row['pid'];
            $getdname=$row['dname'];
            $getdid=$row['did'];
            $getday= $row['day'];
            $gettime=$row['time']; 
            $getroom=$row['room'];
        }
    }
    else
    {
        $searcherror ="Appointment Code not found " ;
    }
    $connection->CloseCon($conobj);
    }
    else
    {
        $searcherror ="Provide Code" ;
    }
    //$connection->CloseCon($conobj);
}
if(isset($_POST['upapp']))
{
    $appcode=$_POST['appcode'];
    $pname=$_POST['pname'];
    $pid=$_POST['pid'];
    $dname=$_POST['dname'];
    $did=$_POST['did'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $room=$_POST['room'];
    if ($appcode !="" && $pname !="" && $pid !="" && $dname !="" && $did !="" && $day !="" && $time !="" && $room !="")
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->UpdateAppointment($conobj,"appointment",$appcode,$pname,$pid,$dname,$did,$day,$time,$room);
        if ($userQuery==TRUE) 
        {
            $udapperror = "Appointment updated";
        }
        else 
        {
            $udapperror = "Appointment not updated";
        }
        $connection->CloseCon($conobj);
    }
    else
    {
        $udapperror= "Provide All Information." ;
    }
}

if(isset($_POST['delapp']))
{
    $dlcode=$_POST['appcode'];
    if ($dlcode !="" )
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery=$connection->DeleteAppointment($conobj,"appointment",$dlcode);
        if ($userQuery==TRUE) 
        {
            $udapperror = "Appointment Deleted";
        }
        else 
        {
            $udapperror = "Appointment not Deleted";
        }
        $connection->CloseCon($conobj);
    }
    else
    {
        $udapperror= "Give proper information" ;
    }
}

?>