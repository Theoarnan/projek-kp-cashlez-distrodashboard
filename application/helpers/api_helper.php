<?php

function apiRequest($endPoint, $method, $body = null) {
	$ci =& get_instance();
	$token = ifNull($ci->session->userdata("token"), "xx");
	// $token = $ci->input->session("token");
	$apiUrl = $ci->config->item("api_url");
	$ci->curl->create($apiUrl . $endPoint);
	$options = array(
		CURLOPT_FAILONERROR => false,
		CURLOPT_CUSTOMREQUEST => $method,
		CURLOPT_POSTFIELDS => $body,
		CURLOPT_HTTPHEADER => array(
			"token: $token"
		),
	);
	$ci->curl->options($options);
	$data = json_decode($ci->curl->execute());
	$info = $ci->curl->info;
	if ($info["http_code"] == 401) {
		redirect("login");
		die();
	}
	return array(
		"kode" => $info["http_code"],
		"body" => $data
	);
}

function apiLogin($endPoint, $baseAuth) {
	$ci =& get_instance();
	$apiUrl = $ci->config->item("api_url");
	$ci->curl->create($apiUrl . $endPoint);
	$options = array(
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_HTTPHEADER => array(
			"Authorization: Basic $baseAuth"
		),
	);
	$ci->curl->options($options);
	$data = json_decode($ci->curl->execute());
	$info = $ci->curl->info;
	return array(
		"kode" => $info["http_code"],
		"body" => $data
	);
}

function ifNull($data, $return) {
	if ($data == null) {
		$data = $return;
	}
	return $data;
}

function formatRupiah($angka){
	return "Rp.".number_format($angka, 2,",",".").",-";
}
