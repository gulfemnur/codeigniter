<div class="span9">
  <div class="well np">
    <div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
        
              <?php
              $say=0;
              $aktf=null;
              foreach ($adi as $rs) 
                {   $say++;
                    if ($say==1)
                      $aktf="active";
                    else
                      $aktf=null;
              ?>
              <div class="item <?=$aktf?>">
                <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
                <img style="width:100%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="bootstrap ecommerce templates"> </a>
                <div class="carousel-caption">
                 
                </div>
              </div>
              <?php }?>
             

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>