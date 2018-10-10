<div class="header-follow header-follow-right">
<ul>
	<?php  $smedya=sosyalmedya();foreach ($smedya as $smedya) { ?>
<li class="social-<?php echo $smedya['sef'] ?>"><a class="tooltip-s" href="http://<?php echo $smedya['url'] ?>" target='_blank'><i class="fa fa-<?php echo $smedya['sef'] ?>"></i></a></li>
	<?php } ?>
</ul>
</div>