<?php
/**
 * 
 */
class User extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('login');
			redirect($url);
		}
		$this->load->view('admin/header');
		$data['data_user'] = $this->user_model->get_data()->result();
		$this->load->view('admin/v_data_user', $data);
		$this->load->view('admin/footer');
	}

	public function tambah_user(){
		$nama_user = $this->input->post('nama_user');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$data = [
			"nama_user" => $nama_user,
			"jk" => $jk,
			"no_hp" => $no_hp,
			"email"=> $email,
			"status" => "1",
			"password"=> password_hash($password, PASSWORD_BCRYPT)
		];

		$this->user_model->simpan_data($data);
		$url = base_url('user');
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
			<strong> Data Berhasil Di Tambahkan.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span class="fa fa-times"></span>
			</button>
			</div>');
		redirect($url);
	}

	public function aktivasi_user($id){
		$where = ['id_user' => $id];
		$aktiv = ['status' => '1'];
		$query = $this->user_model->aktiv_user($where, $aktiv);

		$config =[
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'danihams450@gmail.com',
			'smtp_pass' => 'vwdalqmqhperjljs',
			'smtp_port' => 465,
			'miltype' => 'html',
			'charset' => 'utf-8',
			'newline'=> "\r\n" 
		];

		$this->email->initialize($config);

		$this->email->from('danihams450@gmail.com', 'FiveM Indonesia');

		$this->email->to($this->input->post('email'));
		$this->email->subject('verifikasi');
		$message = '<h1> Akun Kamu Telah Berhasil Di Aktifkan</h1>, <a href="http://localhost/toko-game/user"> Kunjungi Laman</a>';
		$this->email->message(@mail($message));

		if ($this->email->send()) {
			$url = base_url('user');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> Akun berhasil diaktivasi.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function tambah_user_2(){
		$nama_user = $this->input->post('nama_user');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$data = [
			"nama_user" => $nama_user,
			"jk" => $jk,
			"no_hp" => $no_hp,
			"email"=> $email,
			"status" => "1",
			"password"=> password_hash($password, PASSWORD_BCRYPT)
		];
		$this->user_model->simpan_data($data);

		$config= [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'danihams450@gmail.com',
			'smtp_pass' => 'vwdalqmqhperjljs',
			'smtp_port' => 465,
			'miltype' => 'html',
			'charset' => 'utf-8',
			'newline'=> "\r\n" 
		];

		$this->email->initialize($config);

		$this->email->from('danihams450@gmail.com', 'FiveM Indonesia');

		$this->email->to($email);
		$this->email->subject('Verifikasi');
		$this->email->message('Registrasi berhasil. Ayo! Beli produk dari toko kami.');

		if ($this->email->send()) {
			$url = base_url('pelanggan');
		echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Registrasi Berhasil Horee</h3>
				<em> Silahkan login terlebih dahulu.</em>
				</div>');
		redirect($url);
		}else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function edit_user($id){
		if ($this->input->post("password") == NULL) {
			$where = ["id_user" => $id];

			$nama_user = $this->input->post('nama_user');
			$jk = $this->input->post('jk');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$password_lama = $this->input->post("password_lama");

			$data = [
				"nama_user" => $nama_user,
				"jk" => $jk,
				"no_hp" => $no_hp,
				"email"=> $email,
				"status" => "2",
				"password"=> password_hash($password_lama, PASSWORD_BCRYPT)
			];

			$this->user_model->edit_data($data, $where);
			$url = base_url('user');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Edit.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}else{
			$where = ["id_user" => $id];

			$nama_user = $this->input->post('nama_user');
			$jk = $this->input->post('jk');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$password_lama = $this->input->post("password_lama");

			$data = [
				"nama_user" => $nama_user,
				"jk" => $jk,
				"no_hp" => $no_hp,
				"email"=> $email,
				"status" => "2",
				"password"=> password_hash($password, PASSWORD_BCRYPT)
			];

			$this->user_model->edit_data($data, $where);
			$url = base_url('user');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data dan Password Baru Berhasil Di Edit.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function hapus_user($id){
		$where = ["id_user" => $id];
		$this->user_model->hapus_data($where);
		$url = base_url('user');
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
			<strong> Data Berhasil Di Hapus.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span class="fa fa-times"></span>
			</button>
			</div>');
		redirect($url);
	}
}