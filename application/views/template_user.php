<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
<link rel="icon" href="<?=base_url()?>assets/favicon.ico" type="image/x-icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,70asubset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Bootstrap Core Css -->
<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- waves Effect Css -->
<link href="<?=base_url()?>assets/plugins/node-waves/waves.css" rel="stylesheet" />
<!-- Animation Css -->
<link href="<?=base_url()?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
<!-- Morris Chart Css-->
<link href="<?=base_url()?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
<!-- AdminBsB Themes. You can choose a there 'tom css/themes instead of get all -->
<link href="<?=base_url()?>assets/css/themes/all-themes.css" rel="stylesheet" />
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
<div class="loader">
<div class="preloader">
<div	class="spinner-layer pl-red">
<div	class="circle-clipper left">
<div	class="circle"></div>
<div/>
<div class="circle-clipper right">
<div class="circle"></div>
</div>

<section class="content">
  <div class="container-fluid">
      <?php
      $this->load->view($konten)
       ?>
  </div>
</section>
