<div class="col-md-12">
<div class="scroll-news scroll-posts-half scroll-news-new scroll-arrow-top">
<div class="post-title post-title-news">
<h3>SON DAKİKA HABERLER</h3></div>
<div class="clearfix"></div>
<div class="row">
<div class="head-slide scroll-posts head-slide-show">
<ul>
<li class='slider-item'>
<?php $sd=2; $sveriler=sondakika1($sd);foreach ($sveriler as $veri) { ?>
<article class="slide-item col-xs-4 col-md-4">
<div class="slide-content">
<div class="slide-data">
<div class="slide-data-outer">
<div class="slide-data-inner">
<?php if ($veri['kategori']=='Siyaset') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/siyasetdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($veri['kategori']=='Ekonomi') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/ekonomidetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($veri['kategori']=='Kültür') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($veri['kategori']=='Sağlık') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/saglikdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($veri['kategori']=='Spor') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/spordetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($veri['kategori']=='Magazin') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/magazindetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a>	
<?php } ?>

<span class="slide-category">
<?php if ($veri['kategori']=='Siyaset') { ?>
<a href="<?php echo base_url('anasayfa/siyaset') ?>" title="Siyaset"><?php echo $veri['kategori'] ?></a><?php }elseif ($veri['kategori']=='Ekonomi') { ?>
<a href="<?php echo base_url('anasayfa/ekonomi') ?>" title="Ekonomi"><?php echo $veri['kategori'] ?></a><?php }elseif ($veri['kategori']=='Kültür') { ?>
<a href="<?php echo base_url('anasayfa/kultur') ?>" title="Kültür"><?php echo $veri['kategori'] ?></a><?php }elseif ($veri['kategori']=='Sağlık') { ?>
<a href="<?php echo base_url('anasayfa/saglik') ?>" title="Sağlık"><?php echo $veri['kategori'] ?></a><?php }elseif ($veri['kategori']=='Spor') { ?>
<a href="<?php echo base_url('anasayfa/spor') ?>" title="Spor"><?php echo $veri['kategori'] ?></a><?php }elseif ($veri['kategori']=='Magazin') { ?>
<a href="<?php echo base_url('anasayfa/magazin') ?>" title="Magazin"><?php echo $veri['kategori'] ?></a><?php } ?>

</span>
<span class="slide-date"><i class='fa fa-calendar'></i><?php echo tarih($veri['tarih']); ?></span>
<span class="slide-review"></span>
</div>
</div>
</div>
<div class="slide-hover"></div>
<div class="slide-image"><span><img alt='<?php echo $veri['title']; ?>' width='263' height='187' src='<?php echo base_url(); echo $veri['tmb'] ?>'></span></div>
</div>
<?php if ($veri['kategori']=='Siyaset') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/siyasetdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php }elseif ($veri['kategori']=='Ekonomi') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/ekonomidetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php }elseif ($veri['kategori']=='Kültür') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php }elseif ($veri['kategori']=='Sağlık') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/saglikdetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php }elseif ($veri['kategori']=='Spor') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/spordetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php }elseif ($veri['kategori']=='Magazin') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/magazindetay/'); echo $veri['sef'] ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title'] ?></a></h4><?php } ?>
</article>
<?php } ?>
</li>

<li class='slider-item'>
<?php $sdi=2; $soncek=sondakika2($sdi);foreach ($soncek as $son) { ?>
<article class="slide-item col-xs-4 col-md-4">
<div class="slide-content">
<div class="slide-data">
<div class="slide-data-outer">
<div class="slide-data-inner">
<?php if ($son['kategori']=='Siyaset') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/siyasetdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>
<?php }elseif ($son['kategori']=='Ekonomi') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/ekonomidetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>
<?php }elseif ($son['kategori']=='Kültür') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/kulturdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>
<?php }elseif ($son['kategori']=='Sağlık') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/saglikdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>
<?php }elseif ($son['kategori']=='Spor') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/spordetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>
<?php }elseif ($son['kategori']=='Magazin') { ?>
<a class="slide-link" href=" <?php echo base_url('anasayfa/magazindetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"></a>	
<?php } ?>

<span class="slide-category">
<?php if ($son['kategori']=='Siyaset') { ?>
<a href="<?php echo base_url('anasayfa/siyaset') ?>" title="Siyaset"><?php echo $son['kategori'] ?></a><?php }elseif ($son['kategori']=='Ekonomi') { ?>
<a href="<?php echo base_url('anasayfa/ekonomi') ?>" title="Ekonomi"><?php echo $son['kategori'] ?></a><?php }elseif ($son['kategori']=='Kültür') { ?>
<a href="<?php echo base_url('anasayfa/kultur') ?>" title="Kültür"><?php echo $son['kategori'] ?></a><?php }elseif ($son['kategori']=='Sağlık') { ?>
<a href="<?php echo base_url('anasayfa/saglik') ?>" title="Sağlık"><?php echo $son['kategori'] ?></a><?php }elseif ($son['kategori']=='Spor') { ?>
<a href="<?php echo base_url('anasayfa/spor') ?>" title="Spor"><?php echo $son['kategori'] ?></a><?php }elseif ($son['kategori']=='Magazin') { ?>
<a href="<?php echo base_url('anasayfa/magazin') ?>" title="Magazin"><?php echo $son['kategori'] ?></a><?php } ?>

</span>
<span class="slide-date"><i class='fa fa-calendar'></i><?php echo tarih($son['tarih']); ?></span>
<span class="slide-review"></span>
</div>
</div>
</div>
<div class="slide-hover"></div>
<div class="slide-image"><span><img alt='<?php echo $son['title']; ?>' width='263' height='187' src='<?php echo base_url(); echo $son['tmb'] ?>'></span></div>
</div>
<?php if ($son['kategori']=='Siyaset') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/siyasetdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php }elseif ($son['kategori']=='Ekonomi') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/ekonomidetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php }elseif ($son['kategori']=='Kültür') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/kulturdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php }elseif ($son['kategori']=='Sağlık') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/saglikdetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php }elseif ($son['kategori']=='Spor') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/spordetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php }elseif ($son['kategori']=='Magazin') { ?>
<h4 class="slide-title"><a href=" <?php echo base_url('anasayfa/magazindetay/'); echo $son['sef'] ?>" title="<?php echo $son['title']; ?>" rel="bookmark"><?php echo $son['title'] ?></a></h4><?php } ?>
</article>
<?php } ?>
</li>
</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>