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

				<section class="col-content helpdesk-content">
					


					<div class="stat-bar clearfix pb14">					
						<div class="col-sm-6 col-lg-3 mt10 stat-bar-item">
							<a href="viewassetowner.php"><h2 class="value text-theme">86</h2></a>
							<!--<a class="stat-link" href="#:;" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>-->
							<p class="key">Assets Onwer</p>
						</div>
						<div class="col-sm-6 col-lg-3 mt10 stat-bar-item">
							<h2 class="value text-theme">48</h2>
							<a class="stat-link" href="#:;" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>
							<p class="key">Service Provider</p>
						</div>
						<div class="col-sm-6 col-lg-3 mt10 stat-bar-item">
							<h2 class="value text-theme">86</h2>
							<a class="stat-link" href="#:;" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>
							<p class="key">Assets</p>
						</div>
						<div class="col-sm-6 col-lg-3 mt10 stat-bar-item">
							<h2 class="value text-theme">48</h2>
							<a class="stat-link" href="#:;" data-toggle="tooltip" title="See Tickets" data-placement="bottom"><i class="mdi mdi-export mute-text"></i></a>
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
								<h4 class="text-title">Service Request by Status</h4>
								<div class="divider mb30"></div>
								<div class="paper p20 mt40">
										<div id="pie-chart1"></div>
								</div>
							</div>
						</div>
					</div>

					
				</section><!-- /.helpdesk-content -->


			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>