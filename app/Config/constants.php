<?php
if (!defined('DS')) {
   define('DS', DIRECTORY_SEPARATOR);
}
define('ROOT', dirname(__DIR__));
$strPath ='';
  ////$_SERVER['HTTP_HOST'];
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost' || isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='192.168.1.38')
{
   $strPath ='bpi/';
}else{
   $strPath ='bpi/';
}
define('SITE_TITLE',"BPI");
define('SITE_ABS_PATH',$strPath);
define('SITE_PATH',$_SERVER['DOCUMENT_ROOT'].'/'.SITE_ABS_PATH);
define('SITE_URL',((isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on'))?'https://':'http://').(isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'').'/'.SITE_ABS_PATH);
define('ADMIN_URL',SITE_URL.'csadmin/');
define('ADMIN_ASSETS_URL',SITE_URL.'public/admin-assets/');
define('SITE_ASSETS_URL',SITE_URL.'public/assets/');
define('SITE_UPLOAD_URL',SITE_URL.'public/img/uploads/');
define('SITE_UPLOAD_PATH',SITE_PATH.'public/img/uploads/');
define('SITE_NO_IMAGE_PATH',SITE_URL.'public/img/500.png');

/* define('SITE_MPDF57',SITE_URL.'public/MPDF57/vendor/autoload.php');
define('SITE_UPLOAD_REPORT_PATH',SITE_PATH.'public/pdf/');
define('SITE_UPLOAD_REPORT_URL',SITE_URL.'public/pdf/'); */

define('SITE_THEME_IMAGE','theme_images/');
define('SITE_QUESTIONS_IMAGE_PATH','questions_images/');
define('SITE_FACULTY_IMAGE','faculty_images/');
define('CHAT_URL',SITE_URL.'chat/');
define('SITE_SLIDER_IMAGE','slider_images/');

define('SITE_STAFF_IMAGE','staff_images/');
