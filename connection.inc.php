<?php
session_start();
$con=mysqli_connect("localhost","root","","avera");
define('SERVER_PATH',$_SERVER ['DOCUMENT_ROOT'].'/php/cosmetics web/');
define('SITE_PATH','http://localhost/php/cosmetics%20web/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>