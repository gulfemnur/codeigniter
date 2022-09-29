<?php
class Home extends CI_Controller {

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
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}
}
