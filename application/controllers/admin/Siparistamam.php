<?php
class Siparistamam extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->library('session');              
                $this->load->helper('url');
                $this->load->model('admin/Database_model');

                if(!$this->session->userdata("admin_session"))
                	redirect(base_url().'admin/login');

        }

	public function index()
	{
        $query=$this->db->query("SELECT * FROM tamamsiparis ORDER BY urun_adi");
                // $query=$this->db->query("SELECT * FROM urunler ORDER BY adi");
                // $data["veriler"]=$query->result();
        $data["veriler"]=$query->result();
		$this->load->view('admin/siparistamam_liste',$data);
		
	}
        public function ekle()
        {
                

                $this->load->view('admin/siparistamam_ekle');
                
        }
        public function ekle_kaydet()
        {
                

               $data=array(
                        'adres'=>$this->input->post('adres'),
                        'urun_adi'=>$this->input->post('urun_adi'),
                        'musteri'=>$this->input->post("musteri"),
                        'fiyat'=>$this->input->post('fiyat'),
                        'durum'=>$this->input->post('durum'),
                        'tarih'=>$this->input->post('tarih')
                        
                        
                 );
                $this->db->insert("tamamsiparis",$data);
                $this->session->set_flashdata("mesaj","Tamamlanan ürün kaydı gerçekleştirildi");
                redirect(base_url().'admin/siparistamam');
                
        }
        public function duzenle($id)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM tamamsiparis WHERE Id='$id' ");
                $data["veri"]=$query->result();
                
                
                $this->load->view('admin/siparistamam_duzenle_formu',$data);
        }
        public function guncelle($id)
        {
                

               $data=array(
                        'adres'=>$this->input->post('adres'),
                        'urun_adi'=>$this->input->post('urun_adi'),
                        'musteri'=>$this->input->post("musteri"),
                        'fiyat'=>$this->input->post('fiyat'),
                        'durum'=>$this->input->post('durum'),
                        'tarih'=>$this->input->post('tarih')
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("tamamsiparis",$data,$id);
                
                redirect(base_url().'admin/siparistamam');
                
        }
        public function sil($id)
        {
                $this->db->query("DELETE FROM tamamsiparis WHERE Id='$id'");

                redirect(base_url().'admin/siparistamam');
        }
        
}
