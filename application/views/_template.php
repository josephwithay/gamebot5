<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * The Glorious Template
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>{pageTitle} | {site-title}</title>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
		<link rel="shortcut icon" type="image/ico" href="{appRoot}/images/favicon.ico" />
		{loadStyles}
	</head>
	<body>
		<header>
			<div id='header-in'>
				<a href="{appRoot}/">
					<img src="{appRoot}/images/banner.png"/>
				</a>
			</div>
		</header>
		<nav id='navigation'>
			{menubar}
		</nav>
		<div id="container">
			<div id="content">
				<div id='content-in'>
					<form id="login">
						{loginForm}
					</form>
					{content}
				</div>
			</div>
		</div>
		<footer>
			<p id='footer-in'>Copyright &copy; 2016 <strong>Group 5 - Assignment 1</strong></p>
		</footer>
	</body>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
	{loadScripts}
</html>
