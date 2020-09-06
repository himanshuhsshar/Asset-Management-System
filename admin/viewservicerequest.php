<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>

	<section id="tickets"  class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->		

		<div class="aside-panel"></div>		
	
		<div class="container-fluid">			

			<div class="page-header">
				<h1>Service Requests</h1>
				<ul class="breadcrumbs">
					<li>Pages</li>
					<li>Request</li>
				</ul>
			</div>			

			<div class="page-content">
				<!-- <section class="col-aside col-right dark-bg clearfix pb20">
					<form id="filterTickets">
						<div class="p20 pt30">
							<h3 class="text-title"><i class="mdi mdi-filter-outline mr8"></i>Filter Requests</h3>
							
							<select id="filterAgents" class="selectpicker mt30" data-width="90%">
								<option value="">Provider All</option>
								<option value="Steve Johnson">Steve Johnson</option>
								<option value="Denise Williams">Denise Williams</option>
								<option value="Kenneth Perez">Kenneth Perez</option>
								<option value="Andrew Miller">Andrew Miller</option>
								<option value="Nicole Smith">Nicole Smith</option>
							</select>

							<select id="filterStatus" class="selectpicker mt20" data-width="90%">
								<option value="">Status All</option>
								<option value="open">open</option>
								<option value="assigned">assigned</option>
								<option value="closed">closed</option>
							</select>		

							<select id="filterPriority" class="selectpicker mt20" data-width="90%">
								<option value="">Manufacture All</option>
								<option value="high">high</option>
								<option value="normal">normal</option>
								<option value="low">low</option>
							</select>

							<button id="filterReset" class="btn-flat btn-sm waves-effect waves-light pull-right mt20">Reset filters</button>
						</div>
					</form>
				</section> -->

				<section class="col-content ticket-content pt10 pb20">
					<!-- page overlay when expanding-card is active -->
					<div class="form-overlay"></div>

					<div class="toolbar mb20">
						<!-- <a href="servicerequest.php" class="btn btn-sm theme waves-effect waves-light">Service Request</a>
						<a href="askqueston.php" class="btn btn-sm theme waves-effect waves-light">Ask Question</a> -->

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
									<th class="sort" data-sort="id">Issue Type</th>
									<th class="sort" data-sort="subject">Issue Comment</th>
									<th class="sort" data-sort="subject">Types of Service</th>
									<th class="sort" data-sort="priority">Service Provider</th>
									<th class="sort" data-sort="status">Contact Details</th>
									<th class="sort" data-sort="due-date">Action</th>
								</tr>
							</thead>
							<tbody class="list">
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="id"><a href="#">Not Working</a></td>
									<td class="subject">Console not working</td>
									<td class="subject">Paid</td>
									<td class="priority">Manish seles</td>
									<td class="status">94646156</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="askqueston.php" class="btn amber waves-effect waves-light"><i class="fa fa-comment"></i></a>
											<a href="#!" class="btn red  waves-effect waves-light"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="pagination no-arrows pull-right mr20 mt20"></ul>
					</div>
				</section>				
			</div><!-- /.page-content -->

				
		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->

		<?php include('include/footer.php') ?>