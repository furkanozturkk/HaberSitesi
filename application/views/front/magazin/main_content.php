<?php foreach ($bilgi as $bilgi) { $kid=$bilgi['id'] ?>
<article class="v-post clearfix article-title-meta-image animation post--content image_post post-no-border post-1897 post type-post status-publish format-standard has-post-thumbnail hentry category-world" data-animate="fadeInUp" itemscope="" itemtype="https://schema.org/Article">
<h1 class="post-head-title">
<a itemprop="url"  href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark">
<?php echo $bilgi['title']; ?>
</a>
</h1>
<div class="clearfix"></div>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo tarih($bilgi['tarih']); ?></div>
<div class="post-meta-category"><i class="fa fa-folder-o"></i><a href="#" rel="category tag">Magazin</a></div>
<div class="post-meta-comment"><i class="fa fa-comments-o"></i><a href="#"><?php echo yorumcek($kid); ?> Yorum</a></div>
<div class="post-meta-view"><i class="fa fa-eye"></i>Okunma : <?php echo $bilgi['hit']; ?></div>
</div>
<div class="clearfix"></div>
<div  class="post-img post-img-9">
<div class="post-type"><i class="fa fa-image"></i></div>
<a  href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark">
<img alt='Haber Başlık' width='750' height='354' src='<?php echo base_url(); echo $bilgi['resim']; ?>'>
</a>
</div>
<div class="post-inner">
<?php echo word_limiter($bilgi['icerik'],25); ?>
<div class="post-more">
<a class="button-default medium"  href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef'] ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a>
</div>
<div class="clearfix"></div>
</div>
</article>
<?php } ?>
<?php echo $linkler; ?>
