<div id="widget_posts-5" class="widget widget-posts">
<div class="widget-title">
<h3>Son Haberler</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php  $bilgi=sonhaberler();foreach ($bilgi as $bilgi) { ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?php echo $bilgi['title']; ?>' width='94' height='73' src='<?php echo base_url(); echo $bilgi['mini'] ?>'>
<?php if ($bilgi['kategori']=='Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($bilgi['kategori']=='Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($bilgi['kategori']=='Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($bilgi['kategori']=='Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($bilgi['kategori']=='Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($bilgi['kategori']=='Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>	
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($bilgi['kategori']=='Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>
<?php }elseif ($bilgi['kategori']=='Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>
<?php }elseif ($bilgi['kategori']=='Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>	
<?php }elseif ($bilgi['kategori']=='Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>	
<?php }elseif ($bilgi['kategori']=='Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>
<?php }elseif ($bilgi['kategori']=='Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title'] ?></a></div>	
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($bilgi['tarih']); ?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i>7</a>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?> 
</ul>
</div>
</div>