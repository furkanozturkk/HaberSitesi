<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reklam Düzenleme Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/reklamguncelle') ?>" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Şirket</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['sirket']; ?>" name="sirket" class="form-control" placeholder="Şirket">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">

                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Url</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['link']; ?>" name="url" class="form-control" placeholder="Url">
                  </div>
                </div>
              </div>
               <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Başlangıç</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $bilgi['baslangic']; ?>" name="baslangic" class="form-control" placeholder="Başlangıç">
                  </div>
                  <label class="col-sm-2 control-label">Bitiş</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $bilgi['bitis']; ?>" name="bitis" class="form-control" placeholder="Bitiş">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>
                  <div class="col-sm-4">
                    <img class="profile-user-img img-responsive" style="width: 200px;height: 100px;" src="<?php echo base_url(); echo $bilgi['tmb']; ?>">
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
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/reklam') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle  </button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>