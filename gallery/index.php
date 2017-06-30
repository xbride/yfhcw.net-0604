<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>HTML5 File Drag and Drop Upload with jQuery and PHP | Tutorialzine Demo</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
		
		<?php

		// Include the UberGallery class
		include('resources/UberGallery.php');
	
		// Initialize the UberGallery object
		$gallery = new UberGallery();
	
		// Initialize the gallery array
		$galleryArray = $gallery->readImageDirectory('gallery-images');
	
		// Define theme path
		if (!defined('THEMEPATH')) {
			define('THEMEPATH', $gallery->getThemePath());
		}
	
		// Set path to theme index
		$themeIndex = $gallery->getThemePath(true) . '/index.php';
	
		// Initialize the theme
		if (file_exists($themeIndex)) {
			include($themeIndex);
		} else {
			die('ERROR: Failed to initialize theme');
		}
		?>
		
		
	
		<div id="dropbox">
			 
			<span class="message">把要添加到图库的图片拖到这里. <br /><i></i></span></div>
		
        <footer>
	        <h2>在线产品图库管理</h2>
        <a class="tzine" href="http://yfhcw.net/home">官网首页</a>        </footer>
        
        <!-- Including The jQuery Library -->
		<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
		
		<!-- Including the HTML5 Uploader plugin -->
		<script src="assets/js/jquery.filedrop.js"></script>
		
		<!-- The main script file -->
        <script src="assets/js/script.js"></script>
    </body>
</html>



