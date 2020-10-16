<?php include ('header.php');?>
<?php include ('sidebar.php');?>
<?php include ('config.php');?>



		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Enter Tag</h3>
					
					<div class="clear"></div>
					
				</div> 
				
				

					<div class="tab-content" id="tab2">
					
                    <form action="#" method="post" enctype="multipart/form-data">
							
                    <?php 

                            include('config.php');
                            $id = $_REQUEST['id'];

                            $sql = "SELECT * FROM products WHERE `id`='".$id."'";
                            $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                echo"<p>";
									echo"<label>Name</label>";
									echo'<input class="text-input medium-input" type="text" id="medium-input"  name="productname" value="'.$row['name'].'" />';
                                echo"</p>";
                                
                                echo"<p>";
									echo"<label>Price</label>";
									echo'<input class="text-input medium-input" type="text" id="medium-input" name="productprice" value="'.$row['price'].'" />';
                                echo"</p>";
                                
                                echo"<p>";
                                echo'<label>Image</label>';
                                echo'<img src='.$row['image'].' height="100" width="100">';
                                echo'<input type="file" name="uploadfile" required value=""/>';
								echo"</p>";
							
                                
                                echo"<p>";
								echo"<label>Category</label>";
								echo'<select name="dropdown" class="small-input">';
								
								
																												if ($row["category_id"]=='12') {
																														echo"selected";
																												}
								
																												if ($row["category"]=='13') {
																													echo"selected";
																												}
																												if ($row["category"]=='14') {
																													echo"selected";
																												}
																												if ($row["category"]=='15') {
																													echo"selected";
																												}
																												if ($row["category"]=='15') {
																													echo"selected";
																												}
								echo'</select>';
							
								echo'<p>';
								echo'<label>Tags</label>';
								$a = $row['tag'];
								$tag = explode(",", $a)
								if(in_array())
                        

                        }
                    } else {
                        echo "0 results";
                    }

                            ?>
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
							
								<!-- <p>
								<label>Category</label>
								<?php 
								
							//	$sql = "SELECT * from categories";
								//$result =$conn->query($sql);
								//$row_count = $result->num_rows;
								//?>
								<select name="dropdown" class="small-input">
								//<?php
								//for ($i=1;$i<=$row_count;$i++) {

								//	   $row = $result->fetch_assoc();
								 //   ?>
									//<option value="<?php echo $row["category_id"] ?>"><?php echo $row["name"] ?></option>
									 //   <?php	   
								//}
								//?>
								</select> 
								</p> -->
								
								<p>
									<label>Tags</label>
								<?php 
								
								$sql = "SELECT * from tags";
								$result =$conn->query($sql);
								$row_count = $result->num_rows;
								?>

								<?php
								for ($i=1;$i<=$row_count;$i++) {

									   $row = $result->fetch_assoc();
								    ?>
                                    <input type="checkbox" name="tag[]" value="<?php echo $row["tag_id"] ?>"><?php echo $row["name"] ?><br>
									    <?php	   
								}
								?>
								</p>
								
								
								
								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" name="submit" value="Add Product" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
                        <?php include ('footer.php'); ?>
						
					</div> <!-- End #tab2 -->        
					
			]
				
			</div> <!-- End .content-box -->
			
			
			
		
			
			
			
			
			
			