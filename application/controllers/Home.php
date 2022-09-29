<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                              
                $this->load->helper('url');
                
                $this->load->model('admin/Database_Model');

                
        }

	public function index()
	{
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $query=$this->db->query("SELECT * FROM kampanya ORDER BY adi");
                $data["adi"]= $query->result();

                $query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
                $data["yeni"]= $query->result();

                $query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 3");
                $data["random"]= $query->result();

                $query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 3");
                $data["id"]= $query->result();

                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "";
                $data["menu"]= "anasayfa";

		        $this->load->view('header',$data);
		        $this->load->view('sidebar');
		        $this->load->view('slider');
		        $this->load->view('content');
                $this->load->view('footer');
	}
        public function hakkimizda()
        {
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "Hakkımızda";
                $data["menu"]= "hakkimizda";

                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('hakkimizda');
                $this->load->view('footer');
        }
        public function iletisim()
        {
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "İletişim";
                $data["menu"]= "iletisim";

                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('iletisim',$data);
                $this->load->view('footer');
        }
        public function bize_yazin()
        {
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "Bize Yazın";
                $data["menu"]= "bize_yazin";

                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('bize_yazin',$data);
                $this->load->view('footer');
        }
        public function kampanyalar()
        {
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "Kampanyalar";
                $data["menu"]= "kampanyalar";

                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('kampanyalar',$data);
                $this->load->view('footer');
        }
        public function mesaj_kaydet()
        {
                

               $data=array(
                        'adsoy'=>$this->input->post('adsoy'),
                        'email'=>$this->input->post('email'),
                        'tel'=>$this->input->post('tel'),
                        'mesaj'=>$this->input->post('mesaj'),
                        'IP'=>$_SERVER['REMOTE_ADDR']
                        
                        
                 );
                $this->db->insert("mesajlar",$data);
                $this->session->set_flashdata("mesaj","Mesajınız başarılı bir şekilde gönderilmiştir. <br> En kısa sürede sizinle iletişime geçilecektir.");
                redirect(base_url().'home/bize_yazin');
                
        }
        public function login_ol()
        {
                $query=$this->db->query("SELECT * FROM ayarlar");
                $data["veri"]= $query->result();
                $data["sayfa"]= "Uye Login";
                $data["menu"]= "uye";

                $this->load->view('header',$data);
                $this->load->view('login_ol',$data);
                $this->load->view('footer');
        }

        public function login()
        {
                $email=$this->input->post("email");
                $sifre=$this->input->post("sifre");

                //Zararlı kodlardan temizleme
                echo $email = $this->security->xss_clean($email);
                echo $sifre = $this->security->xss_clean($sifre);
                //exit();

                $this->load->model('Database_Model');
                $result = $this->Database_Model->login('uyeler',$email,$sifre);

                if ($result) 
                {
                        //Kullanici var ise bilgileri diziye aktariliyor
                        $sess_array = array(
                        'id' => $result[0]->Id,
                        'yetki' => $result[0]->yetki,
                        'email' => $result[0]->email,
                        'adsoy' => $result[0]->adsoy,
                        'resim' => $result[0]->resim
                        );
                        //print_r($sess_array);
                        //echo "Login oldu";
                        //exit();

                        $this->session->set_userdata("uye_session",$sess_array);
                        redirect(base_url().'home');
                }
                else
                {
                        $this->session->set_flashdata("mesaj","Hatalı kullanıcı adı ya da şifre !!");
                        //echo "Hata var";
                        redirect(base_url."home/login_ol");
                }

        }
        public function urundetay($id)
        {
                $query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
                $data["kategoriler"]= $query->result();

                $data["menu"]= "urun";
                $data["sayfa"]= null;

                $data["veri"]=$this->Database_Model->get_urun($id);

                $query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
                $data["resimler"]= $query->result();

                $this->load->view('header',$data);
                $this->load->view('sidebar');
                $this->load->view('urun_detay',$data);
                $this->load->view('footer');
        }

}
