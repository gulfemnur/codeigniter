<?php
class Yorumlar extends CI_Controller {

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
                $query=$this->db->query("SELECT * FROM yorumlar ORDER BY adsoy");
                $data["veriler"]=$query->result();

		$this->load->view('admin/yorumlar_liste',$data);
		
	}
        public function ekle()
        {
                

                $this->load->view('admin/yorumlar_ekle');
                
        }
        public function ekle_kaydet()
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'mesaj'=>$this->input->post('mesaj'),
                        'tarih'=>$this->input->post('tarih')
                        
                        
                 );
                $this->db->insert("yorumlar",$data);
                $this->session->set_flashdata("mesaj","Yorum gerçekleştirildi");
                redirect(base_url().'admin/yorumlar');
                
        }
        public function duzenle($id)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM yorumlar WHERE Id='$id'");
                $data["veri"]=$query->result();

                $this->load->view('admin/yorumlar_duzenle_formu',$data);
        }
        public function guncelle($id)
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'mesaj'=>$this->input->post('mesaj'),
                        'tarih'=>$this->input->post('tarih')
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("yorumlar",$data,$id);
                
                redirect(base_url().'admin/yorumlar');
                
        }
        public function sil($id)
        {
                $this->db->query("DELETE FROM yorumlar WHERE Id='$id'");

                redirect(base_url().'admin/yorumlar');
        }
}
