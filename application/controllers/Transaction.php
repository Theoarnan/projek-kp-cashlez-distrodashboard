<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		$params = array(
            "page" => 1,
            "per_page" => 10,
            "search" => ""
        );
        //page=1 & perpage=10 & search = 
        $result = apiRequest("sales?" . http_build_query($params), "GET");
        $meta = $result["body"]->meta;
        $listData = $result["body"]->salesincentive_data;
        // echo var_dump($listData);
		$data = array(
			'transactions' => $listData,
			'page'=>'content/transaction',
			);
		$this->load->view('layout/dashboard', $data);
	}
}
