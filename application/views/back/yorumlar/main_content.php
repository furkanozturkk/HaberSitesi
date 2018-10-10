<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('durum'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Yorum Listesi</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Ad Soyad</th>
                  <th>Email</th>
                  <th>Yorum Tarihi</th>
                  <th>Durum</th>

                  <th>Durum</th>
                  <th style="width:110px;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['adsoyad']; ?></td>
                  <td><?php echo $bilgi['email']; ?></td>
                  <td><?php echo tarih($bilgi['tarih']); ?></td>
                  <td><input 
                   class="toogle_check"
                   data-on="Aktif"
                   data-onstyle="success"
                   data-off="Pasif"
                   data-offstyle="danger"   
                   type="checkbox"
                   dataID="<?php echo $bilgi['id']; ?>"
                   dataURL="<?php echo base_url('yonetim/yorumset'); ?>"
                   <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>
                  <td><a href="<?php echo base_url('yonetim/yorumduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a>
                    <a href="<?php echo base_url('yonetim/yorumsil/'.$bilgi['id'].'/id/yorumlar') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
               		<?php } ?>
                </tbody>
              </table>
              <p class="text-aqua">Yorumları Okumadan Asla Onaylamayın.</p>
              <p class="text-aqua">Olumsuz Bir Yorumla Karşılaşırsanız Ekran Görüntüsünü Kaydedip</p>
              <p class="text-aqua">Yorumu <b>PASİF</b> Hale Getiriniz.</p>
            </div>
          </div>
        </div>
      </div>
    </section>