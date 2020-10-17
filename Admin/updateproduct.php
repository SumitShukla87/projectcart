<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
    echo $id;
    $productname = isset($_POST['productname'])?$_POST['productname']:'';
    $productprice = isset($_POST['productprice'])?$_POST['productprice']:'';
    $category = isset($_POST['dropdown'])?$_POST['dropdown']:'';
    $tag = implode(' ', $_POST['tag']);
    $description = isset($_POST['description'])?$_POST['description']:'';
    $color = implode(' ', $_POST['color']);
  

    if (isset($_FILES["uploadfile"]["name"])&& ($_FILES["uploadfile"]["name"]!="")) {

            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            $filename = $_FILES["uploadfile"]["name"];    
            $folder = "image/".$filename; 

            move_uploaded_file($tempname, "$folder");
    } else {
        echo"Not Updated";
    }
  
    
    

        // Update the data into the Table        
         $sql = "UPDATE  products SET `name`='".$productname."', `price`='".$productprice."', `image` = '".$folder."', `category` = '".$category."' ,`tags`='".$tag."',`desciption`='".$description."', `color`= '".$color."' where `id`='".$id."'";


    

    if ($conn->query($sql) === true) {

                    header("location:products.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>