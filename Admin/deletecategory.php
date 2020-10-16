<?php 

    include('config.php');
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM categories where`category_id`='".$id."'";

if ($conn->query($sql) === true) {

        header("location:categories.php");
      
} else {
    echo $conn->error;
}
    



?>