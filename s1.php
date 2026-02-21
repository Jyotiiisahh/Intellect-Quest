<?php
$con = mysqli_connect('localhost','root','Jyotisah@123','Tech');
$q = "select * from exam";
$rs = mysqli_query($con,$q);

while($row = mysqli_fetch_array($rs))
{
    echo 
       "<table border=1>
          <tr><td>Question:$row[question]&nbsp&nbsp</td>
          <td>Option1:$row[op1]&nbsp&nbsp</td>
          <td>Option2:$row[op2]&nbsp&nbsp</td>
          <td>Option3:$row[op3]&nbsp&nbsp</td>
          <td>Option4:$row[op4]&nbsp&nbsp</td>
          <td>Answer:$row[ans]&nbsp&nbsp</td>
         <td>Hint1:$row[hint1]&nbsp&nbsp</td>
          <td>Hint2:$row[hint2]&nbsp&nbsp</td>
          <td><a href = 'editexam.php?id=$row[question]'> Edit</a>&nbsp&nbsp</td>
          <td><a href = 'deleteexam.php?id=$row[question]'> Delete</a></td></tr>
          </table>";
    
}
?>













