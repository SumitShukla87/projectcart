<?php include ('header.php');?>
<?php include ('sidebar.php');?>
		
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
						
						
						
						<table>
							
						<thead>
								<tr>

								   <th>CategoryID</th>
								   <th>Category Name</th>
								   <th>Action</th>
							
								</tr>
								
							</thead>
						 
							<tbody>
							<?php
								// Including the config File
								include('config.php');
								
										
												$sql = "SELECT * from categories";
												$result =$conn->query($sql);
								if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													echo"<tr>";
													echo'<td>'.$row['category_id'].'</td>';
													echo'<td>'.$row['name'].'</td>';
													echo'<td>
														<!-- Icons -->
														<a href="editcategory.php?id='.$row['category_id'].'" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
														<a href="deletecategory.php?id='.$row['category_id'].'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
														<a href="editcategory.php?id='.$row['category_id'].'" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta"/></a>
													</td>';
												echo"</tr>";
												} 
								} 
											
											 
												
								   
							 ?>

							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="addcategory.php" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Enter Category</label>
										<input class="text-input small-input" type="text" id="small-input" name="categoryname" /> <!-- <span class="input-notification success png_bg">Successful message</span> Classes for input-notification: success, error, information, attention -->
									
								</p>
								<p>
									<input class="button" type="submit" name="submit" value="Add Category" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
		
			<div class="clear"></div>
			
			
		
			<?php include ('footer.php'); ?>