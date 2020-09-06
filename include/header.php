<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Helpdesk</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!-- c3 charts -->
	<link href="dist/css/plugins/c3.css" rel="stylesheet" type="text/css">
	
	<link class="rtl_switch_css" href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
	<link class="rtl_switch_css" href="dist/css/app.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/theme.min.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/light-skin.css" rel="stylesheet" type="text/css">
	<link href="dist/css/skins/dark-skin.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link class="rtl_switch_page_css" href="dist/css/pages/inbox.css" rel="stylesheet" type="text/css">	

	<link class="rtl_switch_page_css" href="dist/css/pages/helpdesk.css" rel="stylesheet" type="text/css">
	

	<style type="text/css">
		.box {
    display: none;
}
a.sidemenu-username.new.media:after {
    display: none;
}
}

a.sidemenu-username.new.media {
    cursor: context-menu;
}
.short-description {
    background: rgba(242, 244, 248, 0.49) none repeat scroll 0 0;
    border: 1px solid rgba(204, 204, 204, 0.41);
    border-radius: 8px;
    margin: 15px 0;
    padding: 12px 23px;
    box-shadow: 0 0 6px rgba(193, 193, 193, 0.62);
}

element.style {
    margin-top: 20px;
}
	</style>
</head>


<body class="theme-mda light-skin ev-page">

<div class="preloader-bg"></div>
<div class="preloader-overlay"></div>

<div class="main-wrapper side-menu">

<!-- HEADER-MENU -->	
	<header class="header-bar toggler-hide theme">	
		<div class="toolbar">
					
			<div class="pull-right search-wrapper">
				<!--<form class="header-bar-search input-field pull-left hidden-xs mr30">
					<input class="search" type="text" placeholder="Search...">
				</form>-->

				<a href="ajax/notifications.html" class="aside-panel-trigger icon action mdi mdi-bell"><span class="badge orange">2</span></a>

				<!-- <a href="ajax/contacts-panel.html" class="aside-panel-trigger icon action mdi mdi-account-multiple"></a> -->

				<a  class="icon action mdi dropdown-toggle mdi-settings" data-toggle="dropdown" id="dropdownMenuOffset"></a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
					            <!--<li>
		                            <a href="profile.php">View Profile</a>
		                        </li>-->
					            <li>
		                            <a href="assetownerprofile.php" class="dropdown-item">Profile</a>
		                        </li>
			                    <li>
		                            <a href="updateassetownwerpassword.php" class="dropdown-item">Change Password</a>
		                        </li>
		                         <li>
		                            <a href="helpassetowner.php" class="dropdown-item">Help</a>
		                        </li>
		                        
		                </li>			                
		                <li class="divider"></li>
		                <li>
		                    <a href="index.php">Logout</a>
		                </li>
			    </ul>
			   			                
                <!--<a  class="icon" data-toggle="dropdown" id="dropdownMenuReference"><i class="fa fa-language" aria-hidden="true" data-reference="parent"></i>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference" >
					            <li>
		                            <a href="#" class="dropdown-item">Albania</a>
		                        </li>
		                         <li>
		                            <a href="#" class="dropdown-item">English</a>
		                        </li>
		                         <li>
		                            <a href="#" class="dropdown-item">German</a>
		                        </li>
		                         <li>
		                            <a href="#" class="dropdown-item">Hindi</a>
		                        </li>
			                    
			    </ul>
				<i class="icon action mdi toolbar-search visible-xs-inline-block"></i>-->

				<!--<form class="search-form">					
					<div class="input-field input-group">
						<span class="input-group-btn no-border">
							<i class="icon action mdi toolbar-back"></i>
						</span>
						<input type="search" class="input no-border" placeholder="Search...">
					</div>
				</form>-->						
				
				<div class="icon menu-toggler-hide pos-right">
					<i class="icon action toggler-hide-icon"></i>
				</div>				

				<div class="dropdown hb-user-dropdown pull-right">
					<img class="circle hb-profile" data-toggle="dropdown" src="demo/images/faces/face-23.jpg" alt="">
					<ul class="dropdown-menu top-right">
						<li><a href="inbox.html">Inbox</a></li>
						<li><a href="#:;">Profile</a></li>
					    <li><a href="#:;">Settings</a></li>
					    <li><a href="#:;">Help</a></li>
					    <li class="divider"></li>
					    <li><a href="#:;">Logout</a></li>
				    </ul>
				</div><!-- /.dropdown -->
			</div><!-- /.pull-right -->

			<div class="title brand-name"><a href="ownerdashboard.php"><img src="images/logo.png" style="height: 45px;"></a></div>
		</div><!-- /.toolbar -->
	</header>