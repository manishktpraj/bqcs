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
<link rel="manifest" href="<?php echo SITE_ASSETS_URL;?>__manifest.json">
</head>
<body>
<!-- loader -->
<div id="loader">
<div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->
<!-- App Header -->
<div class="appHeader bg-primary text-light">
<div class="left">
<a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
<ion-icon name="menu-outline"></ion-icon>
</a>
</div>
<div class="pageTitle">
Job Question
</div>
<div class="right">
<a href="#" class="headerButton toggle-searchbox">
<ion-icon name="search-outline"></ion-icon>
</a>
</div>
</div>
<!-- * App Header -->
<!-- Search Component -->
<div id="search" class="appHeader">
<form class="search-form">
<div class="form-group searchbox">
<input type="text" class="form-control" placeholder="Search...">
<i class="input-icon">
<ion-icon name="search-outline"></ion-icon>
</i>
<a href="#" class="ms-1 close toggle-searchbox">
<ion-icon name="close-circle"></ion-icon>
</a>
</div>
</form>
</div>
<!-- * Search Component -->
<!-- App Capsule -->
<div id="appCapsule">
<div class="section full mt-1">
<div class="section-title">
<div>
<span class="fw700">Job (ID: 890)</span>
<p class="mb-0 tx-13">26 Plender Road, Western Australia Caversham 6000</p>
</div>
<div class="circle-progress-container" style="width: 50px;">
<div id="progress1">
<div class="inner">
<h4  id="totalPercentage" style="font-size: 14px">0%</h4>
</div>
</div>
</div>
</div>
<div class="lisbox">
<ul>
<li>
<a href="#">
<span class="snumber">1</span>
<span class="sname">Exterior walls cracking to brickwork/render >5mm</span>
<ion-icon name="chevron-down-outline" class="ml-auto tx-18"></ion-icon>
</a>
</li>
<div class="wide-block pt-2 pb-2">
<div class="row">
<div class="col-12">
<div class="form-group boxed">
<div class="input-wrapper">
<select class="form-control form-select">
<option value="0">Select</option>
<option value="1">Present</option>
<option value="2">Not Present</option>
<option value="3">N/A</option>
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="imgboxlist">
<ul>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
<li>
<a href="#">
<div class="imgbox">
<img src="<?php echo SITE_ASSETS_URL;?>img/187803-200.png">
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="spacer"></div>
</ul>
</div>
</div>
</div>
<!-- * App Capsule -->
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
<a href="{{route('job')}}" class="item">
<div class="icon-box bg-primary">
<ion-icon name="home-outline"></ion-icon>
</div>
<div class="in">
Jobs
</div>
</a>
</li>
<li>
<a href="{{route('job-question')}}" class="item">
<div class="icon-box bg-primary">
<ion-icon name="cube-outline"></ion-icon>
</div>
<div class="in">
Job Question
</div>
</a>
</li>


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
<!--
<div id="notification-welcome" class="notification-box">
<div class="notification-dialog android-style">
<div class="notification-header">
<div class="in">
<img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
<strong>Mobilekit</strong>
<span>just now</span>
</div>
<a href="#" class="close-button">
<ion-icon name="close"></ion-icon>
</a>
</div>
<div class="notification-content">
<div class="in">
<h3 class="subtitle">Welcome to Mobilekit</h3>
<div class="text">
Mobilekit is a PWA ready Mobile UI Kit Template.
Great way to start your mobile websites and pwa projects.
</div>
</div>
</div>
</div>
</div>
-->

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

</html>