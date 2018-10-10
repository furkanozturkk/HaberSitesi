<div class="main-header">
<div class="container">
<div class="logo">
<a class="logo-img" href="<?php echo base_url(); ?>" title="WorldPlus">
<img class="default_logo" alt="Bizim Haber" src="<?php echo base_url('assets/front/') ?>images/haberlogo.png">
<img class="retina_logo" alt="Bizim Haber" src="<?php echo base_url('assets/front/') ?>images/haberlogo.png">
</a>
</div>
<div class="worldplus-ad worldplus-ad-header-1">
	<?php $reklamlar=reklamcek(); $btt=date('Y-m-d'); if($reklamlar['durum']==1 && $reklamlar['bitis'] > $btt && $reklamlar['baslangic'] < $btt) { ?>
	<a href="http://<?php $reklamlar['link']; ?>"><img alt="<?php $reklamlar['sirket']; ?>" title="<?php $reklamlar['sirket']; ?>" src="<?php echo base_url(); echo $reklamlar['tmb']; ?>"></a> 
	<?php }else{ ?>
	<a href="#"><img alt="" title="Boş Reklam" src="<?php echo base_url(); ?>assets/front/images/reklam/bos/bosbanner.png"></a>
	<?php } ?>
</div>
<div class="worldplus-ad-clearfix clearfix"></div>
</div>
</div>