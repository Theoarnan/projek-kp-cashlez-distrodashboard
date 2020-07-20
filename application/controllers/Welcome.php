<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();	
		$this->load->model('ModelSalesIncentive');
	}

	public function index()
	{
		$sellingMerchant = $this->ModelSalesIncentive->countSellingMerchant();
		$salesAmount = $this->ModelSalesIncentive->countSalesAmount(); 
		$totalNumbers = $this->ModelSalesIncentive->countSalesNumbers(); 
		$totalIncentive = $this->ModelSalesIncentive->countIncentive(); 
		$data = array(
			'page' => 'content/dashboard',
			'sellingMerchants' => $sellingMerchant,
			'salesAmounts' => $salesAmount,
			'totalNumbers' => $totalNumbers,
			'totalIncentives' => $totalIncentive
		);
		$this->load->view('layout/dashboard', $data);
	}
}
