<?php

    if(isset($_POST["phone"])||(isset($_POST["pass"])))
      {
        $jsondata=json_decode(file_get_contents("../data.json"));

        foreach($jsondata as $data)
        {
            if($data->phonenumber==$_POST["phone"] && $data->password == $_POST["pass"] )
            { 
              echo "Login Done! <br>";
              return;
            }

            }
          echo " invalid Phone number OR password";
        }
      
      
?>
