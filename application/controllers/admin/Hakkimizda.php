<?php
class Hakkimizda extends CI_Controller {

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
                $query=$this->db->query("SELECT * FROM hakkimizda ORDER BY adsoy");
                $data["veriler"]=$query->result();

		    $this->load->view('admin/hakkimizda_liste',$data);
		
	    }
        
        public function ekle_kaydet()
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'email'=>$this->input->post("email"),
                        'tel'=>$this->input->post('tel'),
                        'adres'=>$this->input->post('adres'),
                        'aciklama'=>$this->input->post('aciklama'),
                        'resim'=>$this->input->post('resim')                      
                        
                        
                 );
                $this->db->insert("hakkimizda",$data);
                $this->session->set_flashdata("mesaj","Hakkımızda kaydedildi.");
                redirect(base_url().'admin/hakkimizda');
                
        }
        public function duzenle($id)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM hakkimizda WHERE Id='$id'");
                $data["veri"]=$query->result();

                $this->load->view('admin/hakkimizda_duzenle_formu',$data);
        }
        public function guncelle($id)
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'email'=>$this->input->post("email"),
                        'tel'=>$this->input->post('tel'),
                        'adres'=>$this->input->post('adres'),
                        'aciklama'=>$this->input->post('aciklama'),
                        'resim'=>$this->input->post('resim')  
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("hakkimizda",$data,$id);
                
                redirect(base_url().'admin/hakkimizda');
                
        }
        public function sil($id)
        {
                $this->db->query("DELETE FROM hakkimizda WHERE Id='$id'");

                redirect(base_url().'admin/hakkimizda');
        }
        public function resim_yukle($id)
        {
                $query=$this->db->query("SELECT * FROM hakkimizda WHERE Id='$id' ");
                $data["veri"]=$query->result();

                $data["id"]=$id;
                $this->load->view('admin/hakkimizda_resim_yukle',$data);

                
        }
        public function resim_kaydet($id)
        {
                $data["id"]=$id;
                
                //uploads edilecek dosyaya ait ayarlar ve limitler
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
                //ayarlar ile kütüphaneyi çağır

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //yükle -> eğer hata varsa
                {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
                        $this->load->view('admin/hakkimizda_resim_yukle',$data);
                }
                else  //hata yoksa
                {
                        $upload_data= $this->upload->data();

                        $data=array(
                        'resim'=> $upload_data["file_name"]
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("hakkimizda",$data,$id);
                
                redirect(base_url().'admin/hakkimizda');


                }

                
        }
}
