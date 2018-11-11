<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WoWBeez</title>
<link href="style/main.css" type="text/css" rel="stylesheet">
<link href="style/jquery-ui.css" type="text/css" rel="stylesheet">
<link href="style/ui.selectmenu.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/ui.selectmenu.js"></script>
<script>
	$(function(){
		$('select.styled').selectmenu({style:'dropdown'});
		$('select#select-realm').selectmenu({
				icons: [
					{find: '.wotlk'},
					{find: '.cataclysm'}
				]
			});
	});
</script>
<script type="text/javascript" src="js/jquery.spritely-0.6.1.js"></script>
<script>
	$(document).ready(function(){
	  $('#animation_logo').pan({fps: 22, speed: 22, dir: 'right'});
	});
</script>
</head>

<body>
<div class="wrapper"> <!-- WRAPPER -->
		
        
	
    <!-- Header -->
    <div class="header" id="header">
    
   		<!-- LOGO Animation -->
            <div class="animation_logo_holder">
                <div class="animation_logo_overlay"></div>
                <div id="animation_logo"></div>
            </div>
        <!-- LOGO Animation.End -->
        
    	
        <a href="./" class="header-logo"></a>
        <a href="./sub-page.php" class="register-btn"><p></p><span></span></a>
        
        <!-- IF LOGGED IN  
        	<a href="./account-panel.php" class="account-panel-head-btn"><p></p><span></span></a>  
        End -->
        
        <div style=" height:162px; width:1px;"></div>
        
        <ul class="menu">
            
        	<li><a id="home" href="./"><p></p><span></span></a></li>
            <li><a id="comm" href="#"><p></p><span></span></a></li>
            <li><a id="connect" href="#"><p></p><span></span></a></li>
            <li><a id="support" href="#"><p></p><span></span></a></li>
            <li><a id="ranking" href="./pvp-stats.php"><p></p><span></span></a></li>
            <li><a id="rinfo" href="#"><p></p><span></span></a></li>
        </ul>
        
    </div>
    <!-- Header.End -->
    
    <!-- Body -->
    <div class="body">
    	<div class="body-top-fix"></div>
