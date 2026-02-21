<?php
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
$q = "select * from register";
$rs = mysqli_query($con,$q);

while($row = mysqli_fetch_array($rs))
{
    echo 
       "<table border=1>
          <tr><td>Username:$row[username]&nbsp&nbsp</td>
          <td>Password:$row[password]&nbsp&nbsp</td>
          <td>Languages:$row[language]&nbsp&nbsp</td>
          <td>Semester:$row[semester]&nbsp&nbsp</td>
          <td>Mobile:$row[mobile]&nbsp&nbsp</td>
          <td>Email:$row[email]&nbsp&nbsp</td>
         <td>Gender:$row[gender]&nbsp&nbsp</td>
        
          <td><a href = 'editr.php?id=$row[username]'> Edit</a>&nbsp&nbsp</td>
          <td><a href = 'deleter.php?id=$row[username]'> Delete</a></td></tr>
          </table>";
    
}
?>