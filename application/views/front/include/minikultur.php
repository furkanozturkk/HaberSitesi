<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href='<?php echo base_url('anasayfa/kultur'); ?>'>KÜLTÜR HABERLERİ</a></h3></div>
<div class="clearfix"></div>
<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $skat=3; $sveriler=sonhabercek($skat);foreach ($sveriler as $veri) { ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?php echo $veri['title']; ?>' width='409' height='260' src='<?php echo base_url(); echo $veri['tmb'] ?> '>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a></div>
</div>
<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($veri['tarih']); ?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i>0</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i><?php echo $veri['hit']; ?></div>
</div>
<div class="box-news-desc">
<?php echo word_limiter($veri['icerik'],25); ?>
</div>
<div class="post-more"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" class="button-default small" rel="bookmark">Devamı</a></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
<?php $skat=3;$veriler = habercek($skat); foreach ($veriler as $veri) { ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?php echo $veri['title']; ?>' width='94' height='73' src='<?php echo base_url(); echo $veri['mini'] ?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a></div>
</div>
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($veri['tarih']); ?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i>0</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i><?php echo $veri['hit']; ?></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>