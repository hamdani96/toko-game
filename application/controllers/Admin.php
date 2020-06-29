<?php
/**
 * 
 */
class Admin extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url = base_url('login');
			redirect($url);
		}
		$this->load->model('produk_model');
		$this->load->model('user_model');
		$this->load->model('pesanan_model');
		$this->load->model('admin_model');
	}

	public function index(){
		$data['jumlah_produk'] = $this->produk_model->get_data()->num_rows();
		$data['jumlah_user'] = $this->user_model->get_data()->num_rows();
		$data['jumlah_pesanan_baru'] = $this->pesanan_model->get_pesanan_baru()->num_rows();
		$data['jumlah_pesanan_proses'] = $this->pesanan_model->get_pesanan_proses()->num_rows();
		$data['jumlah_pesanan_selesai'] = $this->pesanan_model->get_pesanan_selesai()->num_rows();
		$this->load->view('admin/header');
		$this->load->view('admin/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function register_admin(){
		$this->load->view('admin/v_data_admin');
	}

	public function pengaturan_akun($id_admin){
		$where = ['id_admin' => $id_admin];
		$data['get_p'] = $this->admin_model->get_by_id($where)->row();
		$this->load->view('admin/header');
		$this->load->view('admin/v_pengaturan_akun', $data);
		$this->load->view('admin/footer');
	}

	public function profil_admin($id_admin){
		$where = ['id_admin' => $id_admin];
		$data['get_p'] = $this->admin_model->get_by_id($where)->row();
		$this->load->view('admin/header');
		$this->load->view('admin/v_profil', $data);
		$this->load->view('admin/footer');
	}

	public function aksi_profil_admin($id){
		$where = ['id_admin' => $id];
		$data = ['nama_admin' => $this->input->post('nama_admin')];
		$query = $this->admin_model->edit_profil_admin($data, $where);
		$url = base_url('admin');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Profil berhasil di rubah.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
	}

	public function aksi_pengaturan_akun($id){
		$where = ['id_admin' => $id];
		if ($this->input->post('password_baru') == NULL) {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_lama')
			];
			$query = $this->admin_model->edit_akun_admin($data, $where);
			// echo "<script>alert('Berhasil');</script>";
			$url = base_url('admin');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Username berhasil di rubah.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}else{
			$data = [
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password_baru'))
			];
			$query = $this->admin_model->edit_akun_admin($data, $where);
			// echo "<script>alert('Berhasil Berhasil Berhasil');</script>";
			$url = base_url('admin');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Userame dan Password berhasil di rubah.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}
}