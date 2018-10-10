<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $this->session->flashdata('durum'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategoriler Listesi</h3>
              <a href="<?php echo base_url('yonetim/kategoriekle') ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sıra No</th>
                  <th>Kategori Başlık</th>
                  <th>Kategori Sef</th>
                  <th style="width:110px;">İşlemler</th>  
                </tr>
                </thead>
                <tbody>
                	<?php $sayi=1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['title']; ?></td>
                  <td><?php echo $bilgi['sef']; ?></td>
                  <td><a href="<?php echo base_url('yonetim/kategoriduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a>
                    <a href="<?php echo base_url('yonetim/kategorisil/'.$bilgi['id'].'/id/kategoriler') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
               		<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>