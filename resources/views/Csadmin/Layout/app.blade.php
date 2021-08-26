
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($resthemeData->theme_favicon) && $resthemeData->theme_favicon!="")?SITE_UPLOAD_URL.SITE_THEME_IMAGE.$resthemeData->theme_favicon:SITE_NO_IMAGE_PATH;?>">
<title><?php echo $title;?></title>
<link href="<?php echo ADMIN_ASSETS_URL?>lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?php echo ADMIN_ASSETS_URL?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/jqvmap.min.css" rel="stylesheet">
<link href="<?php echo ADMIN_ASSETS_URL?>lib/prismjs/themes/prism-vs.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>lib/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/skin.light.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.filemgr.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.dashboard.css">
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_URL?>assets/css/dashforge.demo.css">
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
<a href="" class="avatar"><img src="<?php if($user_role==0){echo (isset($resthemeData->theme_logo) && $resthemeData->theme_logo!="")?SITE_UPLOAD_URL.SITE_THEME_IMAGE.$resthemeData->theme_logo:SITE_NO_IMAGE_PATH;}else{ echo (isset($session_user_data->ins_logo) && $session_user_data->ins_logo!="")?SITE_UPLOAD_URL.SITE_INSTITUTE_IMAGE.$session_user_data->ins_logo:SITE_NO_IMAGE_PATH;}?>" class="rounded-circle" alt=""></a>
<div class="aside-alert-link">
<a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
<a href="{{route('notification')}}" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
<a href="{{route('adminLogout')}}" onclick="return confirm('Are you sure you want to logout?')" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
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
<li class="nav-item"><a href="{{route('account-setting')}}" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
<li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
<li class="nav-item"><a href="{{route('adminLogout')}}" onclick="return confirm('Are you sure you want to logout?')" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
</ul>
</div>
</div><!-- aside-loggedin -->
<ul class="nav nav-aside">
<!------------------------->
<li class="nav-item <?php echo (isset($title) && $title == 'Dashboard')?'active':''; ?>"><a href="{{route('dashboard')}}" class="nav-link"><i data-feather="airplay"></i> <span>Dashboard</span></a></li>
<!------------------------->

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Manage Appointment' || $title == 'Add New Appointment' || $title == 'Calender' )?'active show':''; ?>">
	<a href="#" class="nav-link"><i data-feather="calendar"></i> <span>Appointment</span></a>
	<ul>
		<li class="<?php echo (isset($title) && $title == 'Manage Appointment' || $title == 'View Appointment' )?'active':''; ?>"><a href="{{route('manageappointment')}}" >Manage Appointment</a></li>
		<li class="<?php echo (isset($title) && $title == 'Calender')?'active':''; ?>"><a href="{{route('calender')}}" >Calendar</a></li>
		<li class="<?php echo (isset($title) && $title == 'Add New Appointment')?'active':''; ?>"><a href="#modaladdapponiment" data-toggle="modal" >Add New</a></li>
	</ul>
</li>
<!------------------------->

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Manage Customer' || $title == 'Add New Customer' )?'active show':''; ?>">
	<a href="#" class="nav-link"><i data-feather="users"></i> <span>Customers</span></a>
	<ul>
		<li class="<?php echo (isset($title) && $title == 'Manage Customer')?'active':''; ?>"><a href="{{route('managecustomer')}}" >Manage Customers</a></li>
		<li class="<?php echo (isset($title) && $title == 'Add New Customer')?'active':''; ?>"><a href="#modaladdcustomers" data-toggle="modal" >Add New</a></li>
	</ul>
</li> 
<!------------------------->

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Manage Services' || $title == 'Add New Service' || $title == 'Question' || $title == 'Add New Service Question')?'active show':''; ?>">
	<a href="#" class="nav-link"><i data-feather="briefcase"></i> <span>Services</span></a>
	<ul>
		<li class="<?php echo (isset($title) && $title == 'Manage Services' || $title == 'Question' || $title == 'Add New Service Question' )?'active':''; ?>"><a href="{{route('services')}}" >Manage Services</a></li>
		<li class="<?php echo (isset($title) && $title == 'Add New Service')?'active':''; ?>"><a href="{{route('add-new-service')}}" >Add New</a></li>
	</ul>
</li>
<!------------------------->

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Manage Technician' || $title == 'Add New Technician'  || $title == 'View Technician' || $title=='Technician Group' || $title == 'Manage Roles' || $title == 'Permission')?'active show':''; ?>">
	<a href="#" class="nav-link"><i data-feather="briefcase"></i> <span>Technician</span></a>
	<ul>
		<li class="<?php echo (isset($title) && $title == 'Manage Technician'  || $title == 'View Technician')?'active':''; ?>"><a href="{{route('technician')}}" >Manage Technician</a></li>
		<li class="<?php echo (isset($title) && $title == 'Add New Technician')?'active':''; ?>"><a href="{{route('add-new-technician')}}" >Add New Technician</a></li>
	<!--	<li class="<?php echo (isset($title) && $title=='Technician Group')?'active':''; ?>"><a href="{{route('technician-group')}}" >Technician Group</a></li>-->
		<li class="<?php echo (isset($title) && $title == 'Manage Roles'|| $title == 'Permission')?'active':''; ?>"><a href="{{route('technician-role')}}" >Roles</a></li>
	</ul>
</li>


<!------------------------->

<li class="nav-item with-sub <?php echo (isset($title) && $title == 'Settings' || $title == 'Account Setting')?'active show':''; ?>">
	<a href="" class="nav-link"><i data-feather="settings"></i> <span>Settings</span></a>
	<ul>
		<?php if($user_role==0){?>
		<li class="<?php echo (isset($title) && $title == 'Settings')?'active':''; ?>"><a href="{{route('store-setting')}}">Store Setting</a></li>
		<?php } ?>
		<li class="<?php echo (isset($title) && $title == 'Account Setting')?'active':''; ?>"><a href="{{route('account-setting')}}">Account Setting</a></li>
	</ul>
</li>
<!------------------------->

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
<a href="#" class="btn btn-sm pd-x-15 btn-white  mg-r-5" style="padding:4px 10px 2px"><i data-feather="message-square"></i> Chat</a>
<!--<a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
<a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
<a href="{{route('adminLogout')}}" onclick="return confirm('Are you sure you want to logout?') "data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>-->
</div>
</nav>
</div>
@yield('content')
</div>
@include('Csadmin.appointmentmodal',['resCustomerData'=>$resCustomerData,'resParentServicesData'=>$resParentServicesData,'resTechnicianData'=>$resTechnicianData])
@include('Csadmin.customermodal')
<script src="https://cdn.ckeditor.com/4.12.1/full-all/ckeditor.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/feather-icons/feather.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/prismjs/prism.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>lib/select2/js/select2.min.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.aside.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.sampledata.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashboard-one.js"></script>
<!-- append theme customizer -->
<script src="<?php echo ADMIN_ASSETS_URL?>lib/js-cookie/js.cookie.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/dashforge.settings.js"></script>
<script src="<?php echo ADMIN_ASSETS_URL?>assets/js/admin.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>var token = '<?php echo csrf_token(); ?>';</script>
<script>
    var base_url = '<?php echo ADMIN_URL?>';
  $(function() {
    $( "#sortable1").sortable({
        connectWith: ".connectedSortable", 
	    update:function(){ 
		var aryOrderInfo = {'sliderid':[],'ordernum':[],'_token':[]};
		$('.clsSingleSelectTr').each(function(){
			
			var intsliderid =$(this).attr('sliderid');
			var intOrderNum = parseInt(1)+parseInt($(this).index());
			aryOrderInfo['sliderid'].push(intsliderid);
			aryOrderInfo['ordernum'].push(intOrderNum);
            aryOrderInfo['_token'].push(token);
		});  
		$.post(base_url+'question/updateorder',aryOrderInfo,function(response){
		    
		    window.location.href=window.location.href;
		});
	  }
    }).disableSelection();
  });
  
  </script>
<script>
// Adding placeholder for search input
(function($) {

'use strict'

var Defaults = $.fn.select2.amd.require('select2/defaults');

$.extend(Defaults.defaults, {
searchInputPlaceholder: ''
});

var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

var _renderSearchDropdown = SearchDropdown.prototype.render;

SearchDropdown.prototype.render = function(decorated) {

// invoke parent method
var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

return $rendered;
};

})(window.jQuery);


$(function(){
'use strict'

// Basic with search
$('.select2').select2({
placeholder: 'Choose one',
searchInputPlaceholder: 'Search options'
});

$('.select3').select2({
placeholder: 'Choose one',
searchInputPlaceholder: 'Search options'
});

// Disable search
$('.select2-no-search').select2({
minimumResultsForSearch: Infinity,
placeholder: 'Choose one'
});

// Clearable selection
$('.select2-clear').select2({
minimumResultsForSearch: Infinity,
placeholder: 'Choose one',
allowClear: true
});

// Limit selection
$('.select2-limit').select2({
minimumResultsForSearch: Infinity,
placeholder: 'Choose one',
maximumSelectionLength: 2
});

});
</script>

<script>var token = '<?php echo csrf_token(); ?>';</script>
<script>
    var base_url = '<?php echo ADMIN_URL?>';
    function getCustomerAddress(value)
    {
        var datastring = 'customer_id='+value+'&_token='+token;
        $.post(base_url+'appointment/getCustomerAddressAjex',datastring,function(response){
            $('#address_hide').show();
            $('#addressData').html(response);
        });
    }
    function getServiceChild(value)
    {
        var service = $('#service_category').val();
        var datastring = 'service_id='+service+'&_token='+token;
        $.post(base_url+'appointment/serviceCatProccessAjex',datastring,function(response){
            $('#childService').html(response);
        });
    }
    function setDate(value){
       $('input[name="ca_end_date"]').val(value); 
       //localStorage.setItem("eventime",value);
    }
    function setTime(value){  
        var va = value;
        if(va){
            var h = parseInt(va.split(':')[0]);
            var m = (va.split(':')[1]).split(' ')[0];
            var ampm;
            if(h>=12){ampm = 'PM';}else{ampm = 'AM';}
            var HG = h+1;
            if(HG<10){HG = '0'+HG;}
            var newt = HG+':'+m+' '+ampm;
            $('#ca_end_time').val(newt).trigger('change'); 
        }
     }
     
</script>

</body>
</html>
