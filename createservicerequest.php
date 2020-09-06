<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>

	<section id="tickets"  class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->		

		<div class="aside-panel"></div>		
	
		<div class="container-fluid">			

			<div class="page-header">
				<h1>Create Service Request</h1>
				<ul class="breadcrumbs">
					<li>Pages</li>
					<li>Create Service Request</li>
				</ul>
			</div>			

			<div class="page-content">


				<section class="col-content  ticket-content pt10 pb20">
					<!-- page overlay when expanding-card is active -->
					<div class="form-overlay"></div>

					<div class="toolbar mb20">

						<!-- /.expanding-card -->

						<div class="pull-right mr12">
							
							<div class="search-wrapper pull-right">
								<i class="icon action mdi toolbar-search visible-xs-inline-block"></i>

								<form class="search-form visible-xs-inline-block">
									<div class="input-group paper">
										<span class="input-group-btn no-border">
											<i class="icon action mdi toolbar-back "></i>
										</span>
										<div class="input-field">
											<input type="search" class="search no-border" placeholder="Search Tickets">
										</div><!-- /.inpt-field -->
										<span class="input-group-addon no-border">
											<i class="icon mdi mdi-magnify"></i>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
					<form class="paper p30 mt30">

											<!-- <div class="text-display-1">Basic form</div> -->

											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
												    	<label class="block mb12">Issue Type:</label>					        
											            <select name="langauges" class="selectpicker" data-width="100%" title="Asset Type">
											                <option value="arabic">Not working Well</option>
											                <option value="chinese">Hanging Problem</option>
											                <option value="english">Installation</option>
											                <!-- <option value="french"></option> -->
											               
											            </select>								        
												    </div><!-- /.form-group -->
												</div><!-- ./col- -->

												<div class="col-sm-6">
													<div class="input-field label-float mb40">
					                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
					                                 <input id="date" type="date" placeholder="mm / dd / yyyy">
					                                 <label for="date" class="fixed-label active">Date of original Identification</label>
					                                 <div class="input-highlight"></div>
					                              </div><!-- /.form-group -->			
												</div><!-- ./col- -->	
										    </div><!-- /.row -->
										    <div class="form-group input-field label-float">
												<textarea id="aboutMe" class="textarea-auto-resize" data-length="60"></textarea>
												<label for="aboutMe">Issue Comment</label>
												<div class="input-highlight"></div>
											</div>
										    <div class="row">
										    	<div class="form-group">			
											    	<label class="checkbox-filled" for="terms">
											    		<input type="checkbox" class="filled opencheck" value="gulf_country" id="terms">
											    		<i class="highlight"></i>
											    		Additional issue
										    		</label>
											    </div>
											    <div class="box gulf_country">
											    	<div class="row">
												<div class="col-sm-6">
											<div class="form-group">
												    	<label class="block mb12">Issue Type:</label>					        
											            <select name="langauges" class="selectpicker" data-width="100%" title="Asset Type">
											                <option value="arabic">Not working Well</option>
											                <option value="chinese">Hanging Problem</option>
											                <option value="english">Installation</option>
											                <!-- <option value="french"></option> -->
											               
											            </select>								        
												    </div><!-- /.form-group -->
												</div><!-- ./col- -->

												<div class="col-sm-6">
													<div class="input-field label-float mb40">
					                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
					                                 <input id="date" type="date" placeholder="mm / dd / yyyy">
					                                 <label for="date" class="fixed-label active">Date of original Identification</label>
					                                 <div class="input-highlight"></div>
					                              </div><!-- /.form-group -->			
												</div><!-- ./col- -->	
										    </div><!-- /.row -->
										    <div class="form-group input-field label-float">
												<textarea id="aboutMe" class="textarea-auto-resize" data-length="60"></textarea>
												<label for="aboutMe">Issue comment</label>
												<div class="input-highlight"></div>
											</div>

											    </div>
										    </div>	
										    <div class="row">
												<div class="col-sm-6">
													<div class="form-group">
												    	<label class="block mb12">Type of Service</label>					        
											            <select name="langauges" class="selectpicker" data-width="100%" title="Select Asset Name">
											                <option value="arabic">free</option>
											                <option value="chinese">Paid</option>
											                <!-- <option value="english">Account</option>
											                <option value="french">System</option> -->
											               
											            </select>								        
												    </div><!-- /.form-group -->
												</div><!-- ./col- -->

												<div class="col-sm-6">
													<div class="form-group">
												    	<label class="block mb12">Prefered Fulfillment Timeframe</label>					        
											            <select name="langauges" class="selectpicker" data-width="100%" title="Select Asset current status">
											                <option value="arabic">2 Hour</option>
											                <option value="chinese">3 Hour</option>
											                <option value="english">4 Hour</option>
											                <option value="french"> 6 Hour</option>
											               
											            </select>								        
												    </div><!-- /.form-group -->			
												</div><!-- ./col- -->	
										    </div>
										    <div class="row">
												<div class="col-sm-6">
													<div class="form-group">
												    	<label class="block mb12">Deliverable</label>					        
											           <label for="filled-1" class="checkbox-filled mr10">
						                                 <input type="checkbox" class="filled" id="filled-1" checked="checked">
						                                 <i class="highlight"></i>
						                                 discussion
						                               </label>	
						                               <label for="filled-2" class="checkbox-filled mr10">
						                                 <input type="checkbox" class="filled" id="filled-2" checked="checked">
						                                 <i class="highlight"></i>
						                                proposal
						                               </label>	
						                               <label for="filled-3" class="checkbox-filled mr10">
						                                 <input type="checkbox" class="filled" id="filled-3" checked="checked">
						                                 <i class="highlight"></i>
						                                 immediate solution
						                               </label>							        
												    </div><!-- /.form-group -->
												</div><!-- ./col- -->

												<div class="col-sm-6">
													<div class="form-group">
												    	<label class="block mb12">Permission</label>					        
											            <label for="filled-4" class="checkbox-filled mr10">
						                                 <input type="checkbox" class="filled" id="filled-4" >
						                                 <i class="highlight"></i>
						                                 Give service provider access to all data of asset
						                               </label>									        
												    </div><!-- /.form-group -->			
												</div><!-- ./col- -->	
										    </div>
										    <div class="row">
														<div class="col-sm-6">
															<div class="form-group">
														    	<label class="block mb12">Service Provider:</label>					        
													            <select name="langauges" class="selectpicker" data-width="100%" title="Service Provider">
													                <option value="arabic">Manish seles</option>
													                <option value="chinese">Bhagvati seles</option>
													                <option value="english">Lg shop</option>
													                <!-- <option value="french"></option> -->
													               
													            </select>								        
														    </div><!-- /.form-group -->
														</div><!-- ./col- -->

														<div class="col-sm-6">
															<div class="input-field label-float mb40">
							                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
							                                 <input id="date" type="date" placeholder="mm / dd / yyyy">
							                                 <label for="date" class="fixed-label active">Exact date of Fulfillment</label>
							                                 <div class="input-highlight"></div>
							                              </div><!-- /.form-group -->			
														</div><!-- ./col- -->	
												    </div>

												    <div class="row">
														<div class="col-sm-6">
															<div class="form-group">
														    	 <label for="filled-5" class="checkbox-filled mr10">
									                                 <input type="checkbox" class="filled" id="filled-5" >
									                                 <i class="highlight"></i>
									                                 New service provider, not yet registered
									                               </label>									        
														    </div><!-- /.form-group -->
														</div><!-- ./col- -->

														<div class="col-sm-6">
															<div class="form-group">
														    	 <label for="filled-5" class="checkbox-filled mr10">
									                                 <input type="checkbox" class="filled" id="filled-5" >
									                                 <i class="highlight"></i>
									                                 Share contact details
									                               </label>									        
														    </div><!-- /.form-group -->			
														</div><!-- ./col- -->	
												    </div>

												    <div class="row">
														<div class="col-sm-6">
															<div class="input-field label-float mb40">
							                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
							                                 <input id="date" type="text">
							                                 <label for="date" class="fixed-label active">Additional Comments</label>
							                                 <div class="input-highlight"></div>
							                              </div><!-- /.form-group -->
														</div><!-- ./col- -->

														<div class="col-sm-6">
															<div class="input-field label-float mb40">
							                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
							                                 <input id="date" type="text">
							                                 <label for="date" class="fixed-label active">Provide other Contact Details</label>
							                                 <div class="input-highlight"></div>
							                              </div><!-- /.form-group -->			
														</div><!-- ./col- -->	
												    </div>
												    
                                                    <div class="row">
														<div class="col-sm-6">
															<div class="file-field input-field mt-5">
						                                       <div class="btn theme">
						                                          <span>Upload</span>
						                                          <input type="file" multiple>
						                                       </div>
						                                       <div class="file-path-wrapper">
						                                          <input class="file-path validate" type="text" placeholder="Document 1 related to asset:">
						                                          <div class="input-highlight"></div>
						                                       </div>
						                                 </div><!-- /.form-group -->			
														</div><!-- ./col- -->	
												    </div>

												    <div class="row">
												    	<div class="form-group">
												    	<!-- <label class="block mb12">Permission</label>					         -->
											            <label for="filled-6" class="checkbox-filled mr10">
						                                 <input type="checkbox" class="filled" id="filled-6" >
						                                 <i class="highlight"></i>
						                                Request service report after service fulfillment
						                               </label>									        
												    </div>
												    </div>
												    <hr/>
												    <h1>Technical Contact</h1>
												    <div class="row">
														<div class="col-sm-6">
															<div class="input-field label-float mb40">
							                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
							                                 <input id="date" type="text">
							                                 <label for="date" class="fixed-label active">Asset Owner Technical Contact Person</label>
							                                 <div class="input-highlight"></div>
							                              </div><!-- /.form-group -->
														</div><!-- ./col- -->

														<div class="col-sm-6">
															<div class="input-field label-float mb40">
							                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
							                                 <input id="date" type="text">
							                                 <label for="date" class="fixed-label active">Asset Owner Technical Contact Person Phone Number</label>
							                                 <div class="input-highlight"></div>
							                              </div><!-- /.form-group -->			
														</div><!-- ./col- -->	
												    </div>
												    <div class="row">
														<div class="col-sm-6">
															<div class="input-field input-group form-group">
								                                 <span class="input-group-btn">
								                                    <input id="exampleCkb" type="checkbox" >
								                                    <label for="exampleCkb"></label>
								                                 </span>
								                                 <input type="text" placeholder="Asset Owner Technical Contact Person  E-Mail">
								                                 <div class="input-highlight"></div>
								                               </div><!-- /.form-group -->
														</div><!-- ./col- -->

											<div class="form-group clearfix">
												<button class="btn btn-sm theme waves-effect waves-light pull-right"><i class="mdi mdi-add right"></i>Send Request</button>
											</div><!-- /.form-group -->

										</form>
					
				</section>				
			</div><!-- /.page-content -->

				
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->

		<?php include('include/footer.php') ?>