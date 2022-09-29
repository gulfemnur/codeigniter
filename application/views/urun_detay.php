<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Ürün</a> <span class="divider">/</span></li>
    <li class="active">Detay</li>
    </ul> 
  <div class="well well-small">
  <div class="row-fluid">
      <div class="span5">
      <div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">

                  <div class="item active">
                   <a href="#"> <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="" style="width:100%"></a>
                  </div>

                  <?php
                  foreach ($resimler as $rs)
                  {
                  ?>

                  <div class="item">
                     <a href="#"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" style="width:100%"></a>
                  </div>

                  <?php }?>


                  
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
      </div>
      <div class="span7">
        <h3><?=$veri[0]->adi?></h3>
        <hr class="soft">
        
        <form class="form-horizontal qtyFrm">
          <div class="control-group">
          <label class="control-label"><span><?=$veri[0]->sfiyat?> TL</span></label>
          <div class="controls">
          <input type="number" class="span6" placeholder="Adet">
          </div>
          </div>
        
          
          <h4>Kategorisi:<?=$veri[0]->katadi?></h4>
          <p><?=$veri[0]->description?> </p><p>
          <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Sepete Ekle</button>
        </p></form>
      </div>
      </div>
      <hr class="softn clr"/>



      <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Ürün Açıklaması</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Önerilen Ürünler</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorideki Ürünler <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#cat1" data-toggle="tab">Category one</a></li>
                  <li><a href="#cat2" data-toggle="tab">Category two</a></li>
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="genel">
              <h4>Genel Açıklama</h4>
              <?=$veri[0]->aciklama?>
            </div>

        <table class="table table-striped">
        
        </table>
        <h5>Aksesuar Kullanmanın Kuralları:</h5>

        <p>Parfüm, deodorant, krem, alkol, çamaşır suyu gibi kimyevi maddelerin aksesuar ile temas etmemesine özen gösterin. Aksesuarlar kuru bir yerde kapalı olarak muhafaza edilmelidir. Aksesuarlar yalnız pamuklu bezle silinmelidir. Yatarken aksesuarlarınızı çıkarmaya özen gösterin..</p>
        

      </div>
      <div class="tab-pane fade" id="profile">
      <div class="row-fluid">   
      <div class="span2">
        <img src="assets/img/d.jpg" alt="">
      </div>
      <div class="span6">
        <h5>Product Name </h5>
        <p>
        Nowadays the lingerie industry is one of the most successful business spheres.
        We always stay in touch with the latest fashion tendencies - 
        that is why our goods are so popular..
        </p>
      </div>
      <div class="span4 alignR">
      <form class="form-horizontal qtyFrm">
      <h3> $140.00</h3>
      <label class="checkbox">
        <input type="checkbox">  KArşılaştırmak için ürüne ekle
      </label><br>
      <div class="btn-group">
        <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Sepete Ekle</a>
        <a href="product_details.html" class="shopBtn">İNCELE</a>
       </div>
        </form>
      </div>
    </div>
     
      
      
     
     
     
            </div>

</div>
</div>
</div> 