<form action = "updateexam.php">
<?php
$a = $_GET['id'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Tech');
$q = "select * from exam where Question = '$a'";
$rs = mysqli_query($con , $q);
while($row = mysqli_fetch_array($rs))
{
    echo "Question <input value ='$row[question]'type'='text' name='t1'><br>
          Option1 <input value ='$row[op1]'type'='text' name='t2'><br>
          Option2 <input value ='$row[op2]'type'='text' name='t3'><br>
          Option3 <input value ='$row[op3]'type'='text' name='t4'><br>
          Option4 <input value ='$row[op4]'type'='text' name='t5'><br>
          Answer <input value ='$row[ans]'type'='text' name='t6'><br>
          Hint1 <input value ='$row[hint1]'type'='text' name='t7'><br>
          Hint2 <input value ='$row[hint2]'type'='text' name='t8'><br>";
         
          
}
?>
<input type='submit' value='update'>    
</form>




