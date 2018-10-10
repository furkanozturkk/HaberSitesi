<div class="breaking-news main-block breaking-news-3">
<div class="container">
<div class="breaking-news-all">
<div class="breaking-news-title">
<h3 class="title">SON DAKİKA</h3>
</div>
<div class="breaking-news-content">
<ul>
	<?php $sd=2; $sveriler=sondakika($sd);foreach ($sveriler as $veri) { ?>
<li><a href="#" title=""><?php echo $veri['title']; ?> </a></li>
<?php } ?>
</ul>
<div class="clear"></div>
</div>
</div>
</div>
</div>