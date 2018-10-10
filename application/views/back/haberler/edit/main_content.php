<section class="content">
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Haber Düzenleme Formu</h3>
            </div>
            <form action="<?php echo base_url('yonetim/haberduzenleme') ?>" enctype="multipart/form-data" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Başlık</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['title']; ?>" name="title" class="form-control" placeholder="Haber Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">


                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Kategori</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="katID">
                      <?php $bilgim = kategorilistele('kategoriler'); foreach ($bilgim as $bilgim) { if($bilgim['id']==$bilgi['katID']){ ?>
                      <option selected value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['title']; ?></option>
                      <?php } else {?>
                      <option value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['title']; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                   <label class="col-sm-2 control-label">Haber Tarih</label>
                  <div class="col-sm-4">
                    <input type="date" value="<?php echo $bilgi['tarih']; ?>" name="tarih" class="form-control">
                  </div>
                </div>
              </div>
            
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>
                  <div class="col-sm-4">
                     <img class="profile-user-img img-responsive" src="<?php echo base_url(); echo $bilgi['mini']; ?>">
                  </div>
                  <label class="col-sm-2 control-label">Haber Resmi</label>
                  <div class="col-sm-4">
                    <input type="file"  name="resim" class="form-control">
                    <p class="text-red">Resmi Değiştirmeyecekseniz Seçim Yapmayınız.</p>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Metni</label>
                  <div class="col-sm-10">
                    <textarea name="icerik" id="editor1" rows="8" cols="80"><?php echo $bilgi['icerik']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Yorum İzin</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="yorum">
                      <?php if ($bilgi['yorum']==1) { ?>
                      <option selected value="1">Yorum Yapılsın</option>
                      <option value="2">Yorum Yapılmasın</option>
                      <?php }else { ?>
                      <option value="1">Yorum Yapılsın</option>
                      <option selected value="2">Yorum Yapılmasın</option>
                      <?php } ?>
                    </select>
                  </div>
                  <label class="col-sm-2 control-label">Haber Manşet İzin</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="sondakika">
                      <?php if ($bilgi['sondakika']==1) { ?>
                      <option selected value="1">Normal Haber</option>
                      <option value="2">Son Dakika Haber</option>
                      <?php }else { ?>
                      <option value="1">Normal Haber</option>
                      <option selected value="2">Son Dakika Haber</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Tag</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $bilgi['tag']; ?>" name="tag" class="form-control" placeholder="Tag için virgül kullanın.Örn siyaset,ekonomi,spor">
                  </div>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/haberler') ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
</section>
<div class="clearfix"></div>