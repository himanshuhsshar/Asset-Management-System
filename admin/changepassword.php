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
					<li>Change Password</li>
				</ul>
			</div>

		    <div class="page-content">
				<!-- page overlay when expanding-card is active -->
				<div class="form-overlay"></div>

				<section class="col-content helpdesk-content">
					<div class="col-sm-8 col-sm-offset-2">
						<form class="form-inline paper p20 pb40">
							<div class="text-title">Change Password</div>
							<div class="form-group input-field label-float mr10">
								<i class="mdi mdi-key prefix"></i>
								<label class="" for="exampleInputPassword1">Old Password</label>
								<input type="password" id="exampleInputPassword1">
								<div class="input-highlight"></div>
							</div>

							<div class="form-group input-field label-float mr10">
								<i class="mdi mdi-key prefix"></i>
								<label class="" for="exampleInputPassword1">New Password</label>
								<input type="password" id="exampleInputPassword1">
								<div class="input-highlight"></div>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn theme-accent mt30">Change<i class="mdi mdi-send right"></i></button>
							</div>
						</form>
					</div>

					
				</section><!-- /.helpdesk-content -->



			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>