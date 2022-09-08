<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Home');
	}

	public function index()
	{
		$this->load->view('home');
	}

  public function hasil()
	{
		$data['cek'] = $this->Model_Home->cariOrang();
		$this->load->view('home', $data);
	}
	

}
