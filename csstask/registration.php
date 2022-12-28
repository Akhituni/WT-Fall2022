<?php include "../processor/registrationproc.php";?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/regcss.css">
</head>
<body>
    
<div class="top">
        <h1>eCash</h1>
        <h3>Create Your Account Now</h3>

        <nav>
            <a href="#">Home</a>
            <a href="#">Sign Up</a>
            <a href="#">Login</a>
        </nav>

    </div>
    <h1 style="background-color:white;">Registration form</h1>
    <div id="error"></div>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return regivalidation()" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
       <td class="columna">
        Name
      </td> 
    <td class="columnb">
        <input type="text"  id="name" name="name"  placeholder="name"><br>
    </td>
    </tr>
    <tr>
       <td class="columna">
         Business name
      </td> 
    <td class="columnb">
        <input type="text" id="bn" name="bn"  ><br>
    </td>
    </tr>
    <tr>
       <td class="columna">
         E-mail
      </td> 
    <td class="columnb">
        <input type="text" id="email" name="email"  ><br>
        <?php echo "$validemail";?>
    </td>
    </tr>

    <tr>

       <td class="columna">
        Adress
      </td> 
    <td class="columnb">
        <input type="text" id="add1" name="add1"  placeholder="Road/area">
        <input type="text" id="add2"name="add2"  placeholder="City">
        <input type="text" id="add3"name="add3"  placeholder="District"><br>
    </td>
</tr>
<tr>
       <td class="columna">
         Business License Number
      </td> 
    <td class="columnb">
        <input type="text" id="blnumber" name="blnumber" > <br>
    </td>
    </tr>
    


<tr>
       <td class="columna">
         Monthly Transaction Range
      </td> 
    <td class="columnb">
    <input type="radio" id="tr1" name="tr1" value="0-5000">
    <label for="tr1">0-5000</label><br>

    <input type="radio" id="tr1" name="tr1" value="6000-14000">
    <label for="tr1">6000-14000</label><br>

    <input type="radio"  id="tr1" name="tr1" value="15000-40000">
    <label for="tr1"> 15000-40000</label><br>

    <input type="radio" id="tr1" name="tr1" value="41000-90000">
    <label for="tr1"> 41000-90000</label><br>

    <input type="radio" id="tr1" name="tr1" value="more then 100000">
    <label for="tr1">more then 100000 </label><br>


  
    </td>
    </tr>

    <tr>
       <td class="columna">
         Bank Account Number
      </td> 
    <td class="columnb">
        <input type="text" id="banumber" name="banumber" > <br>
    </td>
    </tr>

    <tr>
        <td class="columna">NID number </td>   
        <td class="columnb">
            <input type="text" id="nid" name="nid" ><br>
       </td>
    </tr>
   
    <tr>
        <td class="columna"> Phone Number </td>
        <td class="columnb">
            <input type="Text" id="phone" name="phone" ><br> <?php echo $validphone; ?>
        </td>
    </tr>
    <tr>
        <td class="columna">Password</td>   
        <td class="columnb">
            <input type="password"  id="pass" name="pass" ><br> 
       </td>
    </tr>
    

        <td class="columna">Date of birth </td>
         <td class="columnb">
            <input type="date" id="dob" name="dob"  ><br>
        </td>

    </tr>
    <tr>
        <td class="columna">profile</td>
        <td class="columnb">
            <input type="file" id="files" name="files">
        </td>
    </tr>



<tr>
<td class="columna"></td>
    <td class="columnb" >
    
        <input style="margin-top:20px;" type="submit" name="submit"><br><br>
        <input type="reset">
    </td>
  
</tr>


    </table>
    </form>
    <script src="js/myscript.js"></script>
   
</body>
</html>
