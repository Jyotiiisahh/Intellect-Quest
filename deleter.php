<?php
$t1 =$_GET['id'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
$q = "delete from register where username = '$t1'";
$rs = mysqli_query($con , $q);
if($rs)
{
    echo"Save";
}
else{
    echo"Error";
}
