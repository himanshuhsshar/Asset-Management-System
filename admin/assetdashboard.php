<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>
   <section class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->

	<div class="aside-panel"></div>				
	
		<div class="container-fluid">
			<div class="page-header">
				<h1>Dashboard</h1>
				<ul class="breadcrumbs">
					<li>Pages</li>
					<li>Dashboard</li>
				</ul>
			</div>

			<div class="page-content">
				<!-- page overlay when expanding-card is active -->
				<div class="form-overlay"></div>

				<section class="col-content col-left helpdesk-content">
					<div class="p6">
						<div class="toolbar">
							<a href="addasset.php" class="btn btn-sm orange waves-effect waves-light">Create Assets</a><!-- /.expanding-card -->
						    <a href="viewassets.php" class="btn btn-sm orange waves-effect waves-light">View Assets</a>
						</div>
					</div>


					<div class="stat-bar clearfix pb14">					
						<div class="col-sm-6 col-lg-6 mt10 stat-bar-item">
							<a href="viewassets.php"><h2 class="value text-theme">86</h2></a>
							<!--<a class="stat-link" href="viewassets.php" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>-->
							<p class="key">Assets</p>
						</div>
						<div class="col-sm-6 col-lg-6 mt10 stat-bar-item">
							<a href="viewservicerequestlist.php"><h2 class="value text-theme">48</h2></a>
							<!--<a class="stat-link" href="#" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>-->
							<p class="key">Service Request</p>
						</div>
						
						<div class="col-sm-2">
							
						</div>
					</div><!-- /.stat-bar -->

					<div class="divider"></div>					

					<div class="row">
						<div class="col-lg-6 pos-relative mt40">
							<div class="paper p20 pt10">
								<h4 class="text-title">Assets by Category</h4>
								<div class="divider mb30"></div>
								<div id="pieChart" class="section">
									<div class="paper p20 mt40">
										<div id="pie-chart"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 pos-relative mt40">
							<div class="paper p20 pt10">
								<h4 class="text-title">Service Request</h4>
								<div class="divider mb30"></div>
								<div class="paper p20 mt40">
										<div id="pie-chart1"></div>
								</div>
							</div>
						</div>
					</div>

					
				</section><!-- /.helpdesk-content -->

<!-- START RIGHT COLUMN -->
				<section class="col-aside col-right helpdesk-aside z-depth-1-half hidden-xs p12">
					<!-- Chart -->
					
					
					<div class="divider mt10 mb10"></div>	

					<ul class="nav nav-justified transparent">
					    <!-- <li class="active waves-effect waves-light"><a href="#activity" data-toggle="tab"><span class="text-uppercase">Activity</span></a></li> -->
					    <li class=" active waves-effect waves-light"><a href="#leaderboard" data-toggle="tab"><span class="text-uppercase">Provider</span></a></li>
					</ul>
					<div class="tab-content transparent">
						<!-- <div class="tab-pane fadein-right p0 pt10" id="activity">
							<ul class="timeline timeline-single small">
								<li class="tl-item">
									<div class="timestamp">10 min ago</div>
									<p>Kenneth Perez closed ticket <a href="#:;">#20165874</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">24 min ago</div>
									<p>Client created ticket <a href="#:;">#20166021</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">48 min ago</div>
									<p>Denise Williams assigned ticket <a href="#:;">#20165942</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">52 min ago</div>
									<p>Denise Williams closed ticket <a href="#:;">#20165870</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">1 hour ago</div>
									<p>Andrew Miller assigned ticket <a href="#:;">#20165868</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">1 hour ago</div>
									<p>Kenneth Perez assigned ticket <a href="#:;">#20165874</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">1 hour ago</div>
									<p>IT created ticket <a href="#:;">#20166020</a></p>
								</li>
								<li class="tl-item">
									<div class="timestamp">1 hour ago</div>
									<p>Nicole Smith assigned ticket <a href="#:;">#20165874</a></p>
								</li>
							</ul>
						</div> -->

						<div class="tab-pane active  fadein-right p0 pt10" id="leaderboard">
							<!-- <h4 class="text-center mt10 mb20 sub-text">Service Level By Agent</h4> -->
							<ul class="leaderboard list-group transparent no-border">
								<li class="list-group-item item-avatar">
									<a href="profile.php"><img src="demo/images/faces/face-12.jpg" alt="" class="avatar circle">
									<p class="item-title">Andrew Miller </p>
									<!-- <div class="progress mt8">					
										<div class="progress-bar" style="width: 92%"></div>
									</div> -->
								</li></a>				
								<li class="list-group-item item-avatar">
									<a href="profile.php"><img src="demo/images/faces/face-13.jpg" alt="" class="avatar circle">
									<p class="item-title">Denise Williams</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 82%"></div>
									</div> -->
								</li></a>
								<li class="list-group-item item-avatar">
									<a href="profile.php"><img src="demo/images/faces/face-10.jpg" alt="" class="avatar circle">
									<p class="item-title">Steve Johnson</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 79%"></div>
									</div> -->
								</li></a>
								<li class="list-group-item item-avatar">
									<a href="profile.php"><img src="demo/images/faces/face-21.jpg" alt="" class="avatar circle">
									<p class="item-title">Nicole Smith</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 76%"></div>
									</div> -->
								</li></a>
								
							</ul>
						</div>
					</div>	
				</section><!-- /.col-right -->

			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>