<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url(pixi.jpg);
             background-repeat:no-repeat;
             background-size:cover;  
        }
        .div2
        {
           display: flex;
           justify-content: center;
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
                /* box-shadow: 10px 10px darkslategrey; */
                margin-top: 120px;
                /* border: 10px solid transparent; */
                /* border-image: url(border.png) 50 round; */
                padding: 7px;
                margin-left: 10%;

          
         }
         .header
         {
                font-size:30px;
                width:100%;
                height:40px;
                background-image: linear-gradient(#EED6D3, #2E2E2E );              
                text-align: center;
                margin-top:60px;



         }
         .op 
         {
            font-size:30px;
         }
         .button
         {
            text-align: center;
            width:100%;
            height:40px;
            margin-top:150px;
         }
         .bt
         {
            width:20%;
            height:40px;
            font-size:25px;
            background-color:#A49393;
         }
         








    </style>

</head>
<body>
<form action='semester.php'>
    <div>
        <div>
            <div class='div2'>
                <div class='item'>
     <div class='header'>language &nbsp <select name='t1'>
                <option class='op'> C++ </option>
                <option class='op'> Java </option>
                <option class='op'> javascript</option>
              </select><br></div>

            <div class='button'><input type='submit'  class='bt' value='Ok'></div>
  </div>
        </div>
        </div>
  
 </form>
</body>
</html>

