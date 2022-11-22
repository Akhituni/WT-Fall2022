<?php
class reg{
 
function openCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecash";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function reginsert($conn, $tablename,$name,$blnumber,$email,$road,$city,$district,$businessname,$mtrange,$banumber,$nidnumber,$phone,$password,$dateofbirth,$profile)
 {
    $sql= "INSERT INTO $tablename(name,blnumber,email,road,city,district,businessname,mtrange,banumber,nidnumber,phone,password,dateofbirth,profile) VALUES 
          ('$name','$blnumber','$email','$road','$city','$district','$businessname','$mtrange','$banumber','$nidnumber','$phone','$password','$dateofbirth','$profile')";
if($conn->query($sql)==true)
{
    return true;
    }
    else{
     return false;
    }    
    }
    function checkuser($conn,$table,$phone,$password)
    {
        $result=$conn->query("SELECT * FROM ". $table." WHERE phone='".$phone."'AND password='".$password."'");
        return $result;
    }
    function CloseCon($conn)
    {
    $conn -> close();
    }
}
?>