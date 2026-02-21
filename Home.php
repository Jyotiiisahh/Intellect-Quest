<hmtl>
    <body>
</body>
<?php
session_start();
if(isset($_SESSION['m'])==false)
{
    echo"<script>window.location='loginpage.php'</script>";
}
?>
<style>
     body
     {
        background-image:url(pp1.webp);
        background-repeat:no-repeat;
        background-size:cover;   
     }
    </style>

<a href = 'Home.php'>Exam</a>
<a href = 'About.php'>About</a>
<a href = 'Logout.php'>logout</a>
 
    
</html>