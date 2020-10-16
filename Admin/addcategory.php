<?php
// Including the config File
include('config.php');

if (isset($_POST['submit'])) {

   
    $name = isset($_POST['categoryname'])?$_POST['categoryname']:'';
    
    if (sizeof($errors)==0) {

        // Insert the data into the Table        
                   $sql = "INSERT INTO categories (`name`) VALUES ('".$name."')";

        if ($conn->query($sql) === true) {

                       header("location:categories.php");
                     
        } else {
                echo $conn->error;
        }

           
        
        
      
    }
   
   
}
    
?>