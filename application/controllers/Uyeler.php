<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->library('session');              
                $this->load->helper('url');

                if(!$this->session->userdata("admin_session"))
                	redirect(base_url().'admin/login');

        }

	public function index()
	{
                $query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
                $data["veriler"]=$query->result();

		$this->load->view('admin/uyeler_liste',$data);
		
	}
        public function ekle()
        {
                

                $this->load->view('admin/uyeler_ekle');
                
        }
        public function ekle_kaydet()
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'email'=>$this->input->post("email"),
                        'sifre'=>$this->input->post('sifre'),
                        'tel'=>$this->input->post('tel'),
                        'adres'=>$this->input->post('adres'),
                       'sehir'=>$this->input->post('sehir'),
                        'yetki'=>$this->input->post('yetki'),
                        'durum'=>$this->input->post('durum')
                        
                        
                 );
                $this->db->insert("uyeler",$data);
                $this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
                redirect(base_url().'admin/uyeler');
                
        }
        public function duzenle($İd)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM uyeler WHERE Id='$İd'");
                $data["veri"]=$query->result();

                $this->load->view('admin/uyeler_duzenle_formu',$data);
        }
        public function guncelle($id)
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'email'=>$this->input->post("email"),
                        'sifre'=>$this->input->post('sifre'),
                        'tel'=>$this->input->post('tel'),
                        'adres'=>$this->input->post('adres'),
                       'sehir'=>$this->input->post('sehir'),
                        'yetki'=>$this->input->post('yetki'),
                        'durum'=>$this->input->post('durum')
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("uyeler",$data,$id);
                
                redirect(base_url().'admin/uyeler');
                
        }
        public function sil($id)
        {
                $this->db->query("DELETE FROM uyeler WHERE Id='$id'");

                redirect(base_url().'admin/uyeler');
        }
}
