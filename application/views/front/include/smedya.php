<div id="widget_counter-4" class="widget widget-statistics widget-margin-custom widget-margin-20">
<div class="widget-title">
<h3>Sosyal Medya</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<div class="social-ul">
<ul class=" social-background">
	<?php  $smedya=sosyalmedya();foreach ($smedya as $smedya) { ?>
<li class="social-<?php echo $smedya['sef'] ?>">
<a href="http://<?php echo $smedya['url'] ?>" target="_blank"><i class="fa fa-<?php echo $smedya['sef'] ?>"></i></a>
</li>
<?php } ?>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>