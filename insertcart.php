<?php 
    include ('admin/config.php');


    if(isset($_POST['submit'])) {

        $name = isset($_POST['name'])?$_POST['name']:'';
        $name = isset($_POST['price'])?$_POST['price']:'';
        $name = isset($_POST['img'])?$_POST['img']:'';

        echo $name;


    }

?>