<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
   
    $name = isset($_POST['categoryname'])?$_POST['categoryname']:'';
    
  

        // Insert the data into the Table        
        $sql = "UPDATE  categories SET `name`='".$name."'where `category_id`='".$id."'";

    if ($conn->query($sql) === true) {

                    header("location:categories.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>