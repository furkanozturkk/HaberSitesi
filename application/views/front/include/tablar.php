<div class='widget tabs-warp widget-tabs'>
<div class="widget-title widget-title-tabs">
<ul class="tabs tabs359">
<li class="tab"><a href="#">Çok Okunan</a></li>
<li class="tab"><a href="#">Yorumlar</a></li>
<li class="tab"><a href="#">Tag</a></li>
<li class="clearfix"></li>
</ul>
</div>
<div class="widget-wrap">
<div class='tab-inner-warp tab-inner-warp359'>
<ul class='widget-posts'>
<?php  $shaberler=sonhaberler();foreach ($shaberler as $shaber) { ?>
<li class="widget-posts-slideshow">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?php $shaber['title']; ?>' width='94' height='73' src='<?php echo base_url(); echo $shaber['mini'] ?>'>
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
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget-comments'>
<ol class='commentlist clearfix'>
<?php  $yorumlar=yorumlaricek();foreach ($yorumlar as $yorum) { ?>
<li class="comment">
<div class="comment-body">
<div class="avatar">
<a href="#">
<img alt='avatar' src='<?php echo base_url('assets/front/'); ?>images/avatar.png'>
</a>
</div>
<div class="comment-text">
<div class="author clearfix">
<div class="comment-meta">
<span class="comment-author fn"><a href='#' target='_blank'><?php echo $yorum['adsoyad'] ?></a></span>
<div class="clearfix"></div>
</div>
</div>
<div class="text">
<p><a href="#"><?php echo $yorum['yorum'] ?></a></p>
</div>
</div>
</div>
</li>
<?php  } ?>
</ol>
</div>
</div>
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget_tag_cloud'>
<?php  $taglar=tagcekelim();foreach ($taglar as $tag) {
$tag = explode(",",$tag['tag']); foreach ($tag as $etiket) {
 ?>
<a href="#" class="tag-cloud-link" style="font-size: 13.6pt;"><?php echo $etiket; ?></a>
<?php  } } ?>
</div>
</div>
</div>
</div>