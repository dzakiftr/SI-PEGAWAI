<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_dashboard');
		// is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['dashboard'] = $this->Model_dashboard->tampil_data()->result();
		$this->load->view('dashboard1', $data);
	}
}

	