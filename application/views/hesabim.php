<div class="span9">
    <ul class="breadcrumb">
    <li><a href="<?=base_url()?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Üye Hesap</li>
    </ul>
<div class="well well-small">
  
  
  
  <form class="form-horizontal" method="post" action="<?=base_url()?>home/login">
    <h3>Üye Hesap Bilgileri</h3>

    <?php 
     if ($this->session->flashdata("mesaj"))  { ?>   
     <div class="alert alert-info">
        <p><?=$this->session->flashdata("mesaj")?></p> 
      </div>
    <?php } ?>
    
    <div class="control-group">
      <label class="control-label" for="inputFname">Adınız Soyadınız<sup>*</sup></label>
      <div class="controls">
        <input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız">
      </div>
     </div>
     <div class="control-group">
      <label class="control-label" for="inputLname">Telefon Numaranız<sup>*</sup></label>
      <div class="controls">
        <input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon Numaranız">
      </div>
     </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
    <div class="controls">
      <input type="email" disabled name="email" value="<?=$uye[0]->email?>" placeholder="Email">
    </div>
    </div>    
    <div class="control-group">
    <label class="control-label" >Şifre <sup>*</sup></label>
    <div class="controls">
      <input type="password" name="sifre" placeholder="Şifre">
    </div>
    </div>
    
  <div class="control-group">
    <div class="controls">
     <input type="submit" name="submitAccount" value="Hesabımı Güncelle" class="exclusive shopBtn">
    </div>
  </div>
  </form>



</div>
</div>
</div>