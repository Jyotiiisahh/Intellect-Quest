<?php
$t1 =$_GET['t1'];
$t2 =$_GET['t2'];
$t3 =$_GET['t3'];
$t4 =$_GET['t4'];
$t5 =$_GET['t5'];
$t6 =$_GET['t6'];
$t7 =$_GET['t7'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
echo $q = "update register set password = '$t2', language = '$t3',semester = '$t4',mobile = '$t5',email = '$t6',gender = '$t7' where username= '$t1'";
$rs = mysqli_query($con , $q);
if($rs)
{
    echo"Save";
}
else{
    echo"Error";
}
?>

