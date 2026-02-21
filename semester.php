<html>
    <head>
        
</head>
<style>
    .header{
        width:100%;
        height:750px;
        background-color:plum;


    }
    .middle 
    {
        width:100%;
        height:300px;
        background-color:plum;




    }
    .footer
    {
        width:100%;
        height:200px;
        background-color:blue;
    }
    .tbl 
    {

        background-color:white;
        margin-left:200px;
    }





</style>
<div class='header'>

<?php

$a = $_GET['t1'];
$con = mysqli_connect('localhost','root','Jyotisah@123','Registration');
 $q = "select * from register where language = '$a'";
$rs = mysqli_query($con,$q);

while($row = mysqli_fetch_array($rs))
{
    echo"<table border=2 class='tbl'>
     <tr><td>$row[username]&nbsp &nbsp</td>

     <td>$row[password] &nbsp &nbsp</td>
    
     <td>$row[language] &nbsp &nbsp</td>

     <td>$row[semester] &nbsp &nbsp</td>
     
     <td>$row[mobile] &nbsp &nbsp</td>
     
     <td>$row[email] &nbsp &nbsp</td>
    
     <td>$row[gender] &nbsp &nbsp</td></tr>
    </table>";
}


?>
</div>


</html>
