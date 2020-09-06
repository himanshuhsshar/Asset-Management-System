<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>
		
	<section class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->

		<div class="aside-panel"></div>

		<div class="container-fluid">			

			<div class="page-header">
				<h1>Create Asset</h1>
				<ul class="breadcrumbs">
					<li>Forms</li>
					<li>Create Asset</li>
				</ul>
			</div>			

			<div class="page-content clearfix">
				<div class="row mt30">
					<!-- <div class="col-sm-10 col-sm-offset-1">
						<p class="text-body sub-text pl12 mb0">Form with all form components in it, as a start to build your forms with.</p>
						<p class="text-body sub-text pl12">
							In a basic form the label is placed above the input field. Wrap the element in a <code>.form-group</code> for proper spacing.
						</p>
					</div> -->
				</div><!-- /.row -->

				<div class="col-sm-10 col-sm-offset-1">
					
					<form class="paper p30 mt30">

						<!-- <div class="text-display-1">Basic form</div> -->

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Asset Type:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Asset Type">
						                <option value="arabic">Laptops</option>
						                <option value="chinese">Mobiles</option>
						                <option value="english">Furniture</option>
						                <option value="french">watches</option>
						               
						            </select>								        
							    </div><!-- /.form-group -->
							</div><!-- ./col- -->

							<div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Manufacture:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Select Manufacture">
						                <option value="arabic">Dell</option>
						                <option value="chinese">Hp</option>
						                <option value="english">Lenovo</option>
						                <option value="french">Asus</option>
						               
						            </select>								        
							    </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div><!-- /.row -->
					    <div class="row">
							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Manufacturer Contact Person</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Manufacturer Contact Person Phone Number</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div><!-- /.row -->
					    <div class="row">
							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Manufacturer Contact Person Email</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
						</div>
					    <div class="row">
							<div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Asset Name:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Select Asset Name">
						                <option value="arabic">Ideapad</option>
						                <option value="chinese">Thinkpad</option>
						                <option value="english">Pavelion</option>
						                <option value="french">Yoga</option>
						               
						            </select>								        
							    </div><!-- /.form-group -->
							</div><!-- ./col- -->

							<div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Asset current status:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Select Asset current status">
						                <option value="arabic">Runing</option>
						                <option value="chinese">Stopped</option>
						                <option value="english">Not Working</option>
						                <!-- <option value="french"></option> -->
						               
						            </select>								        
							    </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div><!-- /.row -->
						
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Asset Additional Description</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
			                  <!-- ./col- -->	
						<!--<div class="form-group input-field label-float">
							<textarea id="aboutMe" class="textarea-auto-resize" data-length="60"></textarea>
							<label for="aboutMe">Asset additional description</label>
							<div class="input-highlight"></div>
						</div>--><!-- /.form-group -->	
                              <div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Asset Location</label>
                                 <div class="input-highlight"></div>
                              </div>
                       <!-- <div class="form-group input-field label-float">
							<textarea id="aboutMe" class="textarea-auto-resize" data-length="60"></textarea>
							<label for="aboutMe">Asset location</label>
							<div class="input-highlight"></div>
						</div>-->
						<div class="row">
							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="date" placeholder="mm / dd / yyyy">
                                 <label for="date" class="fixed-label active">Date of last asset status change</label>
                                 <div class="input-highlight"></div>
                              </div>
							</div><!-- ./col- -->

							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="date" placeholder="mm / dd / yyyy">
                                 <label for="date" class="fixed-label active">Date of last service of asset</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div><!-- /.row -->

                         <div class="row">
							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="number">
                                 <label for="date" class="fixed-label active">Total hours runtime of asset</label>
                                 <div class="input-highlight"></div>
                              </div>
							</div><!-- ./col- -->

							<div class="col-sm-6">
								<div class="input-field label-float mb40">
                                 <!-- <i class="mdi mdi-calendar prefix"></i> -->
                                 <input id="date" type="text">
                                 <label for="date" class="fixed-label active">Additional remarks related to asset</label>
                                 <div class="input-highlight"></div>
                              </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div><!-- /.row -->
					    <div class="row">
							<div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Name of Last Service Provider:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Select Asset Name">
						                <option value="arabic">Pawan</option>
						                <option value="chinese">Utsav</option>
						                <option value="english">Himanshu</option>
						                <option value="french">Sibbu</option>
						               
						            </select>								        
							    </div><!-- /.form-group -->
							</div><!-- ./col- -->
						</div>
					    <div class="row">
							<div class="col-sm-6">
								<div class="file-field input-field">
                                       <div class="btn theme">
                                          <span>Upload</span>
                                          <input type="file" multiple>
                                       </div>
                                       <div class="file-path-wrapper">
                                          <input disabled class="file-path validate" type="text" placeholder="Document 1 related to asset:">
                                          <div class="input-highlight"></div>
                                       </div>
                                 </div>
							</div><!-- ./col- -->
                             
					         <!-- ./col- -->	
					    </div><!-- /.row -->
					    <br/>
					    <br/>
					    <div class="row">
							<div class="col-sm-6">
								<div class="file-field input-field">
                                       <div class="btn theme">
                                          <span>Upload</span>
                                          <input type="file" multiple>
                                       </div>
                                       <div class="file-path-wrapper">
                                          <input disabled class="file-path validate" type="text" placeholder="Document 2 related to asset:">
                                          <div class="input-highlight"></div>
                                       </div>
                                 </div>
							</div><!-- ./col- -->
						</div>
							<br/>
							<br/>
							<div class="row">
							<div class="col-sm-6">
								<div class="file-field input-field">
                                       <div class="btn theme">
                                          <span>Upload</span>
                                          <input type="file" multiple>
                                       </div>
                                       <div class="file-path-wrapper">
                                          <input disabled class="file-path validate" type="text" placeholder="Document 1 related to asset:">
                                          <div class="input-highlight"></div>
                                       </div>
                                 </div>
							</div><!-- ./col- -->
                             
					         <!-- ./col- -->	
					    </div><!-- /.row -->
						<br/>
					    <div class="row">
					    	 <div class="col-sm-6">
								<div class="form-group">
							    	<label class="block mb12">Associated Service  Provider:</label>					        
						            <select name="langauges" class="selectpicker" data-width="100%" title="Select Service Provider">
						                <option value="arabic">Service Provider 1</option>
						                <option value="chinese">Service Provider 2</option>
						                <option value="english">Service Provider 3</option>
						                <!-- <option value="french"></option> -->
						               
						            </select>								        
							    </div><!-- /.form-group -->			
							</div><!-- ./col- -->	
					    </div>
					    	

						<div class="form-group clearfix">
							<button class="btn theme-accent pull-right"><i class="mdi mdi-add right"></i>Add Asset</button>
						</div><!-- /.form-group -->

					</form>
					
				</div><!-- /.row -->				
			</div><!-- /.page-content -->
			
			<a id="back-to-top" href="#" class="btn-circle theme back-to-top">
				<i class="mdi mdi-chevron-up medium"></i>
			</a>				
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>