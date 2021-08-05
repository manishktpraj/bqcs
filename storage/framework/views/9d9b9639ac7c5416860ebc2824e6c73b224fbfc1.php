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
<link rel="icon" type="image/png" href="<?php echo SITE_ASSETS_URL?>img/favicon.png" sizes="32x32">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
<link rel="stylesheet" href="<?php echo SITE_ASSETS_URL?>css/style.css">
<link rel="manifest" href="__manifest.json">
<link href="<?php echo SITE_ASSETS_URL?>js/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?php echo SITE_ASSETS_URL?>js/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo SITE_ASSETS_URL?>js/lib/fullcalendar/fullcalendar.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo SITE_ASSETS_URL?>css/dashforge.calendar.css">
</head>
<body>
<!-- loader -->
<div id="loader">
<div class="spinner-border text-primary" role="status"></div>
</div>
<div class="appHeader bg-primary text-light">
<div class="left">
<a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
<ion-icon name="menu-outline"></ion-icon>
</a>
</div>
<div class="pageTitle">
Dashboard
</div>
<div class="right">
<a href="#" class="headerButton toggle-searchbox">
<ion-icon name="search-outline"></ion-icon>
</a>
</div>
</div>
<!-- * App Header -->





<!-- App Bottom Menu -->
<div class="appBottomMenu">
<a href="index.html" class="item active">
<div class="col">
<ion-icon name="home-outline"></ion-icon>
</div>
</a>
<a href="app-components.html" class="item">
<div class="col">
<ion-icon name="cube-outline"></ion-icon>
</div>
</a>
<a href="page-chat.html" class="item">
<div class="col">
<ion-icon name="chatbubble-ellipses-outline"></ion-icon>
<span class="badge badge-danger">5</span>
</div>
</a>
<a href="app-pages.html" class="item">
<div class="col">
<ion-icon name="layers-outline"></ion-icon>
</div>
</a>
<a href="#" class="item" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
<div class="col">
<ion-icon name="menu-outline"></ion-icon>
</div>
</a>
</div>
<!-- * App Bottom Menu -->
<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body p-0">
<!-- profile box -->
<div class="profileBox">
<div class="image-wrapper">
<img src="<?php echo SITE_ASSETS_URL;?>/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
</div>
<div class="in">
<strong>Julian Gruber</strong>
<div class="text-muted">
<ion-icon name="location"></ion-icon>
California
</div>
</div>
<a href="#" class="close-sidebar-button" data-bs-dismiss="modal">
<ion-icon name="close"></ion-icon>
</a>
</div>
<!-- * profile box -->

<ul class="listview flush transparent no-line image-listview mt-2">
<li>
<a href="<?php echo e(route('job')); ?>" class="item">
<div class="icon-box bg-primary">
<ion-icon name="home-outline"></ion-icon>
</div>
<div class="in">
Jobs
</div>
</a>
</li>
<li>
<a href="<?php echo e(route('job-question')); ?>" class="item">
<div class="icon-box bg-primary">
<ion-icon name="cube-outline"></ion-icon>
</div>
<div class="in">
Job Question
</div>
</a>
</li>
<!-- <li>
<a href="app-pages.html" class="item">
<div class="icon-box bg-primary">
<ion-icon name="layers-outline"></ion-icon>
</div>
<div class="in">
<div>Pages</div>
</div>
</a>
</li>
<li>
<a href="page-chat.html" class="item">
<div class="icon-box bg-primary">
<ion-icon name="chatbubble-ellipses-outline"></ion-icon>
</div>
<div class="in">
<div>Chat</div>
<span class="badge badge-danger">5</span>
</div>
</a>
</li>
<li>
<div class="item">
<div class="icon-box bg-primary">
<ion-icon name="moon-outline"></ion-icon>
</div> 
<div class="in">
<div>Dark Mode</div>
<div class="form-check form-switch">
<input class="form-check-input dark-mode-switch" type="checkbox"
id="darkmodesidebar">
<label class="form-check-label" for="darkmodesidebar"></label>
</div>
</div>
</div>
</li>-->
</ul>
</div>
<!-- sidebar buttons -->
<div class="sidebar-buttons">
<a href="#" class="button">
<ion-icon name="person-outline"></ion-icon>
</a>
<a href="#" class="button">
<ion-icon name="archive-outline"></ion-icon>
</a>
<a href="#" class="button">
<ion-icon name="settings-outline"></ion-icon>
</a>
<a href="#" class="button">
<ion-icon name="log-out-outline"></ion-icon>
</a>
</div>
<!-- * sidebar buttons -->
</div>
</div>
</div>
<!-- * App Sidebar -->


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

<script>
// Trigger welcome notification after 5 seconds
setTimeout(() => {
notification('notification-welcome', 5000);
}, 2000);
</script>

</body>

</html><?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Layout/app.blade.php ENDPATH**/ ?>