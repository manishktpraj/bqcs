<link rel="stylesheet" href="<?php echo SITE_ASSETS_URL;?>css/style.css">
<link rel="manifest" href="__manifest.json">
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

</html>