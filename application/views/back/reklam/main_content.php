<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('durum'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reklam Listesi</h3>
              <a href="<?php echo base_url('yonetim/reklamekle') ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Şirket Adı</th>
                  <th>Şirket Url</th>
                  <th>Başlangıç Tarihi</th>
                  <th>Bitiş Tarihi</th>

                  <th>Durum</th>
                  <th style="width:110px;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['sirket']; ?></td>
                  <td><?php echo $bilgi['link']; ?></td>
                  <td><?php echo tarih($bilgi['baslangic']); ?></td>
                  <td><?php echo tarih($bilgi['bitis']); ?></td>
                  <td><input 
                   class="toogle_check"
                   data-on="Aktif"
                   data-onstyle="success"
                   data-off="Pasif"
                   data-offstyle="danger"   
                   type="checkbox"
                   dataID="<?php echo $bilgi['id']; ?>"
                   dataURL="<?php echo base_url('yonetim/reklamset'); ?>"
                   <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>
                  <td><a href="<?php echo base_url('yonetim/reklamduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a>
                    <a href="<?php echo base_url('yonetim/reklamsil/'.$bilgi['id'].'/id/reklam') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
               		<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>