<?php
if(isset($_POST["reg"])){
 
if(file_exists("../data.json")){
  $jsoninfo=json_decode(file_get_contents("../data.json"));
 foreach($jsoninfo as $userdata)
 {
   
  if($userdata->name==$_POST["name"])
   {
    echo $_POST["name"]."Already taken";
    return;
   }
   
   if($userdata->nid==$_POST["nid"])
   {
    echo $_POST["nid"]." Already registered by an other user";
    return;
   }
 }

$jsondata = array(
	      'name' => $_POST["name"],
	      'nid' => $_POST["nid"],
        'phone'=>$_POST["phone"],
	      'password'=> $_POST["pass"], 
        'area' => $_POST["address1"],
        'city' => $_POST["address2"],
        'district' => $_POST["address3"],
        'dob'=> $_POST["dob"], );

         $newdata=json_decode(file_get_contents("../data.json"));
         $newdata[]= $jsondata;

       $form= json_encode($newdata, JSON_PRETTY_PRINT);

       if(file_put_contents("../data.json",$form))
       {
        echo "Data saved successfully";
       }
       else 
       echo "No data saved";     
  }
}

?>
     

