<?php 

    include('config.php');
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM color where`id`='".$id."'";

if ($conn->query($sql) === true) {

        header("location:productcolor.php");
      
} else {
    echo $conn->error;
}
    



?>