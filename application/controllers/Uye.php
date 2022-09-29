<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->library('session');
                $this->load->model('admin/Database_Model');              
                $this->load->helper('url');

                if(!$this->session->userdata("uye_session"))
                	redirect(base_url().'home/login_ol');

        }

	public function index()
	{
                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$query->result();

                $query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
                $data["uye"]= $query->result();

                $data["sayfa"]= "Üye Paneli";
                $data["menu"]= "uye";
		        $this->load->view('hesabim',$data);

                $this->load->view('header',$data);
                
               
                $this->load->view('content');
                $this->load->view('footer');
		
	}
        public function cikis()
        {
                

                $this->session->unset_userdata('uye_session');
                redirect(base_url().'home');
                
        }
        public function hesabim()
    {
                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]=$query->result();
                $data["sayfa"]= "Üye Hesabı";
                $data["menu"]= "uye";

                $query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
                $data["uye"]= $query->result();

                
                

                $this->load->view('header',$data);
                $this->load->view('uyesidebar');
                $this->load->view('hesabim',$data);
                $this->load->view('footer');
        
    }
        public function uye_guncelle()
        {
                
               //Form verilerini alacaz
               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'sehir'=>$this->input->post('sehir'),                        
                        'tel'=>$this->input->post('tel'),
                        'adres'=>$this->input->post('adres'),
                        'sifre'=>$this->input->post('sifre')     
                 );
               $id=$this->session->uye_session["id"];

                $this->Database_Model->update_data("uyeler",$data,$id);
                $this->session->set_flashdata("mesaj","Üye Bilgileriniz Güncellendi.");
                redirect(base_url().'uye/hesabim');
                
        }
       
}
