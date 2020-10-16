<?php
// Including the config File
include('config.php');

if (isset($_POST['submit'])) {

   
    $name = isset($_POST['color'])?$_POST['color']:'';
    
    if (sizeof($errors)==0) {

        // Insert the data into the Table        
                   $sql = "INSERT INTO color (`color_name`) VALUES ('".$name."')";

        if ($conn->query($sql) === true) {

                       header("location:productcolor.php");
                     
        } else {
                echo $conn->error;
        }

           
        
        
      
    }
   
   
}
    
?>