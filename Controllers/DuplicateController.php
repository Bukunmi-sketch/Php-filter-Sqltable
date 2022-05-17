<?php

// include your Model file directory here

// create instance of the model file directory
// $conn should be your returned database connection
 $deleteInstance= new Deleteduplicate($conn);

 $method=$_SERVER['REQUEST_METHOD'];
 switch($method){
     case "POST":
         $deleteInstance->deleteDulplicatevalues();
     break;

 }


?>