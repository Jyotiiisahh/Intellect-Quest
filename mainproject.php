<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;1,500&family=Nunito+Sans:opsz,wght@6..12,200&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&  family=Protest+Guerrilla&family=Protest+Riot&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;1,500&family=Nunito+Sans:opsz,wght@6..12,200&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Protest+Guerrilla&family=Protest+Riot&display=swap" rel="stylesheet">
</head>
      
   <?php
   session_start();
   if(isset($_SESSION['m'])==false)
  {
    echo"<script>window.location='loginpage.php'</script>";
  }
?>

       
    <style>
        h1,p
        {
            margin:0px ;
        }
        .div
        {
            width: 100%;
            height: 800px;
            background-image: linear-gradient(to right,rgb(247, 170, 247), rgb(237, 217, 217), rgb(150, 150, 248));
        }
        .container
        {
            width: 100%; 
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            
        
}
        .item
            {
                width: 31%;
                height: 600px;
                background-color: beige;
                float: left;
                border-radius: 10px;
                box-shadow: 10px 10px darkslategrey;
                margin-top: 20px;
                border: 10px solid transparent;
                border-image: url(border.png) 50 round;
                padding: 7px;
                
            }
            .Quiz
            {
                font-size: 60px;
                font-family: "Protest Guerrilla", sans-serif;
            }
            .cpp
            {
                padding: 70px;
                margin-left: 50px;
                width: 40%;
                height: 200px;
                margin-top: 20px;
                
            }
            .div1
            {
                width: 100%;
                height:200px;
                background-image: linear-gradient(#3A5795, white);
                border-radius: 10px;
            }
            .div2
            {
                width: 100%;
                height: 400px;
                background-image:linear-gradient(#f5f5f5 ,#f0ffff);
                border-radius: 10px;
            }
            .div3
            {
                width: 100%;
                height:200px;
                background-image: linear-gradient(rgb(235, 73, 73), #3A5795,#FFFFFF);
                border-radius: 10px;
            }
            .div4
            {
                width: 100%;
                height:200px;
                background-image: linear-gradient(#FFFFFF,#ffcc00,#FFFFFF);
                border-radius: 10px;
            }
            .javascript
            {
                width: 55%;
                height: 180px;
                padding: 70px;
                margin-left: 50px;
                margin-top: 20px;

            }
            .note1
            {
                font-size: 20px;
                margin-left: 20px;
                font-family: "Kanit", sans-serif;
            }
            .button
            {
                background-color: #343434;
                margin-left: 180px;
                margin-top: 17px;
                width: 25%;
                height: 50px;
                font-size: 25px;
                border-radius: 10px;
                
            }
            .button2
            {
                background-color: #343434;
                margin-left: 180px;
                margin-top: 25px;
                width: 25%;
                height: 50px;
                font-size: 25px;
                border-radius: 10px;

            }
            .button3
            {
                background-color:#343434;
                margin-left: 180px;
                margin-top:50px;
                width: 25%;
                height: 50px;
                font-size: 25px;
                border-radius: 10px;

            }
            .class
            {
                margin-left: 90px;
                font-size: 25px;
            }
    
            .item:hover{ background-color: #28282B;
            }
            .button:hover {opacity: 0.6}
            .button2:hover {opacity: 0.6}
            .button3:hover {opacity: 0.6}
        
       </style>
       <body>
        
        <div class="div">
            <p class="Quiz" style="color: black;" align="center"> Quiz Competition</p>
         <div class="container">
            <div class="item">
                <div class="div1">
                <img src="cpp.jpg" class="cpp">
                <p class="note1" style="color: black;"> 🚀C++ is an object-oriented programming (OOP) language that is viewed by many as
                    the best language for creating large-scale applications</p><br>
                     <table class="class">
                        <tr><td align="center">👉10</td><td>👉</td><td align="center">5 min</td></tr>
                        <tr><td align="center"> 👉Questions</td><td>👉</td><td align="center">Duration </td></tr></table>
                        <a href="c++.html"><input type="button" value="Quiz" style="color:#FFFFFF ;" class="button">
                </div>
                <div class="div2">
                    </div>
                    
                </div>
            <div class="item">
                <div class="div3">
                    <img src="java.png" class="cpp">
                   <p class="note1" style="color: black"> 🚀Java is a multi-platform, object-oriented, 
                    and network-centric language that can be used as a platform in itself.</p>
                    <table class="class">
                        <tr><td align="center">👉10</td><td>👉</td><td align="center">5 min</td></tr>
                        <tr><td align="center"> 👉Questions</td><td>👉</td><td align="center">Duration </td></tr></table>
                    <a href="quizmain.php"><input type="button" value="Quiz" style="color:#FFFFFF;" class="button2">
                
                </div>
                <div class="div2">
               </div>
            </div>
            <div class="item">
                <div class="div4">
                    <img src="javascript.png" class="javascript">
                    <p class="note1" style="color: black;">🚀JavaScript is a multi-paradigm, dynamic language with types and operators, standard built-in objects, and methods. </p>
                         <table class="class">
                            <tr><td align="center">👉10</td><td>👉</td><td align="center">5 min</td></tr>
                            <tr><td align="center"> 👉Questions</td><td>👉</td><td align="center">Duration </td></tr></table>
                              <a href="java.html"><input type="button" value="Quiz" style="color: #FFFFFF;" class="button3">
                 </div>
                <div class="div2">
                    
                </div>
            </div>
        </div>
        </div>

        <a href = 'Home.php'>Home</a>
        <a href = 'About.php'>About</a>
        <a href = 'Logout.php'>logout</a>










        
        </body>
        </html>



        