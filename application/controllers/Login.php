<?php
class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('layout/login');
	}

	public function prosesLogin() {
        $username = $this->input->post("username", true);
        $password = $this->input->post("password", true);
        $base64auth = base64_encode($username.":".$password);
        $result = apiLogin("auth",$base64auth);
        $kode = $result["kode"];
        if ($kode == 200) {
            $dataUser = $result["body"];
            $dataSession = array(
                "token" => $dataUser->token,
            );
            $this->session->set_userdata($dataSession);
            echo "1";
        } else {
            echo "Username dan Password Tidak ditemukan!";
        }
    }
}
