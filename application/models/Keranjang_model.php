<?php
/**
 * 
 */
class Keranjang_model extends CI_Model
{
	
	public function set_keranjang(){
		$data = [
			'id_produk' => $this->input->post('id_produk'),
			'id_user' => $this->input->post('id_user'),
			'jumlah' => '1',
			'status' => '1'
		];

		return $this->db->insert('tb_keranjang', $data);
	}

	public function get_by_session(){
		$query = $this->db->query("SELECT tb_keranjang.id_keranjang,tb_keranjang.id_produk,tb_keranjang.id_user,tb_keranjang.jumlah,tb_keranjang.status,tb_produk.nama_produk,tb_produk.harga_produk,tb_produk.photo FROM tb_keranjang JOIN tb_produk ON tb_keranjang.id_produk=tb_produk.id_produk JOIN tb_user ON tb_keranjang.id_user=tb_user.id_user WHERE tb_keranjang.status = '1' AND tb_user.id_user='".$this->session->userdata('id_user')."' ");
		return $query;
	}

	public function hapus_data($where){
		$this->db->delete('tb_keranjang', $where);
		return TRUE;
	}

	public function aksi_check($data){
		return $this->db->insert('tb_pesanan', $data);
	}

	public function edit_status_keranjang($data2, $where){
		$this->db->set('status');
		$this->db->where($where);
		$this->db->update('tb_keranjang', $data2);
	}
}