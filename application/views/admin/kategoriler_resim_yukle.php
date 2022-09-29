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
                                    <h5>KATEGORİ RESİM EKLEME</h5>
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
                                    * Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar: 1024x1024 , boyut: 100kb
                                    <?php if ($this->session->flashdata("mesaj"))  { ?>   
                                    <div class="alert alert-warning">
                                        <p><a href="#" class="alert-link">HATA!!</a>
                                            <?=$this->session->flashdata("mesaj")?></p> 
                                     </div>
                                     <?php } ?>

                                    <form enctype="multipart/form-data" action="<?=base_url()?>admin/kategoriler/resim_kaydet/<?=$id?>" method="post" class="form-horizontal" id="block-validate" novalidate="novalidate">

                                        <div class="form-group">
                                            
                                            <div class="col-lg-4">
                                                <input type="file" id="resim" name="resim" class="form-control" placeholder="Yükleme için gözat">
                                            </div>
                                        </div>
                                        
                                        

                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            
                                            <input type="submit" value="RESMİ YÜKLE" class="btn btn-primary btn-lg ">
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
