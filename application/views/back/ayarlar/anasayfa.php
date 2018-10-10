<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('back/include/head'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/sidebar'); ?>
<div class="content-wrapper">
<?php $this->load->view('back/ayarlar/breadcrumb'); ?>
<?php $this->load->view('back/ayarlar/main_content'); ?>
</div>
<?php $this->load->view('back/include/footer'); ?>
</div>
<?php $this->load->view('back/include/script'); ?>
</body>
</html>
