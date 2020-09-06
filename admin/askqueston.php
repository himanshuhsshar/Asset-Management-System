<?php include('include/header1.php') ?>
  <?php include('include/navbar1.php') ?>
		
	<section class="content-wrapper">

	<!-- =========================================================== -->
	<!-- Start page content  -->
	<!-- =========================================================== -->

		<div class="aside-panel"></div>		
	
		<div class="container-fluid">
			<div class="page-header">
				<h1>Inbox</h1>
				<ul class="breadcrumbs">
					<li>melissa@gmail.com</li>
					<li>Inbox</li>
				</ul>
			</div>

			<div class="page-content email-wrapper paper">	

				<!-- Inbox menu only visible on menu horizontal layout -->
				<div class="col-aside col-left dark-bg email-menu pt40">
					<div class="list-group no-border mt30">
						<a href="inbox.html" class="list-group-item item-icon active"><i class="icon mdi mdi-email"></i>Inbox <span class="badge">12</span></a>
						<a href="#:;" class="list-group-item item-icon"><i class="icon mdi mdi-star"></i>Starred</a>
						<a href="#:;" class="list-group-item item-icon"><i class="icon mdi mdi-send"></i>Sent</a>
						<a href="#:;" class="list-group-item item-icon"><i class="icon mdi mdi-email-open"></i>Drafts</a>							
						<a href="#:;" class="list-group-item item-icon"><i class="icon mdi mdi-alert-circle"></i>Spam</a>
						<a href="#:;" class="list-group-item item-icon"><i class="icon mdi mdi-delete"></i>Trash</a>
					</div>

					<div class="divider m14"></div>

					<div class="account-storage-indicator">
						<p>Storage <b>5</b>GB<span class="pull-right">42%</span></p>
						<div class="progress">
							<div class="progress-bar" style="width: 42%"></div>
						</div>
					</div>
				</div><!-- /.email-menu -->

				<div id="emailList" class="col-content col-right messages-wrapper p10">
					<div class="toolbar mt10">					
						<div class="checkbox checkbox-active-tools check-all">
							<label for="chkAll" class="checkbox-filled mt10">
								<input id="chkAll" class="filled" type="checkbox">
								<i class="highlight"></i>
								<span class="hidden-xs">Check all</span>
							</label>
						</div>
						<div class="checkbox-active-tools">					
							<i class="icon action mdi mdi-delete" data-toggle="tooltip" title="Delete selected messages" data-placement="bottom"></i>
						</div>

						<button class="btn theme waves-effect waves-light m0">Compose new</button>

						<div class="pull-right">
							<div class="float-left input-field hidden-xs mr40">
								<i class="mdi mdi-magnify prefix"></i>
								<input class="search" type="text" placeholder="Search...">
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
											<input type="search" class="input search no-border" placeholder="Search...">
										</div><!-- /.inpt-field -->
										<span class="input-group-addon no-border">
											<i class="icon mdi mdi-magnify"></i>
										</span>
									</div>
								</form>

								<i id="toggleCheckboxes" class="icon action mdi mdi-checkbox-marked-outline" data-toggle="tooltip" title="show checkbox" data-placement="bottom"></i>
							</div>								
						</div>
					</div><!-- /.toolbar -->
					<div class="divider mb20 mt10"></div>

<!-- EMAILS -->
					<div class="row">
						<div class="col-sm-6">
							<ul class="list list-group transparent no-border item-border">		
							    <li class="list-group-item item-avatar msg-row unread">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
												<label for="ck1" class="checkbox-filled">
										      		<input id="ck1" class="filled" type="checkbox">
										      		<i class="highlight"></i>
										      	</label>
										    </span>
										</span>

										<img src="demo/images/faces/face-1.jpg" alt="" class="avatar circle">
										
										<a href="#:;" class="msg-from">Aron Chandler</a>

										<p class="pull-right">
											<input id="star1" class="msg-star" type="checkbox">
											<label for="star1"></label>

											<span class="msg-time-stamp">4:31 PM</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry.
										</a>							
									</div>			
							    </li><!-- /.msg-row -->					    

							    <li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
												<label class="checkbox-filled" for="ck2">
											      	<input id="ck2" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle cyan cyan-text text-darken-4">S</i>
										
										<a href="#:;" class="msg-from">Steve Saunders</a>

										<p class="pull-right">
											<input id="star2" class="msg-star" type="checkbox">
											<label for="star2"></label>

											<span class="msg-time-stamp">2:14 PM</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Lorem ipsum is a pseudo-Latin text used in web design.
										</a>							
									</div>											
							    </li><!-- /.msg-row -->

							    <li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      <label class="checkbox-filled" for="ck3">
											      	<input id="ck3" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle blue-grey lighten-2 blue-grey-text text-darken-2">L</i>
										
										<a href="#:;" class="msg-from">support@loremIpsum.com</a>

										<p class="pull-right">
											<input id="star3" class="msg-star" type="checkbox" checked>
											<label for="star3"></label>

											<span class="msg-time-stamp">11:25 AM</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											New version of Lorem ipsum.
										</a>							
									</div>			
							    </li><!-- /.msg-row -->

							    <li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
												<label class="checkbox-filled" for="ck4">
											      	<input id="ck4" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<img src="demo/images/faces/face-3.jpg" alt="" class="avatar circle">
										
										<a href="#:;" class="msg-from">Ashley Nixon</a>

										<p class="pull-right">
											<input id="star4" class="msg-star" type="checkbox">
											<label for="star4"></label>

											<span class="msg-time-stamp">sept, 28</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Latest Lorem Ipsum version is coming out.
										</a>							
									</div>			
							    </li><!-- /.msg-row -->

							    <li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck5">
											      	<input id="ck5" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle blue accent-1 blue-text text-darken-4">P</i>
										
										<a href="#:;" class="msg-from">support@Paypal.com</a>

										<p class="pull-right">
											<input id="star5" class="msg-star" type="checkbox" checked>
											<label for="star5"></label>

											<span class="msg-time-stamp">sept, 27</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Account upgrade.
										</a>							
									</div>			
							    </li><!-- /.msg-row -->	    

							    <li class="list-group-item item-avatar msg-row unread">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck6">
											      	<input id="ck6" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle pink accent-2 pink-text text-darken-4">C</i>
										
										<a href="#:;" class="msg-from">Claudia Henderson</a>

										<p class="pull-right">
											<input id="star6" class="msg-star" type="checkbox">
											<label for="star6"></label>

											<span class="msg-time-stamp">sept, 27</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Lorem ipsum is a pseudo-Latin text used in web design.
										</a>							
									</div>			
							    </li><!-- /.msg-row -->

							    <!--<li class="list-group-item item-avatar msg-row unread">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck7">
											      	<input id="ck7" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<img src="demo/images/faces/face-12.jpg" alt="" class="avatar circle">
										
										<a href="#:;" class="msg-from">John Campbell</a>

										<p class="pull-right">
											<input id="star7" class="msg-star" type="checkbox">
											<label for="star7"></label>

											<span class="msg-time-stamp">sept, 26</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry.
										</a>							
									</div>			
							    </li>--><!-- /.msg-row -->	    

							    <!--<li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck8">
											      	<input id="ck8" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle teal lighten-2 teal-text text-darken-2">L</i>
										
										<a href="#:;" class="msg-from">info@loremIpsum.com</a>

										<p class="pull-right">
											<input id="star8" class="msg-star" type="checkbox">
											<label for="star8"></label>

											<span class="msg-time-stamp">sept, 26</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											New version of Lorem ipsum.
										</a>							
									</div>			
							    </li>--><!-- /.msg-row -->

							    <li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck9">
											      	<input id="ck9" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<!--<i class="avatar circle blue accent-1 blue-text text-darken-4">P</i>
										
										<a href="#:;" class="msg-from">support@Paypal.com</a>

										<p class="pull-right">
											<input id="star9" class="msg-star" type="checkbox" checked>
											<label for="star9"></label>

											<span class="msg-time-stamp">sept, 26</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											Payment overview.
										</a>							
									</div>			
							    </li>--><!-- /.msg-row -->

							    <!--<li class="list-group-item item-avatar msg-row">
									<div class="msg-wrapper">
										<span class="msg-ck">
											<span class="checkbox">
										      	<label class="checkbox-filled" for="ck10">
											      	<input id="ck10" class="filled" type="checkbox">
											      	<i class="highlight"></i>
											    </label>
										    </span>
										</span>

										<i class="avatar circle amber accent-1 amber-text text-darken-4">U</i>
										
										<a href="#:;" class="msg-from">UIdesigns@mda.com</a>

										<p class="pull-right">
											<input id="star10" class="msg-star" type="checkbox">
											<label for="star10"></label>

											<span class="msg-time-stamp">sept, 25</span>
										</p>
														
										<a href="#:;" class="msg-sub">
											New UI designs.
										</a>							
									</div>			
							    </li>--><!-- /.msg-row -->	    

							</ul><!-- /.list-group -->
						</div><!-- /.col- -->
				
<!-- =================================================================== -->
<!-- Message window -->
<!-- =================================================================== -->

						<div class="col-sm-6 hidden-xs">
							<div class="collapsible-body msg-content">
								<div class="toolbar sub-text">
									<div class="pull-right">
										<i class="icon action mdi mdi-reply" data-toggle="tooltip" title="reply" data-placement="bottom"></i>
										<i class="icon action mdi mdi-reply-all" data-toggle="tooltip" title="reply all" data-placement="bottom"></i>
										<i class="icon action mdi mdi-forward" data-toggle="tooltip" title="forward" data-placement="bottom"></i>
										<i class="icon action mdi mdi-printer" data-toggle="tooltip" title="print email" data-placement="bottom"></i>
										<i class="icon action mdi mdi-delete" data-toggle="tooltip" title="delete" data-placement="bottom"></i>
									</div>
								</div>

								<!--<div class="list-group no-border transparent mb20">
									<div class="list-group-item item-avatar">
										<i class="avatar circle cyan cyan-text text-darken-4">S</i>			
										<p class="text-title">Steve Saunders</p>
										<p class="pull-right"><i>2:14 PM</i></p>
											
									</div>--><!-- /.msg-row -->
								<!--</div>-->

								<h3 class="mb20">Lorem ipsum is a pseudo-Latin text used in web design.</h3>								
								
								<p class="text-body sub-text mb10">Hello user,<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, culpa, porro, similique, cupiditate commodi delectus soluta sunt odio distinctio corrupti eum ipsam recusandae totam natus incidunt nulla obcaecati tempora ea.<br />Consectetur adipisicing elit. Vel, culpa, porro, similique, cupiditate commodi delectus soluta sunt odio distinctio corrupti eum ipsam recusandae totam natus incidunt nulla obcaecati tempora ea.<br /><br />Vel, culpa, porro, similique, cupiditate commodi delectus soluta sunt odio distinctio corrupti eum ipsam recusandae totam natus incidunt nulla obcaecati tempora ea. Cupiditate commodi delectus soluta sunt odio distinctio corrupti eum ipsam recusandae totam natus incidunt nulla obcaecati tempora ea.</p>

								<p class="sub-text mt40">Kind regards,<br />Lorem ipsum team</p>

								<hr>

								<!--<div class="msg-attachments">
									<p class="sub-text">2 attachments | <a href="#:;">Download all</a></p>

									<ul class="msg-attachments-list">
										<li class="msg-attachment-item">
											<i class="mdi mdi-file"></i>
											<h6>Lorem.zip</h6>
											<a href="#:;">Download</a>
										</li>

										<li class="msg-attachment-item">
											<img src="demo/images/demo-5.jpg" alt="">
											<h6>Roadmap.jpg</h6>
											<a href="#:;">Download</a>
										</li>
									</ul>
								</div>--><!-- /.msg-attachments -->			
							</div><!-- /.collapsible-body -->
						</div><!-- /.col- -->
					</div><!-- /.row -->
					<div class="toolbar mt10">
						<div class="pull-right">					
							<a href="#:;" class="mdi mdi-chevron-left icon action large waves-effect waves-theme"></a>
							<a href="#:;" class="mdi mdi-chevron-right icon action large waves-effect waves-theme"></a>	
						</div>

						<div class="title small">1 - 20 of 482 showing</div>
					</div><!-- /.toolbar -->

				</div><!-- /.messages-wrapper -->
			</div><!-- /.email-wrapper -->

		</div><!-- /.container-fluid -->

	<!-- =========================================================== -->
	<!-- End page content  -->
	<!-- =========================================================== -->

<?php include('include/footer.php') ?>