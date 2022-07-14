<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $this->session->userdata('lang'); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="xnor">
    <!-- Favicon icon -->
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url("images/favicon152.png") ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url("images/favicon120.png") ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url("images/favicon76.png") ?>">
	<link rel="icon" href="<?= base_url("images/favicon16.png") ?>" type="image/png" sizes="16x16">
    <title><?php echo $title?></title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url("panel/assets/libs/select2/dist/css/select2.min.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("panel/assets/libs/jquery-minicolors/jquery.minicolors.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("panel/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url("panel/assets/libs/quill/dist/quill.snow.css")?>">
    <link rel="stylesheet" href="<?=base_url("panel/dist/css/style.min.css")?>">