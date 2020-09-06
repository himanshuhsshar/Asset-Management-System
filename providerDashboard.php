<?php include('include/header1.php') ?>
  <?php include('include/navbar1.php') ?>
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

				<section class="col-content ticket-content pt10 pb20">
					<!-- page overlay when expanding-card is active -->
					<div class="form-overlay"></div>

					<div class="toolbar mb20">
						<span class="head">New Request</span>
						&nbsp;&nbsp;
						<a href="servicerequest.php" class="btn theme waves-effect waves-lightht">View All Service Request</a>

						<!-- /.expanding-card -->

						<div class="pull-right mr12">
							<div class="input-field hidden-xs pull-left">
								<i class="mdi mdi-magnify prefix"></i>
								<input id="filter_tickets" class="search" type="text" placeholder="Search Service Requests ">
								<div class="input-highlight"></div>
							</div>
							
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
					
					<div class="table-responsive table-wrapper">
						<table id="ticketsTable" class="table-hover">
							<thead>
								<tr>
									<th class="sort" data-sort="id">SR No.</th>
									<th class="sort" data-sort="issue-type">Issue Type</th>
									<th class="sort" data-sort="subject">Issue Comment</th>
									<th class="sort" data-sort="subject">Types of Service</th>
									<th class="sort" data-sort="priority">Asset Owner</th>
									<th class="sort" data-sort="status">Contact Details</th>
									<th class="sort" data-sort="priority">Status</th>
									<th class="sort" data-sort="due-date">Action</th>
								</tr>
							</thead>
							<tbody class="list">
								<tr>
									<td class="id"><a href="detailedservicerequest.php">16568</a></td>
									<td class="issue-type">Not Working</td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td>
                                       <div class="dropdown">
                                        <button class="btn theme  waves-effect waves-light" dropdown-toggle"="" type="button" data-toggle="dropdown">Status
                                       <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                       <li><a href="#">New </a></li>
                                        <li><a href="#">OnGoing</a></li>
                                        <li><a href="#">Closed</a></li>
                                       </ul>
                                       </div>
                                    </td>   
									<td class="due-date">
										<div class="btn-group">					
											 
											<!--<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>--><a href="detailedservicerequest.php" class="btn blue waves-effect waves-lightht"><i class="fa fa-info"></i></a>
										</div>
									</td>
								<tr>
									<td class="id"><a href="detailedservicerequest.php">16568</a></td>
									<td class="issue-type">Not Working</td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td>
                                       <div class="dropdown">
                                        <button class="btn theme  waves-effect waves-light" dropdown-toggle"="" type="button" data-toggle="dropdown">Status
                                       <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                       <li><a href="#">New </a></li>
                                        <li><a href="#">OnGoing</a></li>
                                        <li><a href="#">Closed</a></li>
                                       </ul>
                                       </div>
                                    </td>   
									<td class="due-date">
										<div class="btn-group">					
											 
											<!--<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>--><a href="detailedservicerequest.php" class="btn blue waves-effect waves-lightht"><i class="fa fa-info"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="detailedservicerequest.php">16568</a></td>
									<td class="issue-type">Not Working</td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td>
                                       <div class="dropdown">
                                        <button class="btn theme  waves-effect waves-light" dropdown-toggle"="" type="button" data-toggle="dropdown">Status
                                       <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                       <li><a href="#">New </a></li>
                                        <li><a href="#">OnGoing</a></li>
                                        <li><a href="#">Closed</a></li>
                                       </ul>
                                       </div>
                                    </td>   
									<td class="due-date">
										<div class="btn-group">					
											 
											<!--<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>--><a href="detailedservicerequest.php" class="btn blue waves-effect waves-lightht"><i class="fa fa-info"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="detailedservicerequest.php">16568</a></td>
									<td class="issue-type">Not Working</td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td>
                                       <div class="dropdown">
                                        <button class="btn theme  waves-effect waves-light" dropdown-toggle"="" type="button" data-toggle="dropdown">Status
                                       <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                       <li><a href="#">New </a></li>
                                        <li><a href="#">OnGoing</a></li>
                                        <li><a href="#">Closed</a></li>
                                       </ul>
                                       </div>
                                    </td>   
									<td class="due-date">
										<div class="btn-group">					
											 
											<!--<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>--><a href="detailedservicerequest.php" class="btn blue waves-effect waves-lightht"><i class="fa fa-info"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="detailedservicerequest.php">16568</a></td>
									<td class="issue-type">Not Working</td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td>
                                       <div class="dropdown">
                                        <button class="btn theme  waves-effect waves-light" dropdown-toggle"="" type="button" data-toggle="dropdown">Status
                                       <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                       <li><a href="#">New </a></li>
                                        <li><a href="#">OnGoing</a></li>
                                        <li><a href="#">Closed</a></li>
                                       </ul>
                                       </div>
                                    </td>   
									<td class="due-date">
										<div class="btn-group">					
											 
											<!--<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>--><a href="detailedservicerequest.php" class="btn blue waves-effect waves-lightht"><i class="fa fa-info"></i></a>
										</div>
									</td>
								</tr>
								
							</tbody>
						</table>
						<ul class="pagination no-arrows pull-right mr20 mt20"></ul>
					</div>
				</section>

<!-- START RIGHT COLUMN -->
				<!--<section class="col-aside col-right helpdesk-aside z-depth-1-half hidden-xs p12">-->
					<!-- Chart -->
					
					
					<!--<div class="divider mt10 mb10"></div>	

					<ul class="nav nav-justified transparent">-->
					    <!-- <li class="active waves-effect waves-light"><a href="#activity" data-toggle="tab"><span class="text-uppercase">Activity</span></a></li> -->
					    <!--<li class=" active waves-effect waves-light"><a href="#leaderboard" data-toggle="tab"><span class="text-uppercase">Provider</span></a></li>
					</ul>
					<div class="tab-content transparent">-->
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

						<!--<div class="tab-pane active  fadein-right p0 pt10" id="leaderboard">-->
							<!-- <h4 class="text-center mt10 mb20 sub-text">Service Level By Agent</h4> -->
							<!--<ul class="leaderboard list-group transparent no-border">
								<li class="list-group-item item-avatar">
									<img src="demo/images/faces/face-12.jpg" alt="" class="avatar circle">
									<p class="item-title">Andrew Miller </p>-->
									<!-- <div class="progress mt8">					
										<div class="progress-bar" style="width: 92%"></div>
									</div> -->
								<!--</li>
								<li class="list-group-item item-avatar">
									<img src="demo/images/faces/face-11.jpg" alt="" class="avatar circle">
									<p class="item-title">Kenneth Perez--><!-- <small class="pull-right">88%</small> -->
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 88%"></div>
									</div> -->
								<!--</li>				
								<li class="list-group-item item-avatar">
									<img src="demo/images/faces/face-13.jpg" alt="" class="avatar circle">
									<p class="item-title">Denise Williams</p>-->
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 82%"></div>
									</div> -->
								<!--</li>
								<li class="list-group-item item-avatar">
									<img src="demo/images/faces/face-10.jpg" alt="" class="avatar circle">
									<p class="item-title">Steve Johnson</p>-->
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 79%"></div>
									</div> -->
								<!--</li>
								<li class="list-group-item item-avatar">
									<img src="demo/images/faces/face-21.jpg" alt="" class="avatar circle">
									<p class="item-title">Nicole Smith</p>-->
									<!-- <div class="progress mt8">
										<div class="progress-bar" style="width: 76%"></div>
									</div> -->
								<!--</li>
								
							</ul>
						</div>
					</div>	
				</section>--><!-- /.col-right -->

			</div><!-- /.page-content -->
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->
<?php include('include/footer.php') ?>