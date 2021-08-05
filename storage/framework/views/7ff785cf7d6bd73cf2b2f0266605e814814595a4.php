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
</div>
<div class="section mt-1 mb-5">
<form action="<?php echo e(route('dash-board')); ?>">
<div class="form-group boxed">
<div class="input-wrapper">
<input type="email" class="form-control" id="email1" placeholder="Email address">
<i class="clear-input">
<ion-icon name="close-circle"></ion-icon>
</i>
</div>
</div>

<div class="form-group boxed">
<div class="input-wrapper">
<input type="password" class="form-control" id="password1" placeholder="Password" autocomplete="off">
<i class="clear-input">
<ion-icon name="close-circle"></ion-icon>
</i>
</div>
</div>
<div class="text-center mt-2"><a href="#" class="">Forgot Password?</a></div>
<button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Log in</button>
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

</body>

</html><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/WebLogin/index.blade.php ENDPATH**/ ?>