<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $tag = isset($_POST['tagname'])?$_POST['tagname']:'';
    
    if (sizeof($errors)==0) {

        // Insert the data into the Table        
                   $sql = "INSERT INTO tags (`name`) VALUES ('".$tag."')";

        if ($conn->query($sql) === true) {

                       echo "New record created successfully";
                       header("location:producttags.php");
                     
        } else {
                    echo $conn->error;
        }

           
        
        
      
    }
   
   

    
}
?>