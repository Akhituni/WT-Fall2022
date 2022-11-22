
<?php
include ("../model/mydb.php");
$validphone="";
  $validemail="";

if(isset($_POST["submit"])){
  if(empty($_FILES["files"]["name"])){
    echo " No File selected";
    return;
  }
  else{
    if(move_uploaded_file($_FILES["files"]["tmp_name"], "../files/". $_POST["name"].".jpg"))
    {
      $filename="../files/".$_POST["name"].".jpg";
    }
    else
    {
      echo " sorry ,there was an error uploading file";
      return;
    }
  }
 
// if(file_exists("../data.json")){
//   $jsoninfo=json_decode(file_get_contents("../data.json"));
//  foreach($jsoninfo as $userdata)
//  {
   
  
//   if($userdata->name==$_POST["name"])
//    {
//     echo $_POST["name"]."Already taken";
//     return;
//    }
   
//    if($userdata->nid==$_POST["nid"])
//    {
//     echo $_POST["nid"]."Already registered by an other user";
//     return;
//    }
  
   
//      }
    
// $phone=$_POST["phone"];
//  if(!preg_match("/^([0-9]{11})$/",$phone))
//  {
//  $validphone="phone number Not correct";
//  return;
//  }
//  $email=$_POST["email"];
//  if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/",$email))
// {
//     $validemail="you must enter valid email";
//     return;
// }

 $connection= new reg();
 $conobj=$connection->openCon();
$query = $connection->reginsert($conobj,"marchent",
	    $_POST["name"],
      $_POST["blnumber"], 
      $_POST["email"],
      $_POST["add1"], 
      $_POST["add2"],
      $_POST["add3"], 
      $_POST["bn"],
      $_POST["banumber"],
      $_POST["tr1"],
	    $_POST["nid"],
      $_POST["phone"],
	    $_POST["pass"], 
      $_POST["dob"],
       $filename );
      

       if($query==true)
       {
        echo "Data saved successfully";
       }
       else {
       echo "No data saved";     
       }
       $connection->CloseCon($conobj);          
      }


?>
     

