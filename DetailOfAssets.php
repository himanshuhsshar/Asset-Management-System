<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>
   <section class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->

	<div class="aside-panel"></div>				
	
		<div class="container-fluid">
			<div class="page-header">
				<h1>Detail Of Assets</h1>
				<ul class="breadcrumbs">
					<li>Pages</li>
					<li>Detail Of Assets</li>
				</ul>
			</div>

			<div class="page-content">
				<!-- page overlay when expanding-card is active -->
				<div class="form-overlay"></div>
                 <div class=" p0">
				<!--<section class="col-aside col-right ticket-properties  pb20">
					<div class="tab-content transparent">
						<div class="tab-pane fadein-right active p0 pt20" id="ticketProperties">
							<h3 class="text-theme mt30 ml20 mb20">Ticket Properties</h3>

							<ul class="list-group item-small transparent no-border">
								<li class="list-group-item">
									<p class="item-text">Ticket ID</p>
									<span class="item-title">#20165871</span>
								</li>
								<li class="list-group-item">
									<p class="item-text">Due Date</p>
									<span class="item-title">4/12/2016, 6pm</span>
								</li>
								<li class="list-group-item">
									<p class="sub-text">Priority</p>
									<select class="selectpicker mb10" data-width="200px">
										<option value="normal" selected>Normal</option>
										<option value="high">High</option>
										<option value="low">Low</option>
									</select>
								</li>
								<li class="list-group-item">
									<p class="sub-text">Status</p>
									<select class="selectpicker mb10" data-width="200px">
										<option value="open">Open</option>
										<option value="assigned" selected>Assigned</option>
										<option value="closed">closed</option>
									</select>
								</li>
								<li class="list-group-item">
									<p class="sub-text">Assignee</p>
									<select class="selectpicker mb10" data-width="200px">
										<option value="">None</option>
										<option value="Steve Johnson">Steve Johnson</option>
										<option value="Denise Williams">Denise Williams</option>
										<option value="Kenneth Perez">Kenneth Perez</option>
										<option value="Andrew Miller" selected>Andrew Miller</option>
										<option value="Nicole Smith">Nicole Smith</option>
									</select>
								</li>
								<li class="list-group-item"></li>
								<li class="list-group-item">
									<button id="filterReset" class="btn theme btn-sm waves-effect waves-light pull-right mt20">save changes</button>
								</li>
							</ul>							
						</div>--><!-- /.tab-pane -->

						<!--<div class="tab-pane fadein-right p10 pt20" id="requestorInfo">
							<h3 class="text-theme mt30 ml20 mb20">Requestor Info</h3>
							<ul class="list-group item-small transparent no-border">
								<li class="list-group-item item-icon">
									<i class="icon mdi mdi-account"></i>
									<span class="item-title">Helen Adams</span>
								</li>
								<li class="divider"></li>
								<li class="list-group-item item-icon item-lines">
									<i class="icon mdi mdi-phone"></i>
									<span class="item-title">(305) 444 1234</span>
									<p class="item-text">Mobile</p>
								</li>
								<li class="list-group-item item-icon">
									<span class="item-title">(706) 888 1234</span>
									<p class="item-text">Work</p>
								</li>
								<li class="divider"></li>
								<li class="list-group-item item-icon item-lines">
									<i class="icon mdi mdi-email"></i>
									<span class="item-title">helen@example.com</span>
									<p class="item-text">Personal</p>
								</li>
								<li class="list-group-item item-icon">
									<span class="item-title">helen@work.com</span>
									<p class="item-text">Work</p>
								</li>
							</ul>
						</div>--><!-- /.tab-pane -->
					<!--</div>--><!-- /.tab-content -->
				<!--</section>-->

				<section class="col-content  ticket-content">
					<!--<div class="dark z-depth-2 p6 m20 mr10">
						<div class="toolbar">
							<div class="pull-right">
								<a href="#:;" class="btn btn-sm orange waves-effect waves-light">close ticket</a>
							</div>
							<h3 class="title">Ticket #20165871</h3>
						</div>
					</div>-->

					<!--<ul class="nav nav-tabs mt10 ml40 mb40 transparent">
					    <li class="active waves-effect waves-light"><a href="#ticketProperties" data-toggle="tab">Ticket Properties</a></li>
					    <li class="waves-effect waves-light"><a href="#requestorInfo" data-toggle="tab">Requestor Info</a></li>
					</ul>-->

					<div class="card">
								<div class="theme p20 pb10">
									<h4>Asset Type: Laptops</h4>						
									<p>Manufacture: Dell</p>
									<!--<p>Date created: april 12, 10AM</p>-->
								</div>
								<br/>
								<div class="col-md-12">
                        <div class="short-description card-block">
                           <p><span><b>Manufacturer Contact Person:</b></span><span class="pull-right">Pawan</span></p>
                           <p><span><b>Mamufacturer Contact Person Phone Number:</b></span><span class="pull-right">8787878789</span></p>
                           <p><span><b>Mamufacturer Contact Person Email:</b></span><span class="pull-right">abc@gmail.com</span></p>
                           <p><span><b>Asset Name:</b></span><span class="pull-right"> Ideapad</span></p>
                           <p><span><b>Asset Current Status:</b></span><span class="pull-right">Not Working</span></p>
                           <p><span><b>Date Of Last Asset Status Change:</b></span><span class="pull-right">13 july, 2019</span></p>
                            <p><span><b>Date Of Last Service Of Asset:</b></span><span class="pull-right">13 july, 2019</span></p>
                            <p><span><b>Total Hours Runtime Of Asset:</b></span><span class="pull-right">10</span></p>
                            <p><span><b>Addtional Remarks Related To Asset:</b></span><span class="pull-right">Good Work</span></p>
                            <p><span><b>Name Of Last Service Provider:</b></span><span class="pull-right">Pawan</span></p>
                            <p><span><b>Document 1 Related To Asset:</b></span><span class="pull-right">abc.pdf</span></p>
                            <p><span><b>Document 2 Related To Asset:</b></span><span class="pull-right">def.pdf</span></p>
                            <p><span><b>Document 3 Related To Asset:</b></span><span class="pull-right">xyz.pdf</span></p>
                            <p><span><b>Associarted Service Provider:</b></span><span class="pull-right">Service Provider 3</span></p>
						<!--<div class="col-md-6">
                            <div class="card mt20">
					             <div class="short-description">
                                 <p><span><b>Nationality:</b></span><span class="pull-right">Algerian</span></p>
                                 <p><span><b>Status:</b></span><span class=" pull-right">Single</span></p>
                                 <p><span><b>Gender:</b></span><span class="pull-right">Male</span></p>
                                 <p><span><b>Religion:</b></span><span class="pull-right"> Muslim</span></p>
                                 <p><span><b>Spoken Languages:</b></span><span class="pull-right">Hindi</span></p>
                                </div>
					      	</div>--><!-- /.card -->

						<!--</div>-->
						<!--<div class="col-md-6">
                        <div class="short-description card-block">-->
                           
						<br/>
						<br/>
						        <!--<div class="short-description">
                                 <p><span><b>Nationality:</b></span><span class="pull-right">Algerian</span></p>
                                 <p><span><b>Status:</b></span><span class=" pull-right">Single</span></p>
                                 <p><span><b>Gender:</b></span><span class="pull-right">Male</span></p>
                                 <p><span><b>Religion:</b></span><span class="pull-right"> Muslim</span></p>
                                 <p><span><b>Spoken Languages:</b></span><span class="pull-right">Hindi</span></p>
                                </div>-->
				    </div>

					<div class="paper summernote-wrapper mt40 mr10">
						<div id="summernote"></div>		
					</div>
					<!--<div class="clearfix mt20">
						<button class="btn theme waves-effect waves-light pull-right mr10">add note</button>
					</div>-->
				</section>				
			</div>
			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>