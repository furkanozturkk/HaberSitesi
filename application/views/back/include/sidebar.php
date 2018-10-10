<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/back/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header text-red text-center">YÖNETİM PANELİ</li>
      <li class="treeview">
        <a href="<?php echo base_url('yonetim'); ?>">
          <i class="fa fa-dashboard"></i> <span>Anasayfa</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>Genel Ayarlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> 
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/ayarlar') ?>"><i class="fa fa-circle-o"></i> Site Ayarları</a></li>
          <li><a href="<?php echo base_url('yonetim/sosyalmedya') ?>"><i class="fa fa-circle-o"></i> Sosyal Medya Ayarları</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-indent"></i>
          <span>Kategoriler</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/kategoriler') ?>"><i class="fa fa-circle-o"></i> Kategori Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-newspaper-o"></i>
          <span>Haberler</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php  echo base_url('yonetim/haberler')?>"><i class="fa fa-circle-o"></i> Haber Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Köşe Yazarları</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/koseyazari') ?>"><i class="fa fa-circle-o"></i> Köşe Yazarları</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-info-circle"></i>
          <span>Künye</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/kunye') ?>"><i class="fa fa-circle-o"></i> Künye Listesi</a></li>
        </ul>
      </li>
     <li class="treeview">
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span>Mesajlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Mesaj Listesi</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Yorumlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/yorumlar'); ?>"><i class="fa fa-circle-o"></i> Yorum Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-television"></i>
          <span>Reklam</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/reklam') ?>"><i class="fa fa-circle-o"></i> Reklam</a></li>
          
        </ul>
      </li>
      <li class="header text-red text-center">İŞLEMLER</li>
      <li><a href="<?php echo base_url('yonetim/cikis'); ?>"><i class="fa fa-circle-o text-red"></i> 
      <span> <button class="btn btn-danger" type="button" name="button">Çıkış Yap</button></span></a></li>
      <li><a href="<?php echo base_url('');  ?>" target="_blank"><i class="fa fa-circle-o text-yellow"></i> 
      <span> <button class="btn btn-warning"  type="button" name="button">Siteye Git</button></span></a></li>
    </ul>
  </section>
</aside>
