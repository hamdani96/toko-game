<?php
/**
 * 
 */
class Produk extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('produk_model');
		if($this->session->userdata('masuk') != TRUE){
            $url = base_url('login');
            redirect($url);
        }
	}

	public function index(){
		$data['data_produk'] = $this->produk_model->get_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_produk', $data);
		$this->load->view('admin/footer');
	}

	public function simpan_produk(){
		$path     = './assets_admin/images/img_produk';
		$doUpload = $this->produk_model->upload_foto('photo', $path);

		$nama_produk_escape     = $this->db->escape_str($this->input->post('nama_produk'));
		$harga_produk_escape = $this->db->escape_str($this->input->post('harga_produk'));
		$detail_produk_escape    = $this->db->escape_str($this->input->post('detail_produk'));

		$nama_produk     = $this->security->xss_clean($nama_produk_escape);
		$harga_produk = $this->security->xss_clean($harga_produk_escape);
		$detail_produk    = $this->security->xss_clean($detail_produk_escape);

		$data = array(
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'detail_produk' => $detail_produk
		);

		if ($doUpload['result'] == 'success') {
			$data['photo']  = $doUpload['file']['file_name'];
		} else {
			print_r($doUpload['error']);
		}

		$doSave = $this->produk_model->simpan_data('tb_produk', $data);
		if ($doSave['res'] == 'sukses') {
			$url = base_url('produk');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Simpan.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function edit_produk($id){
		$path     = './assets_admin/images/img_produk';

      // WHERE id = $id
		$where    = ['id_produk' =>  $id];
      // Ambil data untuk mendapatkan value photo
		$resource = $this->produk_model->get_data_by_id('tb_produk', $where)->row();

      // Siapkan data yg akan diupdate
		$data = array(
			'nama_produk'      =>  $this->input->post('nama_produk'),
			'harga_produk'  =>  $this->input->post('harga_produk'),
			'detail_produk'     =>  $this->input->post('detail_produk')
		);

      // Jika ada file yg diinput
		if ($_FILES['photo']['error'] < 1) {
			$doUpload = $this->produk_model->upload_foto('photo', $path);

			if ($doUpload['result'] == 'success') {
          // Hapus foto sebelumnya
				unlink($path.$resource->photo);
				$data['photo']  = $doUpload['file']['file_name'];
			} else {
				echo $doUpload['error'];
			}
		}

		$doUpdate = $this->produk_model->edit_data('tb_produk', $where, $data);
		if ($doUpdate['res'] == 'sukses') {
			$url = base_url('produk');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Berhasil Di Perbarui.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function hapus_produk($id) {
		$path     = './assets_admin/images/img_produk';

     // WHERE id = $id
		$where    = ['id_produk' =>  $id];
     // Ambil data untuk mendapatkan value photo
		$resource = $this->produk_model->get_data_by_id('tb_produk', $where)->row();
		if ($resource) {
       // Hapus foto dari .assets/photo/users/namafoto.jpg
			unlink($path.$resource->photo);
			$doDelete = $this->produk_model->hapus_data('tb_produk', $where);
			if ($doDelete['res'] == 'sukses') {
				$url = base_url('produk');
				echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
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