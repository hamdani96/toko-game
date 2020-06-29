<?php
/**
 * 
 */
class Informasi_umum extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('informasi_model');
	}

	public function index(){
		$data['data_tentang'] = $this->informasi_model->get_data()->result();
		$data['data_galeri'] = $this->informasi_model->get_data_galeri()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_informasi_umum', $data);
		$this->load->view('admin/footer');
	}

	public function edit_tentang($id){
		$where = ['id' => $id];
		$data = ['tentang' => $this->input->post('tentang')];
		$query = $this->informasi_model->edit_data_tentang($data, $where);
		if ($query == TRUE) {
			$url = base_url('informasi_umum');
			echo $this->session->set_flashdata('msg_tentang', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Edit.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}

	}

	public function simpan_galeri(){
		$path     = './assets_admin/images/img';
		$doUpload = $this->informasi_model->upload_foto('photo', $path);

		$judul_escape     = $this->db->escape_str($this->input->post('judul'));
		$deskripsi_escape = $this->db->escape_str($this->input->post('deskripsi'));

		$judul     = $this->security->xss_clean($judul_escape);
		$deskripsi = $this->security->xss_clean($deskripsi_escape);

		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi
		);

		if ($doUpload['result'] == 'success') {
			$data['photo']  = $doUpload['file']['file_name'];
		} else {
			print_r($doUpload['error']);
		}

		$doSave = $this->informasi_model->simpan_data('tb_galeri', $data);
		if ($doSave['res'] == 'sukses') {
			$url = base_url('informasi_umum');
			echo $this->session->set_flashdata('msg_galeri', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Simpan.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function edit_galeri($id){
		$path     = './assets_admin/images/img';

      // WHERE id = $id
		$where    = ['id_galeri' =>  $id];
      // Ambil data untuk mendapatkan value photo
		$resource = $this->informasi_model->get_data_by_id('tb_galeri', $where)->row();

      // Siapkan data yg akan diupdate
		$data = array(
			'judul'      =>  $this->input->post('judul'),
			'deskripsi'  =>  $this->input->post('deskripsi')
		);

      // Jika ada file yg diinput
		if ($_FILES['photo']['error'] < 1) {
			$doUpload = $this->informasi_model->upload_foto('photo', $path);

			if ($doUpload['result'] == 'success') {
          // Hapus foto sebelumnya
				unlink($path.$resource->photo);
				$data['photo']  = $doUpload['file']['file_name'];
			} else {
				echo $doUpload['error'];
			}
		}

		$doUpdate = $this->informasi_model->edit_data('tb_galeri', $where, $data);
		if ($doUpdate['res'] == 'sukses') {
			$url = base_url('informasi_umum');
			echo $this->session->set_flashdata('msg_galeri', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Perbarui.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function hapus_galeri($id) {
		$path     = './assets_admin/images/img';

     // WHERE id = $id
		$where    = ['id_produk' =>  $id];
     // Ambil data untuk mendapatkan value photo
		$resource = $this->informasi_model->get_data_by_id('tb_galeri', $where)->row();
		if ($resource) {
       // Hapus foto dari .assets/photo/users/namafoto.jpg
			unlink($path.$resource->photo);
			$doDelete = $this->informasi_model->hapus_data('tb_galeri', $where);
			if ($doDelete['res'] == 'sukses') {
				$url = base_url('informasi_umum');
				echo $this->session->set_flashdata('msg_galeri', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
					<strong> Data Berhasil Di Hapus.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span class="fa fa-times"></span>
					</button>
					</div>');
				redirect($url);
			}
		}
	}
	
}