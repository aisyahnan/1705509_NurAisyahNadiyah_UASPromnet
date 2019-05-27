<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PenjualanMotor extends CI_Controller {

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->API="http://api.akhmad.nim_sales/uaspromnet";
	}

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
	{
		$this->curl->http_header("X-Nim", "1705509");
		$data['user'] = json_decode($this->curl->simple_get($this->API.'/user->data'));

		$this->load->view('V_user', $data);
	}

	public function c_motor()
	{
		$this->curl->http_header("X-Nim", "1705509");
		$data['motor'] = json_decode($this->curl->simple_get($this->API.'/motor'));

		$this->load->view('V_motor', $data);
	}

	public function c_cicilan()
	{
		$this->curl->http_header("X-Nim", "1705509");
		$data['cicil'] = json_decode($this->curl->simple_get($this->API.'/cicil'));

		$this->load->view('V_cicilan', $data);
	}

	public function c_uang_muka()
	{	
		$this->curl->http_header("X-Nim", "1705509");	
		$data['uangmuka'] = json_decode($this->curl->simple_get($this->API.'/uangmuka'));

		$this->load->view('V_uang_muka', $data);
	}

	public function c_penjualan()
	{
		$this->curl->http_header("X-Nim", "1705509");
		$data['penjualan'] = json_decode($this->curl->simple_get($this->API.'/penjualan'));

		$this->load->view('V_penjualan', $data);
	}

	// proses untuk menambah data
	// insert data kontak
	function add(){

		$data = array(
			'nim_sales_motor'      =>  $this->input->post('nim_sales_motor'),
			'nim_sales_cicil'    =>  $this->input->post('nim_sales_cicil'),
			'nim_sales_uang_muka'	  =>  $this->input->post('nim_sales_uang_muka'),
			'cicilan_pokok' =>  $this->input->post('cicilan_pokok'),
			'cicilan_bunga'	  =>  $this->input->post('cicilan_bunga'),
			'cicilan_total'	  =>  $this->input->post('cicilan_total')
		);

		$insert =  $this->curl->simple_post($this->API.'/penjualan', $data, array(CURLOPT_BUFFERSIZE => 0));
		if($insert)
		{
			$this->session->set_flashdata('hasil','Insert Data Berhasil');
		}else
		{
			$this->session->set_flashdata('hasil','Insert Data Gagal');
		}

		redirect('C_PenjualanMotor/c_penjualan');

	}


	// proses untuk menghapus data pada database
	function delete($nim_sales){
		if(empty($nim_sales)){
			redirect('C_PenjualanMotor/c_penjualan');
		}else{
			$delete = $this->curl->simple_delete($this->API.'/penjualan', array('nim_sales'=>$nim_sales), array(CURLOPT_BUFFERSIZE => 10));
			if($delete)
			{
				$this->session->set_flashdata('hasil','Delete Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Delete Data Gagal');
			}

			redirect('C_PenjualanMotor/c_penjualan');
		}
	}

	//TUGAS : bikin fungsi update di client menggunakan service
	//
	//

	function update($nim_sales){
		if(empty($nim_sales)){
			redirect('C_PenjualanMotor/c_penjualan');
		}
		else{
			$data = array(
			'nim_sales_motor'      =>  $nim_sales,
			'nim_sales_cicil'    =>  $this->input->post('nim_sales_cicil'),
			'nim_sales_uang_muka'	  =>  $this->input->post('nim_sales_uang_muka'),
			'cicilan_pokok' =>  $this->input->post('cicilan_pokok'),
			'cicilan_bunga'	  =>  $this->input->post('cicilan_bunga'),
			'cicilan_total'	  =>  $this->input->post('cicilan_total')
			);

			$update =  $this->curl->simple_put($this->API.'/penjualan', $data, array(CURLOPT_BUFFERSIZE => 10));
			if($update)
			{
				$this->session->set_flashdata('hasil','Update Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Update Data Gagal');
			}

			redirect('C_PenjualanMotor/c_penjualan');
		}

	}


}
