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
                                    <h5>ÜRÜN DÜZENLEME FORMU</h5>
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
                                    <form action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" method="post" class="form-horizontal" id="block-validate" novalidate="novalidate">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adı</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->adi?>" id="adi" name="adi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Açıklama</label>
                                            <div class="col-lg-4">
                                                <textarea name="aciklama"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Kategorisi</label>

                                            <div class="col-lg-4">
                                                
                                                <select name="kategori" class="form-control">
                                                    <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                                    
                                                    
                                                    <?php foreach ($veriler as $rs) { ?>
                                    
                                                        <option value="<?=$rs->Id?>"><?=$rs->adi?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">A. Fiyat</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->afiyat?>" id="afiyat" name="afiyat" class="form-control">
                                            </div>
                                        </div>


                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">S. Fiyat</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->sfiyat?>" id="sfiyat" name="sfiyat" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Durum</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->durum?>" id="durum" name="durum" class="form-control">
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
