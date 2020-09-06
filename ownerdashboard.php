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
							<a href="addasset.php" class="btn btn-sm theme waves-effect waves-light">Create Assets</a><!-- /.expanding-card -->
						    <a href="viewassets.php" class="btn btn-sm theme waves-effect waves-light">View Assets</a>
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
						

						<div class="tab-pane active  fadein-right p0 pt10" id="leaderboard">
							<!-- <h4 class="text-center mt10 mb20 sub-text">Service Level By Agent</h4> -->
							<ul class="leaderboard list-group transparent no-border">
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Andrew Miller </p>
									<!-- <div class="progress mt8">					
										<div class="progress-bar" style="width: 92%"></div>
									</div> -->
									</a>
								</li>				
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Denise Williams</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 82%"></div>
									</div> -->
								</a>
								</li>
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Steve Johnson</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 79%"></div>
									</div> -->
								</a>
								</li>
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Nicole Smith</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 76%"></div>
									</div> -->
									</a>
								</li>
                                <li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Andrew Miller </p>
									<!-- <div class="progress mt8">					
										<div class="progress-bar" style="width: 92%"></div>
									</div> -->
									</a>
								</li>				
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Denise Williams</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 82%"></div>
									</div> -->
								</a>
								</li>
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Steve Johnson</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 79%"></div>
									</div> -->
								</a>
								</li>
								<li class="list-group-item item-avatar">
									<a href="serviceproviderprofile.php">
									<p class="item-title">Nicole Smith</p>
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 76%"></div>
									</div> -->
									</a>
								</li>
								
							</ul>
							<a href="serviceProvider.php" class="btn btn-sm theme waves-effect waves-light">View All</a>
						</div>
					</div>	
				</section><!-- /.col-right -->
				
			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>