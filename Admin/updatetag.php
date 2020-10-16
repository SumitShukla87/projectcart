<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
   
    $name = isset($_POST['tagname'])?$_POST['tagname']:'';
    
  

        // Insert the data into the Table        
        $sql = "UPDATE  tags SET `name`='".$name."'where `tag_id`='".$id."'";

    if ($conn->query($sql) === true) {

                    header("location:producttags.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>