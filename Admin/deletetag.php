<?php 

    include('config.php');
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM tags where`tag_id`='".$id."'";

if ($conn->query($sql) === true) {

        header("location:producttags.php");
      
} else {
    echo $conn->error;
}
    



?>