<?php
class Mesajlar extends CI_Controller {

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
                $query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
                $data["veriler"]=$query->result();

		$this->load->view('admin/mesajlar',$data);
		
	}
        
    public function sil($id)
    {
                $this->db->query("DELETE FROM mesajlar WHERE Id='$id'");

                redirect(base_url().'admin/mesajlar');
    }
}
