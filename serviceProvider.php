<?php include('include/header.php') ?>
  <?php include('include/navbar.php') ?>

	<section id="tickets"  class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->		

		<div class="aside-panel"></div>		
	
		<div class="container-fluid">			

			<div class="page-header">
				<h1>Service Provider List</h1>
				<ul class="breadcrumbs">
					<li>Pages</li>
					<li>Service Provider List</li>
				</ul>
			</div>			

			<div class="page-content">
				<!-- <section class="col-aside col-right dark-bg clearfix pb20">
					<form id="filterTickets">
						<div class="p20 pt30">
							<h3 class="text-title"><i class="mdi mdi-filter-outline mr8"></i>Filter Tickets</h3>
							
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
						<a href="createservicerequest.php" class="btn btn-sm theme waves-effect waves-light">Create Service Request</a>
						<!-- <a href="addasset.php" class="btn btn-sm theme waves-effect waves-light">Add New Asset</a> -->

						<!-- /.expanding-card -->

						<div class="pull-right mr12">
							<div class="input-field hidden-xs pull-left">
								<i class="mdi mdi-magnify prefix"></i>
								<input id="filter_tickets" class="search" type="text" placeholder="Search Assets">
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
									
									<th class="sort" data-sort="subject">Name</th>
									<th class="sort" data-sort="subject">City</th>
									<th class="sort" data-sort="priority">Phone NO.</th>
									<th class="sort" data-sort="status">Email</th>
									<th class="sort" data-sort="agent">Contact Person</th>
									<th class="sort" data-sort="due-date">View profile</th>
									<!-- <th class="sort" data-sort="due-date">Request</th> -->
								</tr>
							</thead>
							<tbody class="list">
								<tr>
									 <td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Manish seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										 <a href="serviceproviderprofile.php" class="btn theme  waves-effect waves-light">View</a>
									</td>
									 
								</tr>
								<tr>
									 <td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Manish seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									 <td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
								<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck4">
                  <label class="custom-control-label" for="customCheck4">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" for="customCheck5">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck6">
                  <label class="custom-control-label" for="customCheck6">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck7">
                  <label class="custom-control-label" for="customCheck7">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck8">
                  <label class="custom-control-label" for="customCheck8">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck9">
                  <label class="custom-control-label" for="customCheck9">Manish Seles</label></div></td>
									
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck10">
                  <label class="custom-control-label" for="customCheck10">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck11">
                  <label class="custom-control-label" for="customCheck11">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck12">
                  <label class="custom-control-label" for="customCheck12">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck13">
                  <label class="custom-control-label" for="customCheck13">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
										</div>
									</td>
									 
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck14">
                  <label class="custom-control-label" for="customCheck14">Manish Seles</label></div></td>
									<!--<td class="subject">Manish seles</td>-->
									<td class="subject">Gwalior</td>
									<td class="priority">975466548</td>
									<td class="status">Test@test.cpm</td>
									<td class="agent">Steve Johnson</td>
									<td class="due-date">
										<div class="btn-group">					
											<a href="#!" class="btn theme waves-effect waves-light">View</a>
											
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