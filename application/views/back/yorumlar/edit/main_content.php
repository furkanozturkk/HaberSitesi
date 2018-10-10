<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Yorum Düzenleme Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/yorumguncelle') ?>" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ad Soyad</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['adsoyad']; ?>" name="adsoyad" class="form-control" placeholder="Ad Soyad">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">

                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">E-Mail</label>
                  <div class="col-sm-10">
                    <input type="text" disabled value="<?php echo $bilgi['email']; ?>" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
               <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ip Adresi</label>
                  <div class="col-sm-4">
                    <input type="text" disabled value="<?php echo $bilgi['ip']; ?>" name="ip" class="form-control" placeholder="İp Adresi">
                  </div>
                  <label class="col-sm-2 control-label">Yorum Tarihi</label>
                  <div class="col-sm-4">
                    <input type="text" disabled value="<?php echo $bilgi['tarih']; ?>" name="bitis" class="form-control" placeholder="Tarih">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yorum</label>
                  <div class="col-sm-10">
                    <textarea name="yorum" cols="80" rows="8" ><?php echo $bilgi['yorum']; ?></textarea>
                  </div>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/yorumlar') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle  </button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>