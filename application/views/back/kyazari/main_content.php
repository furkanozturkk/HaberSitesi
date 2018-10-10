<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('durum'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Köşe Yazarları Listesi</h3>
              <a href="<?php echo base_url('yonetim/kyazariekle') ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Ad Soyad</th>
                  <th>Resim</th>
                  <th>Durum</th>
                  <th style="width:110px;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sayi=1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['adsoyad'];  ?></td>
                  <td><img class="profile-user-img img-responsive" src="<?php echo base_url(); echo $bilgi['mini']; ?>"></td>
                  <td><input 
                   class="toogle_check"
                   data-on="Aktif"
                   data-onstyle="success"
                   data-off="Pasif"
                   data-offstyle="danger"   
                   type="checkbox"
                   dataID="<?php echo $bilgi['id']; ?>"
                   dataURL="<?php echo base_url('yonetim/kyazariset'); ?>"
                   <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>
                  <td><a href="<?php echo base_url('yonetim/kyazariduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a>
                    <a href="<?php echo base_url('yonetim/kyazarisil/'.$bilgi['id'].'/id/koseyazari') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>