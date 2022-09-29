<?php
class Kategoriler extends CI_Controller {

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
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["veriler"]=$query->result();

		$this->load->view('admin/kategoriler_liste',$data);
		
	}
        public function ekle()
        {
                

                $this->load->view('admin/kategoriler_ekle');
                
        }
        public function ekle_kaydet()
        {
                

               $data=array(
                        'parent_id'=>$this->input->post('parent_id'),
                        'adi'=>$this->input->post("adi"),
                        'description'=>$this->input->post('description'),
                        'keywords'=>$this->input->post('keywords'),
                        'durum'=>$this->input->post('durum'),
                        'tarih'=>$this->input->post('tarih'),
                        'resim'=>$this->input->post('resim')
                        
                        
                 );
                $this->db->insert("kategoriler",$data);
                $this->session->set_flashdata("mesaj","Kategori kaydı gerçekleştirildi");
                redirect(base_url().'admin/kategoriler');
                
        }
        public function duzenle($İd)//fonksiyon ismi bizim duzenle den gelmekte ondan dolayı direk duzenle ile ilişkili
        {
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Id='$İd'");
                $data["veri"]=$query->result();

                $this->load->view('admin/kategoriler_duzenle_formu',$data);
        }
        public function guncelle($id)
        {
                

               $data=array(
                        'parent_id'=>$this->input->post('parent_id'),
                        'adi'=>$this->input->post("adi"),
                        'description'=>$this->input->post('description'),
                        'keywords'=>$this->input->post('keywords'),
                        'durum'=>$this->input->post('durum'),
                        'tarih'=>$this->input->post('tarih'),
                        'resim'=>$this->input->post('resim')
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("kategoriler",$data,$id);
                
                redirect(base_url().'admin/kategoriler');
                
        }
        public function sil($id)
        {
                $this->db->query("DELETE FROM kategoriler WHERE Id='$id'");

                redirect(base_url().'admin/kategoriler');
        }
         public function resim_yukle($id)
        {
                $query=$this->db->query("SELECT * FROM kategoriler WHERE Id='$id' ");
                $data["veri"]=$query->result();

                $data["id"]=$id;
                $this->load->view('admin/kategoriler_resim_yukle',$data);

                
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
                        $this->load->view('admin/kategoriler_resim_yukle',$data);
                }
                else  //hata yoksa
                {
                        $upload_data= $this->upload->data();

                        $data=array(
                        'resim'=> $upload_data["file_name"]
                        
                        
                 );
                $this->load->model('admin/Database_model');
                $this->Database_model->update_data("kategoriler",$data,$id);
                
                redirect(base_url().'admin/kategoriler');


                }

                
        }

}
