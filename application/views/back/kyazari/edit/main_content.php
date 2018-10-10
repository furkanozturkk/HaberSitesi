<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Köşe Yazarı Düzenleme Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/kyazariguncelle') ?>" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ad Soyad</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['adsoyad']; ?>" name="isim" class="form-control" placeholder="Ad Soyad Giriniz">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">

                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>
                  <div class="col-sm-4">
                    <img class="profile-user-img img-responsive" src="<?php echo base_url(); echo $bilgi['mini']; ?>">
                  </div>
                  <label class="col-sm-2 control-label">Resim</label>
                  <div class="col-sm-4">
                    <input type="file" value="" name="resim" class="form-control">
                    <p class="text-red">Resmi Değiştirmeyecekseniz Seçim Yapmayınız.</p>
                  </div>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/koseyazari') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle  </button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>