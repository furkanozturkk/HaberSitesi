<div class="col-md-12">
<div class="box-border">
<div class='all-blogs'>
	<?php  foreach ($bilgi as $bilgi) { ?>
<article class="v-post clearfix article-title-meta-image post-style-6 animation post--content image_post post-no-border post-1912 post type-post status-publish format-standard has-post-thumbnail hentry category-business" data-animate="fadeInUp" itemscope=""
itemtype="http://schema.org/Article">
<div class="post-img post-img-9">
<?php if ($bilgi['kategori']=='Siyaset') { ?>
<a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>
<?php }elseif ($bilgi['kategori']=='Ekonomi') { ?>
<a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>
<?php }elseif ($bilgi['kategori']=='Kültür') { ?>
<a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>
<?php }elseif ($bilgi['kategori']=='Sağlık') { ?>
<a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>
<?php }elseif ($bilgi['kategori']=='Spor') { ?>
<a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>
<?php }elseif ($bilgi['kategori']=='Magazin') { ?>
<a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark" class='post-img-link'>	
<?php } ?>
 
<img alt='<?php echo $bilgi['title']; ?>' width='280' height='230' src='<?php echo base_url(); echo $bilgi['tmb']; ?>'>
</a>
</div>
<div class='post-inner-6'>
<h1 class="post-head-title">
<?php if ($bilgi['kategori']=='Siyaset') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>
<?php }elseif ($bilgi['kategori']=='Ekonomi') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>
<?php }elseif ($bilgi['kategori']=='Kültür') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>
<?php }elseif ($bilgi['kategori']=='Sağlık') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>
<?php }elseif ($bilgi['kategori']=='Spor') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>
<?php }elseif ($bilgi['kategori']=='Magazin') { ?>
<a itemprop="url" href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a>	
<?php } ?>
</h1>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($bilgi['title']); ?></div>
<div class="post-meta-category"><i class="fa fa-folder-o"></i><a href="#" rel="category tag"><?php $bilgi['kategori']; ?></a></div>
<div class="post-meta-comment"><i class="fa fa-comments-o"></i>0 Yorum</div>
</div>
<div class="clearfix"></div>
<div class="post-inner">
<?php echo word_limiter($bilgi['icerik'],35); ?>
	<?php if ($bilgi['kategori']=='Siyaset') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php }elseif ($bilgi['kategori']=='Ekonomi') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php }elseif ($bilgi['kategori']=='Kültür') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php }elseif ($bilgi['kategori']=='Sağlık') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php }elseif ($bilgi['kategori']=='Spor') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php }elseif ($bilgi['kategori']=='Magazin') { ?>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
<?php } ?>
<div class="clearfix"></div>
</div>
</div>
</article>
<?php } ?>
</div>
</div>
</div>
<div class="not_duplicate_array" data-not_duplicate=""></div>
</div>
<?php echo $linkler ?>
</div>