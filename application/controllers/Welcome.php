<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function send()
	{
		$tujuan =  $this->input->post('tujuan');
		$message = $this->input->post('message');

		// $result = file_get_contents("http://localhost:5000/"."msg?number=".$tujuan."&message=".$message);
		$url = "http://localhost:8000/send-message";

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$headers = array(
		"Content-Type: application/x-www-form-urlencoded",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = "number=$tujuan&message=$message";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);
		echo "<pre>";
		print_r($resp);
		// if ($result) {
		// 	$this->session->set_flashdata('success', 'Berhasil Kirim Pesaan');
		// 	redirect('/');
		// }
		
		
	}
}