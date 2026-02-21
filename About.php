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


<a href = 'Home.php'>Home</a>
<a href = 'About.php'>About</a>
<a href = 'Logout.php'>logout</a>
</html>