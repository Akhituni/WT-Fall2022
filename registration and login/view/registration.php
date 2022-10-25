
<!DOCTYPE html>
<head>
</head>
<body>
    <h1>Registration form</h1>
    <form action="../processor/registrationproc.php" method="POST">
    <table>
    <tr>
       <td>
        Name:
      </td> 
    <td>
        <input type="text" name="name" required placeholder="Kamal Ahmed"><br>
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
        <td>Agent Phone Number: </td>
        <td>
            <input type="Text" name="phone" required maxlength="13" placeholder="01612601877"><br>
        </td>
    </tr>
    <tr>
        <td>Password:</td>   
        <td>
            <input type="password" name="pass" required placeholder="*****" maxlength="5"><br>
       </td>
    </tr>
    <tr>
       <td>
        Adress:
      </td> 
    <td>
        <input type="text" name="address1" required placeholder="Road/area">
        <input type="text" name="address2" required placeholder="City">
        <input type="text" name="address3" required placeholder="District"><br>
    </td>
</tr>

        <td>Date of birth: </td>
         <td>
            <input type="date" name="dob" required ><br>
        </td>

    </tr>



<tr>
    <td>
        <input type="submit" name="reg">
        <input type="reset">
    </td>
</tr>

    </table>
    </form>
   
</body>
</html>
