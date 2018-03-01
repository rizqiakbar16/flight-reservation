<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Reservation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Reservation_Admin');
	}

	public function index()
	{	
		$data['title']= "Data Reservation";
		$reservation = $this->M_Reservation_Admin->get_reservation();
		$data['reservation'] = $reservation;

		// var_dump($data);
		// die;
		$this->load->view('v_admin_reservation',$data);


		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/reservation/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		//$this->load->view('admin/template/V_Footer',$data);
	}

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'Admin_Reservation');
		}

		$data['reservation'] = $this->M_Reservation_Admin->get_reservation_id($id);

		$this->load->view('v_admin_reservation_viewedit',$data);
		
	}

	public function update(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->M_Reservation_Admin->update($status,$id);
		redirect(base_url().'Admin_Reservation');
	}

	public function delete($id = null){
		if($id == null){
			redirect(base_url().'admin/reservation');
		}
		$this->M_Reservation_Admin->delete($id);	
		redirect(base_url().'Admin_Reservation');			
	}
}
