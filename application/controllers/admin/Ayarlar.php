<?php
class Ayarlar extends CI_Controller {

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
                $query=$this->db->query("SELECT * FROM ayarlar ORDER BY adi");
                $data["veriler"]=$query->result();

		$this->load->view('admin/ayarlar',$data);
		
	}
    public function ekle()
        {
                

                $this->load->view('admin/ayarlar_ekle');
                
        }
        
    public function ekle_kaydet()
        {
                

                $data=array(
                        'adi'=>$this->input->post('adi'),
                        'keywords'=>$this->input->post("keywords"),
                        'description'=>$this->input->post('description'),
                        'adres'=>$this->input->post('adres'),
                        'tel'=>$this->input->post('tel'),
                        'sehir'=>$this->input->post('sehir'),
                        'smtpserver'=>$this->input->post('smtpserver'),
                        'smtpemail'=>$this->input->post('smtpemail'),
                        'smtpport'=>$this->input->post('smtpport'),
                        'password'=>$this->input->post('password'),
                        'facebook'=>$this->input->post('facebook'),
                        'instagram'=>$this->input->post('instagram'),
                        'twitter'=>$this->input->post('twitter'),
                        'pinterest'=>$this->input->post('pinterest'),
                        'hakkimizda'=>$this->input->post('hakkimizda'),
                        'iletisim'=>$this->input->post('iletisim')                        
                        
                 );
                $this->db->insert("ayarlar",$data);
                $this->session->set_flashdata("mesaj","Ayarlar güncellendi.");
                redirect(base_url().'admin/ayarlar');
                
        }
        
        public function guncelle($id)
        {
                

               $data=array(
                        'adi'=>$this->input->post('adi'),
                        'keywords'=>$this->input->post("keywords"),
                        'description'=>$this->input->post('description'),
                        'adres'=>$this->input->post('adres'),
                        'tel'=>$this->input->post('tel'),
                        'sehir'=>$this->input->post('sehir'),
                        'smtpserver'=>$this->input->post('smtpserver'),
                        'smtpemail'=>$this->input->post('smtpemail'),
                        'smtpport'=>$this->input->post('smtpport'),
                        'password'=>$this->input->post('password'),
                        'facebook'=>$this->input->post('facebook'),
                        'instagram'=>$this->input->post('instagram'),
                        'twitter'=>$this->input->post('twitter'),
                        'pinterest'=>$this->input->post('pinterest'),
                        'hakkimizda'=>$this->input->post('hakkimizda'),
                        'iletisim'=>$this->input->post('iletisim')
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("ayarlar",$data,$id);
                
                redirect(base_url().'admin/ayarlar');
                
        }
        public function duzenle($id)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM ayarlar WHERE Id='$id'");
                $data["veri"]=$query->result();

                $this->load->view('admin/ayarlar_duzenle',$data);
        }
        
}
