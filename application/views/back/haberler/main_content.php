<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('durum'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Haber Listesi</h3>
              <a href="<?php echo base_url('yonetim/haberekle') ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Haber Başlık</th>
                  <th>Haber Kategori</th>
                  <th>Haber Durum</th>
                  <th>Yorum Durum</th>
                  <th>Manşet Durum</th>
                  <th style="width:110px;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                  <?php $sayi=1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo word_limiter($bilgi['title'],5); ?></td>
                  <td><?php echo $bilgi['kategori']; ?></td>
                  <td><input 
                   class="toogle_check"
                   data-on="Aktif"
                   data-onstyle="success"
                   data-off="Pasif"
                   data-offstyle="danger"   
                   type="checkbox"
                   dataID="<?php echo $bilgi['id']; ?>"
                   dataURL="<?php echo base_url('yonetim/haberset'); ?>"
                   <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>
                  <td><?php if ($bilgi['yorum']==1) { ?>
                    <button type="button" class="btn btn-primary" name="button">Yorum Açık</button>
                    <?php }else { ?>
                    <button type="button" class="btn btn-danger" name="button">Yorum Kapalı</button>
                    <?php } ?>
                    </td>
                     <td><?php if ($bilgi['sondakika']==1) { ?>
                    <button type="button" class="btn btn-primary" name="button">Normal Haber</button>
                    <?php }else { ?>
                    <button type="button" class="btn btn-warning" name="button">Sondakika Haber</button>
                    <?php } ?>
                    </td>
                  <td><a href="<?php echo base_url('yonetim/haberduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a>
                    <a href="<?php echo base_url('yonetim/habersil/'.$bilgi['id'].'/id/haberler') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>