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
                            HAKKIMIZDA

                        </div>

                        

                         
                        <?= $this->session->flashdata("mesaj")?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Adı Soyadı</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Adres</th>
                                            <th>Açıklama</th>
                                            <th>Resim</th>
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
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->email?></td>
                                            <td><?=$rs->tel?></td>
                                            <td><?=$rs->adres?></td>
                                            <td><?=$rs->aciklama?></td>

                                            <td>
                                                <?php if ($rs->resim) { ?>
                                                <a href="<?=base_url()?>admin/hakkimizda/resim_yukle/<?=$rs->Id?>"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100" width="100" ></a>
                                                
                                                
                                                 
                                                <?php } else { ?>
                                                <a href="<?=base_url()?>admin/hakkimizda/resim_yukle/<?=$rs->Id?>"  class="btn btn-success"> Resim Yükle</a>

                                                <?php } ?>   
                                            </td>
                                            
                                            
                                            <td><a href="<?=base_url()?>admin/hakkimizda/duzenle/<?=$rs->Id?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Düzenle</a></td>
                                            <td><a href="<?=base_url()?>admin/hakkimizda/sil/<?=$rs->Id?>"  onclick="return confirm('Silinecek emin misiniz?')" class="btn btn-danger"><i class="icon-remove icon-white"></i> Sil</a></td>
                                            

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
