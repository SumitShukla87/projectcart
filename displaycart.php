<?php $sql = "SELECT * from products";
    $result =$conn->query($sql);
    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                $image = $row['image'];
                $price = $row['price'] ;
                $name = $row['name'];

                $prod =
                
?>
