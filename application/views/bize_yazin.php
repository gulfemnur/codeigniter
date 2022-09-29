<div class="span9">
    <ul class="breadcrumb">
    <li><a href="<?=base_url()?>">Home</a> <span class="divider">/</span></li>
    <li class="active">İletişim</li>
    </ul>
<div class="well well-small">
  
  
  
  <form class="form-horizontal" method="post" action="<?=base_url()?>home/mesaj_kaydet">
    <h3>Bize İletmek İstediklerinizi Yazınız</h3>

    <?php 
     if ($this->session->flashdata("mesaj"))  { ?>   
     <div class="alert alert-info">
        <p><?=$this->session->flashdata("mesaj")?></p> 
      </div>
    <?php } ?>
    
    <div class="control-group">
      <label class="control-label" for="inputFname">Adınız Soyadınız<sup>*</sup></label>
      <div class="controls">
        <input type="text" name="adsoy" placeholder="Adınız Soyadınız">
      </div>
     </div>
     <div class="control-group">
      <label class="control-label" for="inputLname">Telefon Numaranız<sup>*</sup></label>
      <div class="controls">
        <input type="text" name="tel" placeholder="Telefon Numaranız">
      </div>
     </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
    <div class="controls">
      <input type="email" name="email" placeholder="Email">
    </div>
    </div>    
    <div class="control-group">
    <label class="control-label">Mesajınız <sup>*</sup></label>
    <div class="controls">
      <textarea name="mesaj" rows=10 cols=70> </textarea>
    </div>
    </div>
    
  <div class="control-group">
    <div class="controls">
     <input type="submit" name="submitAccount" value="Gönder" class="exclusive shopBtn">
    </div>
  </div>
  </form>



</div>
</div>
</div>