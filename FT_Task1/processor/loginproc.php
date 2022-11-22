<?php
include("../model/mydb.php");
 session_start();
    if(isset($_POST["phone"])||(isset($_POST["pass"])))
      {
        $phone=$_POST["phone"];
        $password=$_POST["pass"];
          
        $loginconn= new reg();
        $conobj=$loginconn-> openCon();
        $loginquery = $loginconn -> checkuser($conobj,"marchent",$phone,$password);
       
        if($loginquery->num_rows>0)
        {
              $_SESSION["phone"]=$_POST['phone'];
              $_SESSION["pass"]=$_POST['pass'];//from submit
              $_SESSION["name"]=$data->name;//from json
              
              header("location:profile.php");
              
            }
            else{
              echo "Invalid Phone number and password";
            }
            }
            $loginconn-> CloseCon($conobj);  
      
      
?>
