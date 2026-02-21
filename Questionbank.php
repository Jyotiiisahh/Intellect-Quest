<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;1,500&family=Nunito+Sans:opsz,wght@6..12,200&family=Oswald:wght@200..700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Protest+Guerrilla&family=Protest+Riot&family=Titillium+Web:ital,
wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
           
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;1,500&family=Nunito+Sans:opsz,wght@6..12,200&family=Oswald:wght@200..700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Protest+Guerrilla&family=Protest+Riot&family=Titillium+Web:ital,wght@0,
200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">



</head>
            <style>
                p,h1,ul
                {
                    margin:0px;
                }
                .div1
                {
                    width:100%;
                    height:100px;
                    background-image: linear-gradient(to right, #5D6D7E  , #1C2833);
                    font-family: "Platypi", serif;
                    font-optical-sizing: auto;
                   
                }
                .div2
                {
                    width:100%;
                    height:80px;
                   background-image: linear-gradient(to right, #808B96 ,#1B4F72);
                    font-size:30px;
                    font-family: "Platypi", serif;
                    font-optical-sizing: auto;
                    
                }
                .img2
                {
                    width:50%;
                    height:600px;
                    float:left;
                }
                .img1
                {
                    width:30px;
                    height: 30px;
                    border-radius: 360px;
                    margin-top: 20px;
                    margin-left: 20px;
                }
                .Admin
                {
                    font-size:30px;
                    color:White;
                }
                .header
                {
                    margin-left: 30%;
                    font-size: 30px;
                }
                .div2a
                {
                   margin-left: 650px;
                   font-size: 30px;
                   
                }
                .div2a a
                {
                     text-decoration: none;
                }
                 .div2a li
               {
                   display: inline-block;
                  padding: 20px 30px;
    
               }
               .div2a li:hover {
                background-color: plum;
               }
               .div3
               {
                  width:25%;
                  height:800px;
                  background-color: aliceblue;
                  float: left;
               }
               .div4
               {
                  width:75%;
                  height:800px;
                  background-color: wheat;
                  float: left;
               }
               .container
               {
                   width: 100%; 
                   height: 600px;
                   display: flex;
                   flex-wrap: wrap;
                   flex-direction: row;
                   
               
       }
               .item
                   {
                       width: 70%;
                       height: 150px;
                       margin-left:40px;
                       background-color: beige;
                       float: left;
                       border-radius: 10px;
                       box-shadow: 10px 10px darkslategrey;
                       margin-top: 20px;
                       border: 10px solid transparent;
                       border-image: url(border.png) 50 round;
                       padding: 7px;
                       
                   }
                   .button 
                   {
                      width:50%;
                      height:50px;
                       margin-top:50px;
                       margin-left: 60px;
                       background-color: green;
                       border-radius: 5px;
                       font-size: 20px;
                       color: azure;


                   }
    


           






            </style>
            <div class="div1"><img src="jyoti.JPG" class="img1"><span style="color:white" class="Admin">Admin</span> <span style="color:white" class="header">Intellect Quest</span>
            
            </div>
            <div class="div2">
             
                 <ul class="div2a">
                    <li><a href="Admin.php"><span style="color: beige;">Home</span></a></li>
                    <li><a href="About1.php"><span style="color:beige">About</span></a></li>
                    <li><a href="Detail.php"><span style="color:beige">Details</span></a></li>
                    <li><a href="Logout.php"><span style="color:beige">Logout</span></a></li>
                   </ul>
                   <div class="div3">
                    <div class="container">
                        <div class="item">Question Bank<br><a href='Questionbank.php'><input type="button" value="View" class="button"></a></div>
                        <div class="item">Student Details<br><a href='studentdetail.php'><input type="button" value="View" class="button"></a></div>
                        <div class="item">Streams<br><a href='stream.php'><input type="button" value="View" class="button"></div>
                            </div>
                   </div>
                   <div class="div4">
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
          <td><a href = 'deleter.php?id=$row[question]'> Delete</a></td></tr>
          </table>";
    
}
?>

                   </div>

           