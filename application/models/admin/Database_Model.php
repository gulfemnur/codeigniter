<?php
class Database_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	 public function login($tablo,$email,$sifre)
  	{
    	$this->db->select("*");
    	$this->db->from($tablo);
    	$this->db->where('email',$email);
    	$this->db->where('sifre',$sifre);
    	$this->db->where('durum',"aktif");
    	$this->db->limit(1);
    
    	$query = $this->db->get();

    	if($query->num_rows() == 1)
    	{
      		return $query->result();
    	}
    	else
    	{
      		return false;
    	}
  	}
    public function update_data($tablo,$data,$id)//guncelleme fonksiyonum tek update fonksiyonumuz artık bu
  {
    $this->db->where("Id",$id);
    $this->db->update($tablo,$data);
    
    return true;
  }
   public function get_urunler()
 {
    $query = $this->db->query('SELECT urunler.*, kategoriler.adi as katadi
    FROM urunler 
    INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
    order by adi ' );
    
    return $query->result ();
  }
  public function get_urun($id)
 {
    $query = $this->db->query('SELECT urunler.*, kategoriler.adi as katadi
    FROM urunler 
    INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
    WHERE urunler.Id='.$id );
    
    return $query->result ();
  }
}
?>