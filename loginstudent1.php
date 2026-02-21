<html>
    <body>
</body>
<style>
    p,h1
    {
        margin:0px;
    }
     body{
            background-image:url(imglo.jpg);
             background-repeat:no-repeat;
             background-size:cover;  
        }
         .a
        {
           display: flex;
           justify-content: right;
           align-items: left;
           flex-wrap: wrap;
           flex-direction: column;
         }
       
    .item 
         { 
            
                width: 28%;
                height: 500px;
                background-image: linear-gradient(#17202A, #34495E );
                float: left;
                border-radius: 10px;
                margin-top: 120px;
                padding: 7px;
                margin-left: 60%;
         }
         .u 
         {
            margin-left:90px;
            margin-top:20%;
            align-items: center;
            font-size:20px;
            height:40px;
            width:60%;
            height:40px;
            background-color:#CFB1B7;
            

         }
         .p 
         {
            margin-left:90px;
            margin-top:20px;
            align-items: center;
            font-size:20px;
            height:40px;
            width:60%;
            background-color:#CFB1B7;
            

         }
         .header
         {
            width:100%;
            height:40px;
            background-color:plum;
            text-align: center;
            color:white;
            font-size:30px;

         }
         .button
         {
            width:150px;
            margin-left:140px;
            margin-top:20px;
            align-items: center;
            font-size:20px;
            height:40px;
            background-color:#83858C;
            border-radius:10px;


         }
         .r 
         {
            margin-left:170px;
         }
         .r1 
         {
            margin-bottom:100px;
         }
         .file 
         {
            width:100%;
            height:40px;
            background-color:#CFB1B7;
            color:white;
         
         }
         .img 
         {
            width:30px;
            height:30px;
            margin-top:20px;
            margin-left:120px;
         }



       .r:hover {
         background-color: #CFBFF7;
        }

        .r1:hover {
         background-color: #CFBFF7;
        }

        .button:hover {
         background-color: #8B80F9;
        } 



</style>



<form action='Adminsession.php'>
    <div class='a'>
        <div class='item'>
            <p class='header'> Login Here  </p>
    <p><input type="text" placeholder='Username' class='u' name = 't1'></p><br><br>
    <input type="Password" placeholder='Password' class='p' name = 't2'><br><br>
    <input type="submit" value="Login" class='button'><br><br><hr>
    <a href = 'registration.php' style="color:white;" class='r'>Register here</a><br><br>
    <img src='fb.png' class='img'> <a href='Facebooklogin.php' style="color:white;" class='r1'> Login with Facebook</a>

        </div>
        </div>
    
</form>