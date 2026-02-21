<form action = "updater.php">
<?php
$a = $_GET['id'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
$q = "select * from register where username = '$a'";
$rs = mysqli_query($con , $q);
while($row = mysqli_fetch_array($rs))
{
    echo "Username <input value ='$row[username]'type'='text' name='t1'><br>
          Password <input value ='$row[password]'type'='text' name='t2'><br>
          Languages <input value ='$row[language]'type'='text' name='t3'><br>
          Semester <input value ='$row[semester]'type'='text' name='t4'><br>
          Mobile <input value ='$row[mobile]'type'='text' name='t5'><br>
          Email <input value ='$row[email]'type'='text' name='t6'><br>
          Gender <input value ='$row[gender]'type'='text' name='t7'><br>";
        
         
          
}
?>
<input type='submit' value='update'>    
</form>




