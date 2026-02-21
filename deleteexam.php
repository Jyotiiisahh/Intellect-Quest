<?php
$t1 =$_GET['id'];
$con = mysqli_connect('localhost','root','Jyotisah@123','tech');
$q = "delete from exam where Question = '$a'";
$rs = mysqli_query($con , $q);
if($rs)
{
    echo"Save";
}
else{
    echo"Error";
}
