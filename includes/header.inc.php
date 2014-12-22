<!DOCTYPE HTML>
<html>
<head>
<!--
Prolocksmithfl App 2013 - 1.0
Created April 4th 2013
Created by Valery Y. Samovich
Locksmith Business Application
-->
<title><?php echo constant("SITENAME") . ". " . constant(strtoupper($pagelet) . '_TITLE'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo constant('META_KEYS') . ' ' . constant(strtoupper($pagelet) . '_KEYS'); ?>" />
<meta name="description" content="<?php echo constant('META_DESC') . ' ' . constant(strtoupper($pagelet) . '_DESC'); ?>" />
<meta name="author" content="<?php echo constant('META_AUTHOR')?>" />
<meta name="copyright" content="<?php echo constant('META_COPY')?>" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/analyticstracking.js"></script><!-- Google Analytics -->
<script type="text/javascript" src="scripts/jquery-1.8.2.js"></script>
<script type="text/javascript" src="scripts/slideshow.js"></script>
<script type="text/javascript" src="scripts/slideshowgallery.js"></script>
<script type="text/javascript" src="scripts/validate.js"></script>
</head>

<body>
<!-- Header element -->
<div id="header">
	<div id="header-top">
		<span id="date"><?php showDate(); ?></span>
        <span id="google">
        	<!-- Google Plus-->
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-annotation="inline" data-width="300"></div>
			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
  			(function() {
    			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
   				po.src = 'https://apis.google.com/js/plusone.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  			})();
			</script>
    	<span>
    </div>
    <div id="header-middle">
    	<p id="header-logo">PRO<span class="orange">LOCK</span>SMITH FL</p>
        <p id="header-description">LOCKSMITH SERVICES IN ORLANDO AND CENTRAL FLORIDA</p>
        <p id="header-phone">(407)319-8304</p>
    </div>
    <div id="header-bottom">
    </div>
</div>
<!-- End of header -->