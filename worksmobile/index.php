<?php

ob_start();
if (!isset($_SESSION)) { session_start();}


function doEncrypt($string)
{
	$rand = substr(md5(microtime()),rand(0,26),2);
	$crystr = "".$rand."".base64_encode($string)."";
	return $crystr;
}


if(isset($_GET['login'])){


$_SESSION['UZ_login']=doEncrypt($_GET['login']);

header('location:login_accessUrl.php');

}else{
	
	header('location:noemail.php');
}

?>

