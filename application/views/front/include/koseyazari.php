
<div id="widget_posts-5" class="widget widget-posts">
<div class="widget-title">
<h3>Köşe Yazarları</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php  $bilgi=koseyazarlari();foreach ($bilgi as $bilgi) { ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' width='94' height='73' src='<?php echo base_url(); echo $bilgi['mini'] ?>'>
<div class="box-news-overlay"><a href="#" title="" rel="bookmark"></a></div>
</div>
<div class="box-news-content">
<div class="box-news-title"><a href="#" title="" rel="bookmark"><?php echo $bilgi['adsoyad'] ?></a></div>
<div class="box-news-meta">
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