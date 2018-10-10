<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bizim Haber | Siyaset</title>
<?php $this->load->view('front/include/style'); ?>
</head>
<body class="archive category category-world category-4">
<div class="background-cover"></div>
<div id="wrap" class="grid_1200 fixed-enabled ">
<div class="wrap-content">
<div class="clearfix"></div>
<?php $this->load->view('front/include/katheader'); ?>
<div class="main-header-footer">
<?php $this->load->view('front/siyaset/breadcrumb'); ?>
<div class="clearfix"></div>
<div class="main-sections">
<div class="sections sections-content sections-right-sidebar sections-sidebars">
<div class="container">
<div class="row">
<div class="with-sidebar-container">
<div class="col-md-8 main-container">
<div class="post-title">
<h3>KATEGORİ : SİYASET</h3>
</div>
<div class="clearfix"></div>
<div class='all-blogs'>
<?php $this->load->view('front/siyaset/main_content'); ?>
</div>
<!-- Sayfalama -->
</div>
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
<div class="clearfix"></div>
</div>
<?php $this->load->view('front/include/footer'); ?>
</body>
</html>
