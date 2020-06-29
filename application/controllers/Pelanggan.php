<?php
/**
 * 
 */
class Pelanggan extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('keranjang_model');
		$this->load->model('pesanan_model');
		$this->load->model('informasi_model');
		$this->load->model('user_model');
	}
	
	public function index(){
		$data['data_tentang'] = $this->informasi_model->get_data()->result();
		$data['data_produk'] = $this->produk_model->get_data()->result();
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$data['data_galeri'] = $this->informasi_model->get_data_galeri()->result();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_index', $data);
		$this->load->view('pelanggan/footer');
	}

	public function keranjang(){
		$data['data_keranjang'] = $this->keranjang_model->get_by_session()->result();
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_keranjang', $data);
		$this->load->view('pelanggan/footer');
	}

	public function pesanan_saya(){
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$data['data_pesanan_saya'] = $this->pesanan_model->get_by_session()->result();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_pesanan_saya', $data);
		$this->load->view('pelanggan/footer');
	}

	public function profil_pelanggan($id_user){
		$where = ['id_user' => $id_user];
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$data['get_p'] = $this->user_model->get_by_id($where)->row();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_profil_user', $data);
		$this->load->view('pelanggan/footer');
	}

	public function tambah_keranjang(){
		$this->keranjang_model->set_keranjang();
		echo "<script>alert('Berhasil di masukan ke keranjang');</script>";
		echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
			<div class="nk-info-box-icon">
			<i class="ion-checkmark-round"></i>
			</div>
			<div class="nk-info-box-close nk-info-box-close-btn">
			<i class="ion-close-round"></i>
			</div>
			<h3> Pesanan Berhasil Dimasukan ke Kernjang. Lihat Di Menu Keranjang.</h3>
			</div>');
		redirect(base_url('pelanggan'));
	}

	public function produk(){
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$data['data_produk'] = $this->produk_model->get_data()->result();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_produk', $data);
		$this->load->view('pelanggan/footer');
	}

	public function layanan_aktif(){
		$data['jumlah_data_keranjang'] = $this->keranjang_model->get_by_session()->num_rows();
		$data['layanan_aktif'] = $this->pesanan_model->get_layanan_aktif_by_session()->result();
		$this->load->view('pelanggan/header', $data);
		$this->load->view('pelanggan/v_layanan_aktif', $data);
		$this->load->view('pelanggan/footer');
	}

	public function hapus_keranjang($id){
		$where = ['id_keranjang' => $id];
		$query = $this->keranjang_model->hapus_data($where);
		if ($query == TRUE) {
			$url = base_url('pelanggan/keranjang');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Data Keranjang Berhasil Di Hapus</h3>
				</div>');
			redirect($url);
		}
	}

	public function aksi_checkout($id){
		$data2 = ['status' => '0'];
		$where = ['id_keranjang' => $id];
		$this->keranjang_model->edit_status_keranjang($data2, $where);

		$data = [
			'id_user' => $this->input->post('id_user'),
			'id_produk' => $this->input->post('id_produk'),
			'jumlah' => '1',
			'nickname_discord' => $this->input->post('nickname_discord'),
			'status' => 'menunggu-pembayaran',
			'tgl' => date('Y-m-d'),
			'tgl_berakhir' => '0000-00-00',
			'status_delete' => '1'
		];

		// foreach ($data as $object) {
		// 	$this->keranjang_model->aksi_check($object);
		// }
		$this->keranjang_model->aksi_check($data);

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
		$to = 'hamdani.hams456@gmail.com';
		$this->email->to($to);
		$this->email->subject('Pemberitahuan');
		$this->email->message('Alfian! Ada pesanan baru yang masuk. Ayo segera cek.');

		if ($this->email->send()) {
			$url = base_url('pelanggan/keranjang');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Berhasil Pesan. Lihat Di Pesanan Saya.</h3>
				</div>');
			redirect($url);
		}else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function aksi_edit_profil($id){
		$where = ['id_user' => $id];
		$data = [
			'nama_user' => $this->input->post('nama_user'),
			'jk' => $this->input->post('jk'),
			'no_hp' => $this->input->post('no_hp')
		];
		$this->user_model->edit_data_profil_user($data, $where);
		$url = base_url('pelanggan');
		echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
			<div class="nk-info-box-icon">
			<i class="ion-checkmark-round"></i>
			</div>
			<div class="nk-info-box-close nk-info-box-close-btn">
			<i class="ion-close-round"></i>
			</div>
			<h3> Profil berhasil di rubah.</h3>
			</div>');
		redirect($url);
	}

	public function aksi_pengaturan_akun($id){
		$where = ['id_user' => $id];
		if ($this->input->post('password_baru') == NULL) {
			$data = [
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password_lama')
			];

			$this->user_model->edit_data_akun_user($data, $where);
			$url = base_url('pelanggan');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Username berhasil di rubah.</h3>
				</div>');
			redirect($url);
		}else {
			$email = $this->input->post('email');
			$password = $this->input->post('password_baru');

			$data = [
				'email' => $email,
				'password' => password_hash($password, PASSWORD_BCRYPT)
			];

			$this->user_model->edit_data_akun_user($data, $where);
			$url = base_url('pelanggan');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Username dan Password berhasil di rubah.</h3>
				</div>');
			redirect($url);
		}
	}

	public function hapus_pesanan_saya($id){
		$where = ['id_pesanan' => $id];
		$data = ['status_delete' => '0'];
		$query = $this->pesanan_model->hapus_pesanan_user($data, $where);
		$url = base_url('pelanggan/pesanan_saya');
			echo $this->session->set_flashdata('msg', '<div class="nk-info-box text-success">
				<div class="nk-info-box-icon">
				<i class="ion-checkmark-round"></i>
				</div>
				<div class="nk-info-box-close nk-info-box-close-btn">
				<i class="ion-close-round"></i>
				</div>
				<h3> Data berhasil di hapus.</h3>
				</div>');
			redirect($url);
	}
}