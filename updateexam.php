<?php
$t1 =$_GET['t1'];
$t2 =$_GET['t2'];
$t3 =$_GET['t3'];
$t4 =$_GET['t4'];
$t5 =$_GET['t5'];
$t6 =$_GET['t6'];
$t7 =$_GET['t7'];
$t8 =$_GET['t8'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Tech');
$q = "update exam set op1 = '$t2', op2 = '$t3',op3 = '$t4',op4 = '$t5',ans = '$t6',hint1 = '$t7',hint2 = '$t8' where question= '$t1'";
$rs = mysqli_query($con , $q);
if($rs)
{
    echo"Save";
}
else{
    echo"Error";
}
?>

