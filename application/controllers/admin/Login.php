<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->library('session');              
                $this->load->helper('url');
                $this->load->database();
                $this->load->model("admin/Database_Model");
        }

	public function index()
	{
		$this->load->view('admin/login_form');
		
	}
        public function login_ol()
        {
               $email= $this->input->post("email");
               $sifre= $this->input->post("sifre");
               //Zararlı kodlardan temizleme

                 $email = $this->security->xss_clean($email);
                 $sifre = $this->security->xss_clean($sifre);
               $this->load->model('admin/Database_model');

               $result= $this->Database_Model->login("admin",$email,$sifre);

               if($result)
                {
                      $sess_array = array(
                        'id' => $result[0]->Id,
                        'yetki' => $result[0]->yetki,
                        'email' => $result[0]->email,
                        'adsoy' => $result[0]->adsoy,
                        'resim' => $result[0]->resim,
                         );
                         $this->session->set_userdata('admin_session',$sess_array);

                         redirect(base_url().'admin/home');
                }

               else
                {
                        $this->session->set_flashdata("mesaj","Hatalı kullanıcı adı ya da şifre");
                        redirect(base_url().'admin/login');
                }

        }

}

?>