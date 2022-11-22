<?php include "../processor/registrationproc.php";?>
<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Registration form</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
       <td>
        Name:
      </td> 
    <td>
        <input type="text" name="name" required placeholder="name"><br>
    </td>
    </tr>
    <tr>
       <td>
         Business name:
      </td> 
    <td>
        <input type="text" name="bn" required ><br>
    </td>
    </tr>
    <tr>
       <td>
         E-mail:
      </td> 
    <td>
        <input type="text" name="email" required ><br>
        <?php echo "$validemail";?>
    </td>
    </tr>

    <tr>

       <td>
        Adress:
      </td> 
    <td>
        <input type="text" name="add1" required placeholder="Road/area">
        <input type="text" name="add2" required placeholder="City">
        <input type="text" name="add3" required placeholder="District"><br>
    </td>
</tr>
<tr>
       <td>
         Business License Number:
      </td> 
    <td>
        <input type="text" name="blnumber" required> <br>
    </td>
    </tr>
    


<tr>
       <td>
         Monthly Transaction Range:
      </td> 
    <td>
    <input type="radio"  name="tr1" value="0-5000">
    <label for="tr1">0-5000</label><br>

    <input type="radio"  name="tr1" value="6000-14000">
    <label for="tr1">6000-14000</label><br>

    <input type="radio"  name="tr1" value="15000-40000">
    <label for="tr1"> 15000-40000</label><br>

    <input type="radio"  name="tr1" value="41000-90000">
    <label for="tr1"> 41000-90000</label><br>

    <input type="radio"  name="tr1" value="more then 100000">
    <label for="tr1">more then 100000 </label><br>


  
    </td>
    </tr>

    <tr>
       <td>
         Bank Account Number:
      </td> 
    <td>
        <input type="text" name="banumber" required> <br>
    </td>
    </tr>

    <tr>
        <td>NID number: </td>   
        <td>
            <input type="text" name="nid" required placeholder="AUV2331129" maxlength="14"><br>
       </td>
    </tr>
    <tr>
    <tr>
        <td> Phone Number: </td>
        <td>
            <input type="Text" name="phone" ><br> <?php echo $validphone; ?>
        </td>
    </tr>
    <tr>
        <td>Password:</td>   
        <td>
            <input type="password" name="pass" required placeholder="*****" maxlength="5"><br> 
       </td>
    </tr>
    

        <td>Date of birth: </td>
         <td>
            <input type="date" name="dob" required ><br>
        </td>

    </tr>
    <tr>
        <td>profile</td>
        <td>
            <input type="file" name="files">
        </td>
    </tr>



<tr>
    <td>
        <input type="submit" name="submit"><br>
        <input type="reset">
    </td>
</tr>

    </table>
    </form>
   
</body>
</html>
