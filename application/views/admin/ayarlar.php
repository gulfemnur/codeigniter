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
                        <div class="panel-heading">
                            AYARLAR

                        </div>

                        

                        <h3 class="box-title"><a href="<?=base_url()?>admin/ayarlar/ekle" class="btn btn-primary btn-lg "><i class="icon-plus"> </i>Ayarlar</a></h3> 
                        <?= $this->session->flashdata("mesaj")?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Adı</th>
                                            <th>Description</th>
                                            <th>Keywords</th>
                                            <th>Adres</th>
                                            <th>Telefon</th>
                                            <th>Şehir</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $sno=0;
                                        foreach ($veriler as $rs) 
                                        { $sno++;


                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$sno?></td>
                                            <td><?=$rs->adi?></td>
                                            <td><?=$rs->description?></td>
                                            <td><?=$rs->keywords?></td>
                                            <td><?=$rs->adres?></td>
                                            <td><?=$rs->tel?></td>
                                            <td><?=$rs->sehir?></td>
                                            
                                            <td><a href="<?=base_url()?>admin/ayarlar/duzenle/<?=$rs->Id?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Düzenle</a></td>
                                            <td><a href="<?=base_url()?>admin/ayarlar/sil/<?=$rs->Id?>"  onclick="return confirm('Silinecek emin misiniz?')" class="btn btn-danger"><i class="icon-remove icon-white"></i> Sil</a></td>
                                            

                                        </tr>
                                    </tbody>

                                    <?php }
                                    ?>
                                </table>
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
