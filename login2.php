<html>
    <body>
</body>
<style>
    </style>
<?php
$a = $_GET['t1'];
$b = $_GET['t2'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
$q = "select * from admin where Username ='$a' and Password = '$b'";
$rs = mysqli_query($con , $q);
if($row = mysqli_fetch_array($rs))
{ 
    session_start();
    $_SESSION['m'] = $a;
    echo"<script>window.location='Dashboard.php'</script>";

}
else
    echo"Invalid";
?>




</html>
