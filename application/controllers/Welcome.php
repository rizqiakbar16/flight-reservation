<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct (){
		parent::__construct();
		$this->load->model('Modal_madel');

	}
	function index()
	{
		$this->load->view('welcome_message');
	}
	

	function tambah_pesan()
	{
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$class = $this->input->post('class');
		$adults = $this->input->post('adults');
		$child = $this->input->post('child');

		$data = array(
			'from' => $from,
			'to' => $to,
			'depart' => $depart,
			'class' => $class,
			'adults' => $adults,
			'child' => $child
		);
		
		$this->Modal_madel->masuk_pesan($data);
		redirect('welcome/index');
	}
	function tampil(){
		$data = array('data' => $this->Modal_madel->tampil_pesan()->result());
		//$data = $this->Modal_madel->tampil_pesan() ->result();
		$this->load->view('tampil_pesanan',$data);
	}
	function hapus(){
		$id = $this->input->get('id');
		$this->Modal_madel->hapus_pesan($id);
		redirect('welcome/tampil');
	}
	function ganti(){
		$id = $this->input->get('id');
		$data ['data'] = array('tampil_pesan' => $this->Modal_madel->ganti_pesan($id));
		$this->load->view('ganti_pesanan',$data);
	}
	function proses_ganti(){
		$id = $this->input->post('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$class = $this->input->post('class');
		$adults = $this->input->post('adults');
		$child = $this->input->post('child');

		$data = array(
			'from' => $from,
			'to' => $to,
			'depart' => $depart,
			'class' => $class,
			'adults' => $adults,
			'child' => $child
		);
	 $this->Modal_madel->update($id,$data,'pesan');
	 redirect (base_url ('index.php/welcome/tampil'));
	}
}
?>
