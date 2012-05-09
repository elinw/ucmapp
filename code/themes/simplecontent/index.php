<?php
	$this->setBody(
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'
		);

		// This navigation is going to be loaded for all pages.
		$factory  = JContentFactory::getInstance();
		$topnav = $factory->getContent('Navigation')->load(1510);
		$sidenav = $factory->getContent('Navigation')->load(1518);

	echo '<html>
			<head>
				<link rel="stylesheet" href="themes/simplecontent/css/template.css" type="text/css" />
				<link rel="stylesheet" href="themes/simplecontent/css/bootstrap/css/bootstrap.css" type="text/css" />
				<title>Hello UCM! ';
				if (isset($content))
				{
							echo  $content->title;
				}
				echo '</title>
			</head>
	<body >';

	echo
		'<div class="navbar navbar span10 offset2">
			<div class="navbar-inner">
			<div class="container">';
				echo $topnav->body ;
			echo '</div></div></div>';
			echo '<div class="clear"></div>';
	echo '<div class="container-fluid">';
	echo '<div class="span2" >';
	echo '<div id="page-nav" class="well sidebar-nav">';
	echo  $sidenav->body ;
	echo '</div></div>';
	echo '<div class="span8">';

	echo $output; 			
	echo '<div class="span2"></div>';
	echo '</div >';
	echo '</div ></div >';
	echo '</body></html>';
