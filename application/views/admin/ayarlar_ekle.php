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
                                    <h5>AYAR EKLE</h5>
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
                                    <form action="<?=base_url()?>admin/ayarlar/ekle_kaydet" method="post" class="form-horizontal" id="block-validate" novalidate="novalidate">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adı</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="adi" name="adi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Description</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="description" name="description" class="form-control">
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Telefon</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="tel" name="tel" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Adres</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="adres" name="adres" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Şehir</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="sehir" name="sehir" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Smtp Server</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="smtpserver" name="smtpserver" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Smtp Email</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="smtpemail" name="smtpemail" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Port</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="smtpport" name="smtpport" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Şifre</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="sifre" name="sifre" class="form-control">
                                            </div>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label class="control-label col-lg-4">Facebook</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="facebook" name="facebook" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">İnstagram</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="instagram" name="instagram" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Twitter</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="twitter" name="twitter" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Pinterest</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="pinterest" name="pinterest" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Hakkımızda</label>

                                            <div class="col-lg-4">
                                                <input id="editor" type="text" name="hakkimizda" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">İletişim</label>

                                            <div class="col-lg-4">
                                                <input id="editor" type="text" name="iletisim" class="form-control">
                                            </div>
                                        </div>

                                        

                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="button" value="VAZGEÇ" class="btn btn-primary btn-lg ">
                                            <input type="submit" value="KAYDET" class="btn btn-primary btn-lg ">
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
