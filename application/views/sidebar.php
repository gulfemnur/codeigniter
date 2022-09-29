<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
    <ul class="nav nav-list">
    <?php foreach ($kategoriler as $rs) {?>
        <li><a href="<?=base_url()?>kategori/<?=$rs->Id?>"><span class="icon-chevron-right"></span><?=$rs->adi?></a></li>
    <?php }?>
        

        
    </ul>
</div>

              <div class="well well-small alert alert-warning cntr">
                  <h2>%20 İndirim</h2>
                  <p> 
                     Üye Olarak Giriş Yapan Herkese <br><br><a class="defaultBtn" href="<?=base_url()?>home">Buraya Tıklayınız </a>
                  </p>
              </div>
              <div class="well well-small" ><a href="#"><img src="<?=base_url()?>assets/img/paypal.jpg" alt="payment method paypal"></a></div>
            
            <a class="shopBtn btn-block" href="#">Gelecek Ürünler <br><small>Görmek İçin Tıklayınız</small></a>
            <br>
            <br>
            <ul class="nav nav-list promowrapper">
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> HIZLI GÖR</a>
                <img src="<?=base_url()?>assets/img/cingene_kolye.png" alt="bootstrap ecommerce templates">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">İNCELE</a> <span class="pull-right">22.00 TL</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> HIZLI GÖR</a>
                <img src="<?=base_url()?>assets/img/sallantili_kupe.jpg" alt="shopping cart template">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">İNCELE</a> <span class="pull-right">15.00 TL</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> HIZLI GÖR</a>
                <img src="<?=base_url()?>assets/img/tasli_sahmeran.jpg" alt="bootstrap template">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">İNCELE</a> <span class="pull-right">7.50 TL</span></h4>
                </div>
              </div>
            </li>
          </ul>

    </div>