<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page'] = 'content/dashboard';
		$this->load->view('layout/dashboard', $data);
	}
}
