<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $this->session->userdata('lang'); ?>">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="xnor" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("style.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("css/dark.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("css/font-icons.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("css/animate.css") ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url("css/magnific-popup.css") ?>" type="text/css" />

	<link rel="stylesheet" href="<?= base_url("css/responsive.css") ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Favicon & Apple Touch Icon
	============================================= -->
	
	<!-- <link rel="apple-touch-icon" href="touch-icon-iphone.png"> -->
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url("images/favicon152.png") ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url("images/favicon120.png") ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url("images/favicon76.png") ?>">
	<link rel="icon" href="<?= base_url("images/favicon16.png") ?>" type="image/png" sizes="16x16">

	<!-- Document Title
	============================================= -->
	<title><?php echo $title ?></title>

</head>

<body class="stretched no-transition no-smooth-scroll">

    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">