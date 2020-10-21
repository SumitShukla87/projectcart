<?php 
include('admin/config.php');


if(isset($_POST['submit'])) {
    

    echo "ok";

    $name = isset($_POST['name'])?$_POST['name']:'';
    $price = isset($_POST['price'])?$_POST['price']:'';
    $image = isset($_POST['img'])?$_POST['img']:'';
    $quant = isset($_POST['quant'])?$_POST['quant']:'';

    echo $name;
      echo $price;
        echo $image;

        echo $quant;

      

        $sql = "INSERT INTO cartdata (`name`, `price`,`quantity`, `image`) VALUES ('".$name."','".$price."', '".$quant."','".$image."' )";

    if ($conn->query($sql) === true) {

                    echo '<script>alert("New record created successfully")</script>';
                    header("location:cart.php");
                  

                        
    } else {
                echo $conn->error;
    }


}

?>