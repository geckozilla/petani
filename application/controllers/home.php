<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('html/index');
	}
	public function contact()
	{
		$this->load->view('html/contact');
	}
	public function pesan()
	{
		$this->load->view('html/pesan');
	}
	public function bayar()
	{
		$this->load->view('html/bayar');
	}
	public function katalog()
	{
		$this->load->view('html/katalog');
	}
	public function login()
	{
		$this->load->view('html/login');
	}
	public function register()
	{
		$this->load->view('html/register');
	}
	public function logout()
	{
		$this->load->view('');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */