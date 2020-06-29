<?php
/**
 * 
 */
class Login extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('v_login_admin');
	}

	public function aksi_login(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		$cek_user = $this->login_model->auth_admin($username, $password);
		if ($cek_user->num_rows() > 0) {
			$data = $cek_user->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('ses_id', $data['id_admin']);
			$this->session->set_userdata('ses_nama', $data['nama_admin']);
			$this->session->set_userdata('ses_username', $data['username']);
			$this->session->set_userdata('ses_pass', $data['password']);
			redirect('admin');
		} else {
			$url = base_url('login');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
				<strong> Username atau Password kamu salah!.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function logout_admin(){
		$this->session->sess_destroy();
		$url = base_url('login');
		redirect($url);
	}

	public function aksi_login_pelanggan(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$cek_pelanggan = $this->login_model->auth_pelanggan($email, $password, $status);
		if ($cek_pelanggan == TRUE) {
			$this->session->set_userdata('login', TRUE);
			foreach ($cek_pelanggan as $apps) {
				$session_data = [
					'id_user' => $apps->id_user,
					'nama_user' => $apps->nama_user,
					'email' => $apps->email,
					'status' => $apps->status
				];
				$this->session->set_userdata($session_data);
			}

			$url = base_url('pelanggan');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Login Berhasil Horee</h3>
				<em> Jangan lupa beli ya.</em>
				</div>');
			redirect($url);

		}elseif ($this->session->userdata('status') == '2') {
			$url = base_url('pelanggan');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-danger">
				<div class="nk-info-box-icon">
				<i class="ion-close-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Akun kamu dalam status Non Aktif!</h3>
				</div>');
			redirect($url);
		} else {
			$url = base_url('pelanggan');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-danger">
				<div class="nk-info-box-icon">
				<i class="ion-close-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Login Gagal!</h3>
				<em> Email atau password yang kamu masukan salah!</em>
				</div>');
			redirect($url);
		}
	}

	public function logout_pelanggan(){
		$this->session->sess_destroy();
		$url = base_url('pelanggan');
		echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
			<div class="nk-info-box-icon">
			<i class="ion-checkmark-round"></i>
			</div>
			<div class="nk-info-box-close nk-info-box-close-btn">
			<i class="ion-close-round"></i>
			</div>
			<h3> Logout Berhasil Horee</h3>
			</div>');
		redirect($url);
	}
}