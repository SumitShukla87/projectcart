<?php include('header.php')?>
<?php include('admin/config.php')?>

  <!-- / header section -->
  
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <?php include('navbar.php');
          ?>
        </div>
      </div> 
      </div>
    </div> 
  </section>
  <!-- / menu -->   
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
               <?php $sql = "SELECT * from cartdata";
                  $result =$conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                        $name = $row['name'];
                        $image = $row['image'];                      
                        $price = $row['price'] ;
                        
                        $quant= $row['quantity'];
                        $product = array($name, $image , $price , $quant);
                        $_SESSION['name'] = $product;
                    }
                } ?>


                  <table class="table">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    
                    <?php 
                    $bill = 0;
                    $p = 0;
                    $q = 0;
                    $total = 0;
                    echo '<tbody>';
                    foreach ($_SESSION as $prod) {
                        echo"<tr>";
                            echo'<td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>';
                        foreach ($prod as $key=> $value) {
                            if ($key==0) {

                                      echo"<input type='hidden' value='".$value."' name='name$key'>";
                                      echo"<td>".$value."</td>";
                            } else if ($key==1) {

                                    echo"<input type='hidden' value='".$value."' name='name$key'>";
                                    echo"<td><img src= admin/".$value." height='100px' width='100px'></td>";
                                  
        
                            } else if ($key==2) {

                                    echo"<input type='hidden' value='".$value."' name='name$key'>";
                                      echo"<td>$.".$value."</td>";
                                      $p = $value;
                            } else if ($key==3) {
                                    echo"<td><input type='text' value='".$value."' name='name$key'></td>";
                                      echo"<input type='hidden' value='".$value."' name='name$key'>";
                                      $q = $value;
                                    
          
                            }
                        }
                        $bill = ($p*$q);
                                echo"<td>".($bill)."</td>";
                        
                    }  
                    echo"</tr>";



                  
                    echo'</tbody>';
                  
                    ?>
                  </table>  
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>$<?php echo $bill; ?> </td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>$<?php echo $bill; ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <?php include('footer.php'); ?>