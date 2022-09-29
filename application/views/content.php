<!--
New Products
-->
  <div class="well well-small">
  <h3>Yeni Gelenler </h3>
  <hr class="soften"/>
    <div class="row-fluid">
    <div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
      <div class="item active">
        <ul class="thumbnails">

          <?php
          foreach ($yeni as $rs) { ?>

        <li class="span3">
        <div class="thumbnail">
          <a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" height=357 title="add to cart"><span class="icon-search"></span> <?=$rs->adi?> </a>
          <a href="#" class="tag"></a>
          <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="bootstrap-ring"></a>  <?=$rs->adi?>
        </div>
        </li>

        <?php } ?>


      </ul>
      </div>
       </div>


      <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
      </div>
      </div>




  <div class="well well-small">
      <h3><a class="btn btn-mini pull-right" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="View more"> Daha Fazlası <span class="icon-plus"></span></a> En Çok Satanlar </h3>
      <hr class="soften"/>
      <div class="row-fluid">
      <ul class="thumbnails">
          <?php
        foreach ($random as $rs ) { ?>
      <li class="span4">
        <div class="thumbnail">
        <a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="add to cart"><span class="icon-search"></span> HIZLI BAK </a>
        <a  href="product_details.html"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"  alt=""></a>
        <div class="caption">
          <h5> <?=$rs->adi?> </h5>
          <h4>
            <a class="defaultBtn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="Click to view"><span class="icon-zoom-in"></span></a>
            <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
            <span class="pull-right"> <?=$rs->sfiyat?> TL</span>
          </h4>
        </div>
        </div>
      </li>
      <?php }?>
      
      </ul> 
  </div>
  </div>

    <div class="well well-small">
      <h3><a class="btn btn-mini pull-right" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="View more"> Daha Fazlası <span class="icon-plus"></span></a> Gelecek Ürünler </h3>
      <hr class="soften"/>
      <div class="row-fluid">
      <ul class="thumbnails">
          <?php
        foreach ($id as $rs ) { ?>
      <li class="span4">
        <div class="thumbnail">
        <a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="add to cart"><span class="icon-search"></span> HIZLI BAK </a>
        <a  href="product_details.html"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"  alt=""></a>
        <div class="caption">
          <h5> <?=$rs->adi?> </h5>
          <h4>
            <a class="defaultBtn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="Click to view"><span class="icon-zoom-in"></span></a>
            <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
            <span class="pull-right"> <?=$rs->sfiyat?> TL</span>
          </h4>
        </div>
        </div>
      </li>
      <?php }?>
      
      </ul> 
  </div>
  </div>

  
  
  
  </div>
  </div>