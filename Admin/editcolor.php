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
					
					<h3>Enter Color</h3>
					
					<div class="clear"></div>
					
				</div> 
				
				

					<div class="tab-content" id="tab2">
					
						<form action="updatecolor.php" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						 <?php 

								
								$id = $_REQUEST['id'];
								$sql = "SELECT * FROM color where`id`='".$id."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								// output data of each row
												while ($row = $result->fetch_assoc()) {
														echo"<p>";
															echo"<label>Color</label>";
															echo'<td><input type="color"  name="color" value="'.$row['color_name'].'" ></td>';
													        echo'<input type="hidden"   name="id" value="'.$row['id'].'" />';
													
															echo"</p>";
													
							
														

												}
								}	
								?>
								<p><input class="button" type="submit" name="submit" value="Update Color" />;
								</p>;
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
                        <?php include ('footer.php'); ?>
						
					</div> <!-- End #tab2 -->        
					
			
			</div> <!-- End .content-box -->