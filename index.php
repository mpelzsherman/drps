<?
	$jqueryBaseDir = 'jquery-ui-1.7.2.custom';
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Dori Pelz-Sherman, PhD., CST</title>
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="<?=$jqueryBaseDir?>/css/eggplant/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link type="text/css" href="jquery_overrides.css" rel="stylesheet" />
<link type="text/css" href="main.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
</script>
</head>

<body>

<div id="tabs">
	<div id='top-banner'>
		<table><tr><td height=30>&nbsp;</td></tr>
		<tr><td style='filter: Shadow(Color=black, 	
			Direction=135, Strength=10);'>
		<span class='banner-text'>Dori Pelz-Sherman, PhD., CST</span><br/><br/>
		<span class='banner-sub-text'>Licensed Psychologist</span><br/>
		<span class='banner-sub-text'>Consultant</span>
		</td>
		<td valign=top>
		&nbsp;&nbsp;
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="165" height="38" id="niftyPlayer1" align="">
		<param name=movie value="niftyplayer/niftyplayer.swf?file=RainySunday-Excerpt.mp3&as=1">
		<param name=quality value=high>
		<param name=bgcolor value=#FFFFFF>
		<embed src="niftyplayer/niftyplayer.swf?file=RainySunday-Excerpt.mp3&as=1" quality=high bgcolor=#FFFFFF width="165" height="38" name="niftyPlayer1" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
		</embed>
		</object>
		<br/><br/>
		<div id="banner_contact">		
		To schedule an appointment,<br/>call 919-434-1661<br />
		or email: <a href=mailto:dori@pelz-sherman.net>dori@pelz-sherman.net</a>
		</div>
		</td>
		</tr></table>
	</div>
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#services">Services</a></li>
		<li><a href="#sandplay">Sandplay</a></li>
		<li><a href="#autism">Autism</a></li>
		<li><a href="#ppd">Infants</a></li>
		<li><a href="#presos">Presentations</a></li>		
		<li><a href="#research_pubs">Research/Pubs</a></li>
		<li><a href="#appointments">Contact</a></li>
	</ul>
	<div class='content-parent' id="home"><? require('dps_home.html'); ?></div>
	<div class='content-parent' id="about"><? require('about.html'); ?></div>	
	<div class='content-parent' id="services"><? require('services.html'); ?></div>	
	<div class='content-parent' id="research_pubs"><? require('research_pubs.html'); ?></div>
    <div class='content-parent' id="presos"><? require('presos.php'); ?></div>	 
    <div class='content-parent' id="autism"><? require('autism.html'); ?></div>	 
    <div class='content-parent' id="sandplay"><? require('sandplay.html'); ?></div>	                         
    <div class='content-parent' id="appointments"><? require('appointments.html'); ?></div>
    <div class='content-parent' id="ppd"><? require('ppd.html'); ?></div>    
</div>

</body>
</html>