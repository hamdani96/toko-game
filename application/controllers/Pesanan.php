<?php
/**
 * 
 */
class Pesanan extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
            $url = base_url('login');
            redirect($url);
        }
		$this->load->model('pesanan_model');
	}
	public function pesanan_baru(){
		$data['data_pesanan_baru'] = $this->pesanan_model->get_pesanan_baru()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_pesanan_baru', $data);
		$this->load->view('admin/footer');
	}

	public function pesanan_proses(){
		$data['data_pesanan_proses'] = $this->pesanan_model->get_pesanan_proses()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_pesanan_proses', $data);
		$this->load->view('admin/footer');
	}

	public function pesanan_selesai(){
		$data['data_pesanan_selesai'] = $this->pesanan_model->get_pesanan_selesai()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_pesanan_selesai', $data);
		$this->load->view('admin/footer');
	}

	public function aksi_pesanan_baru($id){
		$where = ['id_pesanan' => $id];
		$data = ['status' => 'proses'];
		$cek = $this->pesanan_model->aksi_pesanan_baru($data, $where);
		if ($cek == TRUE) {
			$url = base_url('pesanan/pesanan_baru');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data Pesanan Berhasil Di Proses.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function aksi_pesanan_proses($id){
		$where = ['id_pesanan' => $id];
		$data = ['status' => 'selesai', 'tgl_berakhir' => $this->input->post('tgl_berakhir')];
		$cek = $this->pesanan_model->aksi_pesanan_proses($data, $where);
		if ($cek == TRUE) {
			$url = base_url('pesanan/pesanan_proses');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Pesanan telah selesai. Horee!!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}

	public function hapus_pesanan_selesai($id){
		$where = ['id_pesanan' => $id];
		$query = $this->pesanan_model->hapus_data_pesanan_selesai($where);
		if ($query == TRUE) {
			$url = base_url('pesanan/pesanan_selesai');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
				<strong> Data pesanan telah berhasil di hapus.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span class="fa fa-times"></span>
				</button>
				</div>');
			redirect($url);
		}
	}
}