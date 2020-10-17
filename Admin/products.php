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
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<!-- <div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div> -->
						
						<table>
							
							<thead>
								<tr>
								   <th>Product Id</th>
								   <th>Product Name</th>
								   <th>Product Price</th>
								   <th>Product Image</th>
								   <th>Product Category</th>
								   <th>Tag</th>
								   <th>Product Color</th>
								   <th>Product Description</th>
								   <th>Action</th>

								</tr>
								
							</thead>
						 
							<tbody>
							<?php
								// Including the config File
								include('config.php');
								
										
												$sql = "SELECT * from products";
												$result =$conn->query($sql);
												if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
																	echo"<tr>";
																	echo'<td>'.$row['id'].'</td>';
																	echo'<td>'.$row['name'].'</td>';
																	echo'<td>'.$row['price'].'</td>';
																	echo'<td><img src='.$row['image'].' height="100" width="100"></td>';
																	echo'<td>'.$row['category'].'</td>';
																	echo'<td>'.$row['tags'].'</td>';
																	echo'<td><input type="color" value="'.$row['color'].'" disabled></td>';
																	echo'<td>'.$row['desciption'].'</td>';
																	echo'<td>
																		<!-- Icons -->
																		<a href="editproduct.php?id='.$row['id'].'" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
																		<a href="deleteproduct.php?id='.$row['id'].'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
																		<a href="editproduct.php?id='.$row['id'].'" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta"/></a>
																	</td>';
																echo"</tr>";
																} 
												} 
											
											 
												
								   
							 ?>

								</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="addproduct.php" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Name</label>
									<input class="text-input medium-input" type="text" id="medium-input" name="productname" required/> <!-- <span class="input-notification error png_bg">Error message</span>-->
								</p>
								<p>
									<label>Price</label>
										<input class="text-input small-input" type="text" id="small-input" name="productprice" required/> <!-- <span class="input-notification success png_bg">Successful message</span>--> <!-- Classes for input-notification: success, error, information, attention -->

								</p>
								
								
								
								<p>
									<label>Image</label>
									<input type="file" name="uploadfile" required value=""/>
								</p>
								<p>
								<label>Category</label>
								<?php 
								
								$sql = "SELECT * from categories";
								$result =$conn->query($sql);
								$row_count = $result->num_rows;
								?>
								<select name="dropdown" class="small-input">
								<?php
								for ($i=1;$i<=$row_count;$i++) {

									   $row = $result->fetch_assoc();
								    ?>
									<option value="<?php echo $row["category_id"] ?>"><?php echo $row["name"] ?></option>
									    <?php	   
								}
								?>
								</select> 
								</p>
								
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
									<label>Choose Color</label>
								<?php 
								
								$sql = "SELECT * from color";
								$result =$conn->query($sql);
								$row_count = $result->num_rows;
								
								for ($i=1;$i<=$row_count;$i++) {

									   $row = $result->fetch_assoc();
								    ?>
                                    <input type="checkbox" name="color[]" value="<?php echo $row["id"] ?>"><input type="color" value="<?php echo $row["color_name"] ?>"><br>
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
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
		
			<div class="clear"></div>
			
			
			
			<?php include ('footer.php'); ?>