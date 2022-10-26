<?php
 session_start();
    if(isset($_POST["phone"])||(isset($_POST["pass"])))
      {
        $jsondata=json_decode(file_get_contents("../data.json"));

        foreach($jsondata as $data)
        {
            if($data->phone==$_POST["phone"] && $data->password == $_POST["pass"])
            { 
              $_SESSION["phone"]=$_POST['phone'];
              $_SESSION["pass"]=$_POST['pass'];//from submit
              $_SESSION["name"]=$data->name;//from json
              
              header("location:profile.php");
              
            }
            }
           }
      
      
?>
