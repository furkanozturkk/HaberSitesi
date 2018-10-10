<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php $this->load->view('front/include/head'); ?>
<body class="home page-template-default page page-id-1129">
<div class="background-cover"></div>
<div id="wrap" class="grid_1200 fixed-enabled ">
<div class="wrap-content">
<div class="clearfix"></div>
<div class="clearfix"></div>
<?php $this->load->view('front/include/header'); ?>
<div class="main-header-footer">
<div class="clearfix"></div>
<div class="main-sections">
<div id="sections-id-1" style='' class="sections-content sections-builder sections sections-full-width">
<div class="container">
<div class="row">
<div class="with-sidebar-container sidebar-container-builder">
<div class="main-container col-md-12">
<div class="row">
<div class="col-md-12">
<?php $this->load->view('front/include/gallery'); ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="sections-id-3" style='' class="sections-content sections-builder sections sections-right-sidebar">
<div class="container">
<div class="row">
<div class="with-sidebar-container sidebar-container-builder">
<div class="main-container col-md-8">
<div class="row">
<?php 
$this->load->view('front/include/minisiyaset');
$this->load->view('front/include/miniekonomi');
$this->load->view('front/include/minikultur');
$this->load->view('front/include/minimagazin');
$this->load->view('front/include/minispor');
$this->load->view('front/include/minisaglik');

?>
<div class='clearfix'></div>
<?php $this->load->view('front/include/sondakika'); ?>
<?php $this->load->view('front/include/soneklenen'); ?>
<div class="first-sidebar sidebar-col col-md-4 sticky-sidebar">
<aside class="sidebar">
<?php 
$this->load->view('front/include/arama');
$this->load->view('front/include/smedya');
$this->load->view('front/include/tablar');
$this->load->view('front/include/sonhaberler');
$this->load->view('front/include/koseyazari');
?>
</aside>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('front/include/footer');?>
</body>
</html>
