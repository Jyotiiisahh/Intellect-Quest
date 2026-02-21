<html>
    <body>
</body>
<style>
    </style>
<?php
$a = $_GET['t1'];
$b = $_GET['t2'];
$d = $_GET['t3'];
$e = $_GET['t4'];
$f = $_GET['t5'];
$g = $_GET['t6'];
$h = $_GET['t7'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
$q = "insert into register values('$a','$b','$d','$e','$f','$g','$h')";
$rs = mysqli_query($con , $q);
if($rs)
echo"Save";
else
echo"error";
?>