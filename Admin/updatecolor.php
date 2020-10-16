<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
   
    $name = isset($_POST['color'])?$_POST['color']:'';
    echo $name;
    
  

        //Insert the data into the Table        
        $sql = "UPDATE  color SET `color_name`='".$name."' where `id`='".$id."'";

    if ($conn->query($sql) === true) {

                   header("location:productcolor.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>