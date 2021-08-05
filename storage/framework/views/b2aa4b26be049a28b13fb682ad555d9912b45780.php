<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="<?php if($user_role==0){(isset($session_user_data->staff_favicon) && $session_user_data->staff_favicon!="")?SITE_UPLOAD_URL.SITE_STAFF_IMAGE.$session_user_data->staff_favicon:SITE_NO_IMAGE_PATH;}else{echo (isset($session_user_data->ins_cover_image) && $session_user_data->ins_cover_image!="")?SITE_UPLOAD_URL.SITE_INSTITUTE_IMAGE.$session_user_data->ins_cover_image:SITE_NO_IMAGE_PATH;}?>">
<title><?php echo $title;?></title>
<link href="<?php echo ADMIN_ASSETS_URL?>lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?php echo ADMIN_ASSETS_URL?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.filemgr.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.dashboard.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/skin.light.css">
</head>
<body>
<aside class="aside aside-fixed">
<div class="aside-header">
<a href="<?php ADMIN_URL; ?>dashboard" class="aside-logo"><?php echo $resthemeData->theme_store_name;?></a>
<a href="" class="aside-menu-link">
<i data-feather="menu"></i>
<i data-feather="x"></i>
</a>
</div>
<div class="aside-body">
<div class="aside-loggedin">
<div class="d-flex align-items-center justify-content-start">
<a href="" class="avatar"><img src="<?php if($user_role==0){echo (isset($session_user_data->staff_logo) && $session_user_data->staff_logo!="")?SITE_UPLOAD_URL.SITE_STAFF_IMAGE.$session_user_data->staff_logo:SITE_NO_IMAGE_PATH;}else{ echo (isset($session_user_data->ins_logo) && $session_user_data->ins_logo!="")?SITE_UPLOAD_URL.SITE_INSTITUTE_IMAGE.$session_user_data->ins_logo:SITE_NO_IMAGE_PATH;}?>" class="rounded-circle" alt=""></a>
<div class="aside-alert-link">
<a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
<a href="<?php echo e(route('notification')); ?>" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
<a href="<?php echo e(route('adminLogout')); ?>" onclick="return confirm('Are you sure you want to logout?')" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
</div>
</div>
<div class="aside-loggedin-user">
<a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
<h6 class="tx-semibold mg-b-0"><?php if($user_role==0){echo $session_user_data->staff_name;}else{echo $session_user_data->ins_name;}?></h6>
<i data-feather="chevron-down"></i>
</a>
<p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
</div>
<div class="collapse" id="loggedinMenu">
<ul class="nav nav-aside mg-b-0">
<li class="nav-item"><a href="<?php echo e(route('account-setting')); ?>" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
<li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
<li class="nav-item"><a href="<?php echo e(route('adminLogout')); ?>" onclick="return confirm('Are you sure you want to logout?')" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
</ul>
</div>
</div><!-- aside-loggedin -->
<ul class="nav nav-aside">
    
<li class="nav-item <?php echo (isset($title) && $title == 'Dashboard')?'active':''; ?>"><a href="<?php echo e(route('dashboard')); ?>" class="nav-link"><i data-feather="airplay"></i> <span>Dashboard</span></a></li>

<li class="nav-item <?php echo (isset($title) &&  $title == 'Manage Roles')?'active':''; ?>"><a href="<?php echo e(route('services')); ?>"  class="nav-link"><i data-feather="box"></i> <span>Services</span></a></li>


<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Faculty' || $title == 'Add New Faculty')?'active show':''; ?>">
<a href="#" class="nav-link"><i data-feather="user"></i> <span>Technicians</span></a>
<ul>
<li class="<?php echo (isset($title) && $title == 'Faculty')?'active':''; ?>"><a href="<?php echo e(route('faculty')); ?>" >Manage Technician</a></li>
<li class="<?php echo (isset($title) && $title == 'Add New Faculty')?'active':''; ?>"><a href="<?php echo e(route('add-new-faculty')); ?>" >Add New Technician</a></li>
</ul>
</li>


<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Slider' )?'active show':''; ?>">
<a href="#" class="nav-link"><i data-feather="gift"></i> <span>Appearance</span></a>
<ul>
<li class="<?php echo (isset($title) && $title == 'Slider')?'active':''; ?>"><a href="<?php echo e(route('slider')); ?>" >Slider</a></li>
</ul>
</li>

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Settings' || $title == 'Account Setting')?'active show':''; ?>">
<a href="" class="nav-link"><i data-feather="settings"></i> <span>Settings</span></a>
<ul>
<?php if($user_role==0){?>
<li class="<?php echo (isset($title) && $title == 'Settings')?'active':''; ?>"><a href="<?php echo e(route('store-setting')); ?>">Store Setting</a></li>
<?php } ?>
<li class="<?php echo (isset($title) && $title == 'Account Setting')?'active':''; ?>"><a href="<?php echo e(route('account-setting')); ?>">Account Setting</a></li>
</ul>
</li>

</ul>
</div>
</aside>

<div class="content ht-100v pd-0">
<div class="content-header">
<nav class="nav">
<a href="#" class="btn btn-sm pd-x-15 btn-white  mg-r-5" style="padding:4px 10px 2px">Visit Site</a>
</nav>
<nav class="nav">
<div class="aside-alert-link">
<a href="<?php echo CHAT_URL;?>" class="btn btn-sm pd-x-15 btn-white  mg-r-5" style="padding:4px 10px 2px"><i data-feather="message-square"></i> Chat</a>

<!--<a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
<a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
<a href="<?php echo e(route('adminLogout')); ?>" onclick="return confirm('Are you sure you want to logout?') "data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>-->
</div>
</nav>


</div><!-- content-header -->
<?php echo $__env->yieldContent('content'); ?>
</div>
<script src="https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/feather-icons/feather.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.aside.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.sampledata.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashboard-one.js"></script>

<!-- append theme customizer -->
<script src="<?php echo ADMIN_ASSETS_URL?>lib/js-cookie/js.cookie.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.settings.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/admin.js"></script>

</body>
</html>
<?php /**PATH D:\php\xamp\htdocs\bpi\resources\views/Csadmin/Layout/app.blade.php ENDPATH**/ ?>