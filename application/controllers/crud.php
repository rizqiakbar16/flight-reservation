
<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		//$this->load->model('m_sistem');
		$this->load->helper('url');
		$this->load->library('encryption');
		

	}

	function index(){
		// $data['user'] = $this->m_data->tampil_data()->result();
		// $this->load->view('v_admin',$data);
		redirect('admin');
	}

 // DATA USER
	function tambah(){
		$data['title'] = "Tambah User";
		$this->load->view('v_admin_data_tambah_user',$data);
	}

	function tambah_aksi(){

		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => md5($password),
			'level' => $level
		);

		$this->m_data->input_data($data,'user');
		redirect('admin/data_user');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$data['title'] = 'Edit User';
		$this->load->view('v_admin_data_edit_user',$data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/data_user');
	}

	function update(){
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => base64_encode($password),
			'level' => $level
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'user');
		redirect('admin/data_user');

	// $query = $this->db->query('UPDATE `user` SET `username` = "'.$username.'", `password` = "'.$password.'", `fullname` = "'.$fullname.'", `level` = "'.$level.'" WHERE `user`.`id` = "'.$id.'"');
	// 	if ($query) {
	// 		echo redirect('admin/data_user');
	// 	}
	}

// DATA CUSTOMER
	function tambah_customer(){
		$data['title'] = "Tambah Customer";
		$this->load->view('v_admin_data_tambah_customer',$data);
	}
	function hapus_customer($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'customer');
		redirect('admin/data_customer');
	}
	function edit_customer($id){
		$where = array('id' => $id);
		$data['customer'] = $this->m_data->edit_data($where,'customer')->result();
		$this->load->view('v_admin_data_edit_customer',$data);
	}
	function update_customer(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'customer');
		redirect('admin/data_customer');
	}
	
	function tambah_customer_aksi(){

		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);

		$this->m_data->input_data($data,'customer');
		redirect('admin/data_customer');
	}

		// DATA RUTE
	function tambah_rute(){
		$data['title']='Tambah Rute';
		$data['transportation']= $this->m_data->tampil_data_transportation()->result();
		// $data['class']= $this->m_data->kelas()->result();
		$this->load->view('v_admin_data_tambah_rute',$data);
	}

	function tambah_rute_aksi(){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$tanggal_arrive = $this->input->post('tanggal_arrive');
		$waktu_arrive = $this->input->post('waktu_arrive');

		$posisitanggal = explode("/",$tanggal);
		$tanggal = "$posisitanggal[2]/$posisitanggal[1]/$posisitanggal[0]";
		$posisitanggal2 = explode("/",$tanggal_arrive);
		$tanggal_arrive = "$posisitanggal2[2]/$posisitanggal2[1]/$posisitanggal2[0]";
		$id = $this->input->post('id');
		$depart = $tanggal.' '.$waktu;
		$arrive = $tanggal_arrive.' '.$waktu_arrive;
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$class = $this->input->post('class');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'id' => $id,
			'depart' => $depart,
			'arrive' => $arrive,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'class' => $class,
			'transportation_id' => $transportation_id
		);

		$this->m_data->input_data($data,'rute');
		redirect('admin/data_rute');
	}

	function hapus_rute($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'rute');
		redirect('admin/data_rute');
	}

	function edit_rute($id){
		$where = array('id' => $id);
		$data['rute'] = $this->m_data->edit_data($where,'rute')->result();
		$data['transportation']= $this->m_data->tampil_data_transportation()->result();
		// $data['class']= $this->m_sistem->kelas()->result();
		$this->load->view('v_admin_data_edit_rute',$data);
	}
	function update_rute(){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$tanggal_arrive = $this->input->post('tanggal_arrive');
		$waktu_arrive = $this->input->post('waktu_arrive');

		$posisitanggal = explode("/",$tanggal);
		$tanggal = "$posisitanggal[2]/$posisitanggal[1]/$posisitanggal[0]";
		$posisitanggal2 = explode("/",$tanggal_arrive);
		$tanggal_arrive = "$posisitanggal2[2]/$posisitanggal2[1]/$posisitanggal2[0]";
		$id = $this->input->post('id');
		$depart = $tanggal.' '.$waktu;
		$arrive = $tanggal_arrive.' '.$waktu_arrive;
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$class = $this->input->post('class');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'depart' => $depart,
			'arrive' => $arrive,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'class' => $class,
			'transportation_id' => $transportation_id
		);

		$where = array('id' => $id);
		$this->m_data->update_data($where,$data,'rute');
		redirect('admin/data_rute');
	}

	//Transportation
	function tambah_transportation(){
		$data['title']='Tambah Transportation';
		$data['transportation']= $this->m_data->tampil_data_transportation()->result();
		//$data['transportation_type_id']= $this->m_sistem->transportation_type_id()->result();
		$this->load->view('v_admin_data_tambah_transportation',$data);
	}
	function tambah_transportation_aksi(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$seat_qty = $this->input->post('seat_qty');
		$description = $this->input->post('description');
		$data = array(
			'id' => $id,
			'code' => $code,
			'seat_qty' => $seat_qty,
			'description' => $description
		);

		$this->m_data->input_data($data,'transportation');
		redirect('admin/data_transportation');
	}
	function hapus_transportation($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'transportation');
		redirect('admin/data_transportation');
	}
	function edit_transportation($id){
		$where = array('id' => $id);
		$data['title'] = "Edit Transportation";
		$data['transportation'] = $this->m_data->edit_data($where,'transportation')->result();
		//$data['transportation_type_id']= $this->m_sistem->transportation_type_id()->result();
		$this->load->view('v_admin_data_edit_transportation',$data);
	}
	function update_transportation(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$seat_qty = $this->input->post('seat_qty');
		$description = $this->input->post('description');
		$data = array(
			'code' => $code,
			'seat_qty' => $seat_qty,
			'description' => $description
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'transportation');
		redirect('admin/data_transportation');
	}



}