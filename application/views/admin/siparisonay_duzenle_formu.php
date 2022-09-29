<?php
    
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
?>

        <div id="content">
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1></h1>
                    </div>
                </div>
    
                         <div class="col-lg-12">
                    <div class="panel panel-default">
                        

                    


                          <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>ONAYLANAN SİPARİŞİ DÜZENLEME</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse" href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="<?=base_url()?>admin/siparisonay/guncelle/<?=$veri[0]->Id?>" method="post" class="form-horizontal" id="block-validate" novalidate="novalidate">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Ürün Adı</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->urun_adi?>" id="urun_adi" name="urun_adi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adres</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->adres?>" id="adres" name="adres" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tarih</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->tarih?>" id="tarih" name="tarih" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Durum</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->durum?>" id="durum" name="durum" class="form-control">
                                            </div>
                                        </div>


                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Müşteri</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->musteri?>" id="musteri" name="musteri" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Fiyat</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->fiyat?>" id="fiyat" name="fiyat" class="form-control">
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="GUNCELLE" class="btn btn-primary btn-lg ">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>                   

             
                </div>
            </div>
        </div>            
        </div>
    </div>
<?php
    
    $this->load->view('admin/footer');
?>
