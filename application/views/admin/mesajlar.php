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
                            MESAJLAR

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
                                            
                                            <th>Mesaj</th>
                                            <th>Tarih</th>
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
                                            
                                            <td><?=$rs->mesaj?></td>
                                            <td><?=$rs->tarih?></td>
                                            
                                            <td><a href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>"  onclick="return confirm('Silinecek emin misiniz?')" class="btn btn-danger"><i class="icon-remove icon-white"></i> Sil</a></td>
                                            

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
