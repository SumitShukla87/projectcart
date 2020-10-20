<?php include('header.php')?>
<?php include('admin/config.php')?>
  <!-- / header section -->
  <?php 
  
    $id = $_REQUEST['id'];
  ?>
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <?php include ('navbar.php'); ?>
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 
  <?php $sql = "SELECT * from products WHERE `id`= $id" ;
												$result =$conn->query($sql);
										if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {

                                                         $image = $row['image'];
                                                          $price = $row['price'] ;
                                                         $name = $row['name'];
                                                          $desc= $row['desciption'];
                                                          
      ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
     
        <h2><?php echo $name?></h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="#">Product</a></li>
          <li class="active"><?php echo $name?></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="<?php echo $image?>" class="simpleLens-big-image"></a></div>
                      </div>
                
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo $name?></h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">$<?php echo $price?></span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p> <?php echo $desc?></p> 
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                      <a href="#">S</a>
                      <a href="#">M</a>
                      <a href="#">L</a>
                      <a href="#">XL</a>
                    </div>
                    <h4>Color</h4>
                    <div class="aa-color-tag">
                      <a href="#" class="aa-color-green"></a>
                      <a href="#" class="aa-color-yellow"></a>
                      <a href="#" class="aa-color-pink"></a>                      
                      <a href="#" class="aa-color-black"></a>
                      <a href="#" class="aa-color-white"></a>                      
                    </div>
                    <div class="aa-prod-quantity">
                    <form action="insertcart.php" method="POST">
                    <input type="hidden" name="name" value="<?php $name ?>">
                    <input type="hidden" name="price" value="<?php $price ?>">
                    <input type="hidden" name="img" value="<?php $image ?>">

                        <select id="" name="quant">
                          <option selected="1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                      
                      <p class="aa-prod-category">
                        Category: <a href="#">Polo T-Shirt</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <input type="submit" class="aa-add-to-cart-btn" href="" name="submit" valur="Add To Cart">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             
          </div>
        </div>
      </div>
    </div>
  </section>
                                <?php }
                                } ?>
  <!-- / product category -->


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

   <?php include ('footer.php') ?>