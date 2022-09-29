
        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
               
                <br />
                <div class="media-body">
                    <h5 class="media-heading">GÜLFEM NUR YÜCEL</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="<?=base_url()?>admin/home" >
                        <i class="icon-home"></i> Anasayfa
	   
                       
                    </a>                   
                </li>



                <li class="panel">
                    <a href="<?=base_url()?>admin/uyeler" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#form-nav">
                        <i class="icon-user"> </i> Üyeler     
	   
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; 
                    </a>
                    
                </li>
                <li class="panel ">
                    <a href="<?=base_url()?>admin/urunler" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-folder-open-alt"></i> Ürünler
	   
                        <span class="pull-right">
                            
                        </span>
                          &nbsp; 
                    </a>
                   
                </li>
                <li class="panel ">
                    <a href="<?=base_url()?>admin/kategoriler" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-folder-open-alt"></i> Kategoriler
       
                        <span class="pull-right">
                            
                        </span>
                          &nbsp; 
                    </a>
                   
                </li>

               <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Siparişler     
       
                        <span class="pull-right">
                          <i class="icon-angle-down"></i>
                        </span>
                       &nbsp; 
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?=base_url()?>admin/siparisyeni"><i class="icon-angle-right"></i> Yeni Siparişler </a></li>
                         <li class=""><a href="<?=base_url()?>admin/siparisonay"><i class="icon-angle-right"></i> Onaylananlar </a></li>
                        <li class=""><a href="<?=base_url()?>admin/sipariskargo"><i class="icon-angle-right"></i> Kargodakiler </a></li>
                        <li class=""><a href="<?=base_url()?>admin/siparistamam"><i class="icon-angle-right"></i> Tamamlananlar </a></li>
            
                    </ul>
                </li>


                <li class="panel">
                    <a href="<?=base_url()?>admin/yorumlar" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-comments"></i> Yorumlar
	   
                        <span class="pull-right">
                            
                        </span>
                          &nbsp; 
                    </a>
                    
                </li>

                <li class="panel">
                    <a href="<?=base_url()?>admin/mesajlar" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-comment"></i> Mesajlar
	   
                        <span class="pull-right">
                           
                        </span>
                    </a>
                    
                     
                </li>
                <li class="panel">
                    <a href="<?=base_url()?>admin/hakkimizda" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
                        <i class=" icon-pushpin"></i> Hakkımızda
	   
                        <span class="pull-right">
                            
                        </span>
                    </a>
                    
                </li>
                
                    
                 <li class="panel">
                    <a href="<?=base_url()?>admin/ayarlar" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        <i class="icon-check-empty"></i> Ayarlar
	   
                        <span class="pull-right">
                            
                        </span>
                         &nbsp; 
                    </a>
                    
                </li>
                <li><a href="<?=base_url() ?>admin/login"><i class="icon-signin"></i> Giriş Sayfası </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->