<footer id="main-footer">
<div class="top-footer top-footer-2" style=" padding-top:60px; padding-bottom:60px;">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="about_me-widget-4" class="widget widget-about">
<div class="widget-title">
<h3>Hakkımızda</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<div class="about-widget">
<div class="widget-about-img">
<?php  $bilgi=siteayarlari();foreach ($bilgi as $bilgi) { ?>
<a href='<?php echo base_url(); ?>' data-rel='prettyPhoto'><img alt='' src='<?php echo base_url(); ?>/assets/front/images/logodark.png'></a> </div>
<p style='margin-top: 20px'> <?php echo $bilgi['site_bilgi'] ?></p>
<p>Telefon :<?php echo $bilgi['site_telefon'] ?></p>
<p>E-Mail :<?php echo $bilgi['site_mail'] ?> </p>
<p>Adres :<?php echo $bilgi['site_adres'] ?> </p>
<?php } ?>
</div>
</div> 
</div>
</div>
<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Son Haberler</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php  $shaberler=sonhabeructane();foreach ($shaberler as $shaber) { ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?php echo $shaber['title']; ?>' width='94' height='73' src='<?php echo base_url(); echo $shaber['mini'] ?>'>
<?php if ($shaber['kategori']=='Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($shaber['kategori']=='Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php }elseif ($shaber['kategori']=='Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php }elseif ($shaber['kategori']=='Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($shaber['tarih']); ?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i>0</a>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php  } ?>
</ul>
</div>
</div>
</div>


<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Çok Okunan Haberler</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php  $shaberler=sonhabeructane();foreach ($shaberler as $shaber) { ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?php echo $shaber['title']; ?>' width='94' height='73' src='<?php echo base_url(); echo $shaber['mini'] ?>'>
<?php if ($shaber['kategori']=='Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php }elseif ($shaber['kategori']=='Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"></a></div>	
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($shaber['kategori']=='Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php }elseif ($shaber['kategori']=='Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php }elseif ($shaber['kategori']=='Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>
<?php }elseif ($shaber['kategori']=='Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $shaber['sef'] ?>" title="<?php echo $shaber['title']; ?>" rel="bookmark"><?php echo $shaber['title'] ?></a></div>	
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($shaber['tarih']); ?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i>0</a>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php  } ?>

</ul>
</div>
</div>
</div>

</div>
</div>
</div>

<div id="footer" class='main-block footer-normal footer-social-copyrights footer-have-top footer-2'>
<div class="container">
<div class="social-ul">
<ul>
	<?php  $smedya=sosyalmedya();foreach ($smedya as $smedya) { ?>
<li class="social-<?php echo $smedya['sef'] ?>"><a class="tooltip-n" href="http://<?php echo $smedya['url'] ?>" target='_blank'>
	<i class="fa fa-<?php echo $smedya['sef'] ?>"></i></a></li>
<?php } ?>
</ul>
</div>

<div class="copyrights">Copyright <?php echo date('Y'); ?> Coder By <a href=http://www.suleymanvural.com/ target=_blank> Front and a Back</a></div>
</div>
</div>
</footer>
<div class="clearfix"></div>
</div>
</div>
<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<?php $this->load->view('front/include/script');?>

