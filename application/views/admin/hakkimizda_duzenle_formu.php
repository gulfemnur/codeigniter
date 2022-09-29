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
                                    <h5>HAKKIMIZDA DÜZENLEME FORMU</h5>
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
                                    <form action="<?=base_url()?>admin/hakkimizda/guncelle/<?=$veri[0]->Id?>" method="post" class="form-horizontal" id="block-validate" novalidate="novalidate">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adı Soyadı</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->adsoy?>" id="adsoy" name="adsoy" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Email</label>

                                            <div class="col-lg-4">
                                                <input type="email" value="<?=$veri[0]->email?>" id="email" name="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Telefon</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->tel?>" id="tel" name="tel" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adres</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->adres?>" id="adres" name="adres" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Açıklama</label>

                                            <div class="col-lg-4">
                                                <input type="text" value="<?=$veri[0]->aciklama?>" id="aciklama" name="aciklama" class="form-control">
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
