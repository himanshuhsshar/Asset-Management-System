<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link class="rtl_switch_css" href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
    <link class="rtl_switch_css" href="dist/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/theme.min.css" rel="stylesheet" type="text/css">

    <!-- page css -->
    <link href="dist/css/pages/login-register1.css" rel="stylesheet" type="text/css">
    
    
</head>
<body class="theme-mda no-loader lr-page">

    <div class="page-background lr-page">

        <!-- Place your logo here. -->
        <img src="#" alt="" class="login-logo">

        <div class="form-box" id="login-box">
            <div class="title brand-name"><img src="images/logo.png" style="height: 54px;margin: 0 auto;display: block;"></div>
            <div class="header text-theme"><span>Sign In</span></div>
            <form id="signInForm" action="ownerdashboard.php" method="post">
                <div class="body">
                    <div class="form-group">
                        <div class="row">
                            <label for="examplename" class="control-label mt-20 col-sm-3">Name:</label>
                            <div class="col-sm-9">     
                                <div class="input-field mt-20">
                                    <input type="text" id="examplename" placeholder="Username">    
                                    <div class="input-highlight"></div>
                                </div>
                            </div><!-- /.col- -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="examleemail" class="col-sm-3 control-label mt-20">E-Mail:</label>
                            <div class="col-sm-9">     
                                <div class="input-field mt-20">
                                    <input type="email" id="exampleemail" placeholder="abc@gmail.com">    
                                    <div class="input-highlight"></div>
                                </div>
                            </div><!-- /.col- -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="exampleInputPassword1" class="col-sm-3 control-label mt-20">Password:</label>
                            <div class="col-sm-9">     
                                <div class="input-field mt-20">
                                    <input type="password" id="exampleInputPassword1" placeholder="Enter password">    
                                    <div class="input-highlight"></div>
                                </div>
                            </div><!-- /.col- -->
                        </div>
                    </div>
                    <!--<div class="form-group mt40">
                        <label for="rememberMe" class="checkbox-filled ml30">
                            <input id="rememberMe" class="filled theme" type="checkbox">
                            <i class="highlight"></i>
                            <span class="text-blue-grey text-lighten-1">Remember me</span>
                        </label>
                    </div>-->
                </div><!-- /.body -->

                <div class="footer">                                          
                    <button type="submit" class="btn theme btn-block waves-effect waves-light">Sign me in</button>  
                    
                    <p class="form-type mt20">
                        <a class="btn-flat forgot-password waves-effect waves-theme text-blue-grey text-lighten-2" href="#">Forgot password</a>
                        
                        <!-- <a href="register.html" class="btn-flat waves-effect waves-theme text-blue-grey text-lighten-2 pull-right">Register</a> -->
                    </p>
                </div>
            </form>
            <form id="forgotPasswordForm">
                <div class="body">
                    <p class="text-center help-text pt40">Submit us your email address:</p>
                    <div class="form-group input-field label-float">
                        <i class="mdi mdi-email prefix"></i>
                        <input id="regEmail" name="regEmail" type="text">
                        <label for="regEmail">Your Email:</label>
                        <div class="input-highlight"></div>
                    </div>
                </div><!-- /.body -->

                <div class="footer">                                          
                    <button type="submit" class="btn theme btn-block waves-effect waves-light">Submit</button>  
                    
                    <p class="form-type mt20">
                        <a class="btn-flat sign-in waves-effect waves-theme text-blue-grey text-lighten-2" href="#">Sign in</a>
                        
                        <!-- <a href="register.html" class="btn-flat waves-effect waves-theme text-blue-grey text-lighten-2 pull-right">Register</a> -->
                    </p>
                </div>
            </form>
        </div><!-- /.form-box -->
        <!-- <div class="text-center text-blue-grey text-lighten-2">
            <div class="mb8">Sign in using social networks</div>

            <div class="btn-group">                    
                <a href="#!" class="btn text-blue-grey text-lighten-3 btn-animate bottom">
                    <i class="slideIn-icon mdi mdi-twitter info waves-effect waves-light"></i>
                    <i class="animate-text mdi mdi-twitter"></i>
                </a>
                <a href="#!" class="btn text-blue-grey text-lighten-3 btn-animate bottom">
                    <i class="slideIn-icon fa mdi mdi-facebook blue-dark waves-effect waves-light"></i>
                    <i class="animate-text fa mdi mdi-facebook"></i>
                </a>
                <a href="#!" class="btn text-blue-grey text-lighten-3 btn-animate bottom">
                    <i class="slideIn-icon mdi mdi-google-plus red darken-2 waves-effect waves-light"></i>
                    <i class="animate-text mdi mdi-google-plus"></i>
                </a>
            </div>
        </div> -->

        <div class="ecorner_1 theme"></div>
        <div class="ecorner_2 theme"></div>
    </div><!-- /.page-background -->

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/bower.min.js"></script>
    <!-- app -->
    <script src="dist/js/app.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#forgotPasswordForm').hide();

            //Toggle between forms
            $('.form-type .btn-flat').click(function() {

              $('form').hide();
              if ($(this).hasClass('sign-in')) {
                $('#signInForm').show();
              } 
              else if ($(this).hasClass('forgot-password')) {
                $('#forgotPasswordForm').show();
              }
            });
        });
    </script>      

</body>

</html>