<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reklam Ekleme Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/reklamekleme') ?>" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Şirket</label>
                  <div class="col-sm-10">
                    <input type="text" value="" name="sirket" class="form-control" placeholder="Şirket İsmi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Url</label>
                  <div class="col-sm-10">
                    <input type="text" value="" name="url" class="form-control" placeholder="Yönlenme Linki">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Resim</label>
                  <div class="col-sm-10">
                    <input type="file" value="" name="resim" class="form-control">
                  </div>
                </div>
              </div>
               <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Başlangıç Tarihi</label>
                  <div class="col-sm-4">
                    <input type="date" value="" name="baslangic" class="form-control">
                  </div>
                  <label class="col-sm-2 control-label">Başlangıç Tarihi</label>
                  <div class="col-sm-4">
                    <input type="date" value="" name="bitis" class="form-control">
                  </div>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/reklam') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>