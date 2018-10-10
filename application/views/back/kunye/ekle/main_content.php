<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Künye Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/kunyeekleme') ?>" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ad Soyad</label>
                  <div class="col-sm-6">
                    <input type="text" value="" name="adsoyad" class="form-control" placeholder="Ad Soyad">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Görev</label>
                  <div class="col-sm-6">
                    <input type="text" value="" name="gorev" class="form-control" placeholder="Görev">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/kunye') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>