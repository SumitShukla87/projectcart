<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {
    echo "ok";
    $productname = isset($_POST['productname'])?$_POST['productname']:'';
    $productprice = isset($_POST['productprice'])?$_POST['productprice']:'';
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
    $folder = "image/".$filename; 
    move_uploaded_file($tempname, $folder);

    $category = isset($_POST['dropdown'])?$_POST['dropdown']:'';
    $tag = implode(' ', $_POST['tag']);
    $description = isset($_POST['description'])?$_POST['description']:'';
    $color = implode(' ', $_POST['color']);
 
    echo $tag;

        // Insert the data into the Table        
            $sql = "INSERT INTO products (`name`, `price`, `image`, `category` ,`tags` ,`color` , `desciption` ) VALUES ('".$productname."','".$productprice."','".$folder."' , '".$category."' , '".$tag."' , '".$color."' , '".$description."' )";

    if ($conn->query($sql) === true) {

                    echo '<script>alert("New record created successfully")</script>';
                    header("location:products.php");
                  

                        
    } else {
                echo $conn->error;
    }


    
       
        
  
    
}
?>