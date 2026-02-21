<html>
<body>
    
  </body>
    <style>
        div,p,h1
        {
            margin:0px;
        }
        
        .div{
        width: 100%;
        height: 750px;
        background-image: linear-gradient(to right, #1E90FF , #7B68EE,#00FFFF);
        }
        .div2
        {
          
        
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          flex-direction: column;
         }
         .item 
         { 
            
                width: 31%;
                height: 650px;
                background-color: beige;
                float: left;
                border-radius: 10px;
                box-shadow: 10px 10px darkslategrey;
                margin-top: 50px;
                border: 10px solid transparent;
                border-image: url(border.png) 50 round;
                padding: 7px;

          
         }
         .p
         {
               font-size: 30px;
               color:#E0FFFF;
               margin-left:90px;
               padding-top:10px;
         }
         .header{
            width: 100%;
            height:70px;
            background-image: linear-gradient(to right, #1E90FF , #7B68EE,#00FFFF);
           }

           .footer
           {
            width: 100%;
            height:540px;
            background-color:#E0FFFF;

           }
           .tt
           { 

            width: 100%;
            height:50px;
            background-image: linear-gradient(to right, #20B2AA , #7FFFD4);
            font-size:20px;
            
          }

          .t 
          {
              margin-left: 100px;
              padding-top:12px;
              
              
          }
          .button

          {
                width:25%;
                height:40px;
                margin-left:180px;
                margin-top:10px;
                background-color:#4682B4;
                font-size:20px;
                border-radius:5px;

          }















          .tt:hover{ background-color: #E0FFFF;
            }
            .tt:hover {opacity: 0.6}
          .button:hover{ background-color: #E0FFFF;
            }
          .button:hover {opacity: 0.6}

          .item:hover{ background-color: #28282B;
            }
           
           </style>
    
 
 <form action='r.php'>
 <div class='div'>
    <div class='div2'>
        <div class='item'>
            <div class='header'>
            <p class='p'>* Registration Form *</p><br><br>
        </div><br>
        <div class='footer'>
    <div class='tt'>
    <p class='t'>Username <input type='text' name='t1'></p><br>
        </div><br>
        <div class='tt'>
   <p class='t'><input type='text' placeholder ='Create password'name='t2'></p><br>
        </div><br>
        <div class='tt'>
    <p class='t'>Language <select name='t3'>
                <option> C++ </option>
                <option> Java </option>
                <option> Javascript</option>
                </select></p><br>
                   </div><br>
                   <div class='tt'>

    <p class='t'>Semester <select name='t4'>
                <option> 1st </option>
                <option> 2nd </option>
                <option> 3rd </option>
                <option> 4th </option>
                <option> 5th</option>
                <option> 6th</option>
                <option> 7th</option>
                <option> 8th</option>
                   </select></p><br>
                   </div><br>
                   <div class='tt'>
    <p class='t'>Mobile<input type='text' name='t5'></p><br>
    </div><br>
    <div class='tt'>
    <p class='t'>Email<input type='text' name='t6'></p><br>
    </div><br>
    <div class='tt'>
    <p class='t'>Gender <input type="radio" value="Male"  name="t7" >Male
    <input type="radio" value="Female" name="t7">Female</p><br>
    </div><br>
    <input type = 'submit' value = 'ok' class='button'>
        
    
</form>
        </div>
    </div>
        </div>
        </div>
