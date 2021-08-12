<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="theme-color" content="#000000">
<title>Building & Pest Inspection</title>
<meta name="description" content="Mobilekit HTML Mobile UI Kit">
<meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
<link rel="icon" type="image/png" href="<?php echo SITE_ASSETS_URL;?>img/favicon.png" sizes="32x32">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_ASSETS_URL;?>img/icon/192x192.png">
<link rel="stylesheet" href="<?php echo SITE_ASSETS_URL;?>css/style.css">
<link rel="manifest" href="<?php echo SITE_URL;?>__manifest.json">
</head>

<body class="bg-white">

<!-- loader -->
<div id="loader">
<div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->


<!-- App Capsule -->
<div id="appCapsule" class="pt-0">
<div class="login-form mt-5 p-3">
<div class="section">
<img src="<?php echo SITE_ASSETS_URL;?>img/logo.png" alt="image" class="form-image">
</div>

<div class="section mt-1">
<h4>Fill the form to log in</h4>
<!-- <span class="badge badge-success" style="display:none;height: 35px;padding: 12px;width: 100%;font-size: 13px;margin-bottom: 10px;" id="login-success">Login Successful! Redirecting...</span>
<span class="badge badge-danger" style="display:none;height: 35px;padding: 12px;width: 100%;font-size: 13px;margin-bottom: 10px;" id="login-error">Username and password are incorrect.</span> -->

</div>

<div class="section mt-1 mb-5">
<form action="javascript:void(0);" id="login-form" method="post">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<span class="badge badge-success" style="display:none;height: 35px;padding: 12px;width: 100%;font-size: 13px;margin-bottom: 10px;" id="login-success">Login Successful! Redirecting...</span>
<span class="badge badge-danger" style="display:none;height: 35px;padding: 12px;width: 100%;font-size: 13px;margin-bottom: 10px;" id="login-error">Username and password are incorrect.</span>

<!-- <form action="{{route('dash-board')}}"> -->
<div class="form-group boxed">
<div class="input-wrapper">
<input type="email" class="form-control" id="email1" placeholder="
 Email address" name="email1">
<i class="clear-input">
<ion-icon name="close-circle"></ion-icon>
</i>
</div>
</div>

<div class="form-group boxed">
<div class="input-wrapper">
<input type="password" class="form-control" id="password1" placeholder="Password" autocomplete="off" name="password1">
<i class="clear-input">
<ion-icon name="close-circle"></ion-icon>
</i>
</div>
</div>
<div class="text-center mt-2"><a href="#" class="">Forgot Password?</a></div>
<button type="submit" class="btn btn-primary btn-block btn-lg mt-3" onclick="return LoginProcess($(this))">Log in</button>
</form>
</div>
</div>
</div>
<!-- * App Capsule -->



<!-- ============== Js Files ==============  -->
<!-- Bootstrap -->
<script src="<?php echo SITE_ASSETS_URL;?>js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="<?php echo SITE_ASSETS_URL;?>js/plugins/splide/splide.min.js"></script>
<!-- ProgressBar js -->
<script src="<?php echo SITE_ASSETS_URL;?>js/plugins/progressbar-js/progressbar.min.js"></script>
<!-- Base Js File -->
<script src="<?php echo SITE_ASSETS_URL;?>js/base.js"></script>
<script type="text/javascript">
var base_url = {!! json_encode(url('/')) !!}
</script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/feather-icons/feather.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/js-cookie/js.cookie.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.settings.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/login.js"></script>
<script>
function LoginProcess (objectElement)
{
    $('#spinner').show();
    $('#loadername').html('Loading..');
    var status=0;

    var user_name =$('#email1').val();
    //alert(user_name);
	if(user_name.trim()=='')
	{
	    $('#email1').attr('style','border:1px solid red;height:45px; padding:15px;');
        $('#spinner').hide();
        $('#loadername').html('Sign In');
        status=1;
	}
	var password =$('#password1').val();
	if(password.trim()=='')
	{
	$('#password1').attr('style','border:1px solid red;height:45px; padding:15px;');
    $('#spinner').hide();
    $('#loadername').html('Sign In');
    status=1;
	}
	if(status==1)
	{
		return false;
	}
    
	var datastring =$('#login-form').serialize();
    //alert(datastring);
	$.post(base_url+"/login/logincheck",datastring,function(response){
	  if(response.message=='ok')
	  {
	        $('#spinner').hide();
            $('#loadername').html('Sign In');
	        $('#login-error').hide();	
	        $('#login-success').show();
	        window.location=base_url+"/dash-board";
	  }else{
	        $('#spinner').hide();
            $('#loadername').html('Sign In');
 	        $('#login-success').hide();
	        $('#login-error').show();	
      }
	});
}

</script>

</body>

</html>