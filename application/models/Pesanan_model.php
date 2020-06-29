<?php
/**
 * 
 */
class Pesanan_model extends CI_Model
{
	
	public function get_pesanan_baru(){
		$query = $this->db->query("SELECT tb_pesanan.id_pesanan,tb_pesanan.id_produk,tb_pesanan.id_user,tb_pesanan.nickname_discord,tb_pesanan.jumlah,tb_pesanan.status,tb_pesanan.tgl,tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga_produk,tb_user.id_user,tb_user.nama_user,tb_user.no_hp FROM tb_pesanan JOIN tb_produk ON tb_pesanan.id_produk=tb_produk.id_produk JOIN tb_user ON tb_pesanan.id_user=tb_user.id_user WHERE tb_pesanan.status = 'menunggu-pembayaran' ");
		return $query;
	}

	public function get_pesanan_proses(){
		$query = $this->db->query("SELECT tb_pesanan.id_pesanan,tb_pesanan.id_produk,tb_pesanan.id_user,tb_pesanan.nickname_discord,tb_pesanan.jumlah,tb_pesanan.status,tb_pesanan.tgl,tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga_produk,tb_user.id_user,tb_user.nama_user,tb_user.no_hp FROM tb_pesanan JOIN tb_produk ON tb_pesanan.id_produk=tb_produk.id_produk JOIN tb_user ON tb_pesanan.id_user=tb_user.id_user WHERE tb_pesanan.status = 'proses' ");
		return $query;
	}

	public function get_pesanan_selesai(){
		$query = $this->db->query("SELECT tb_pesanan.id_pesanan,tb_pesanan.id_produk,tb_pesanan.id_user,tb_pesanan.nickname_discord,tb_pesanan.jumlah,tb_pesanan.status,tb_pesanan.tgl,tb_pesanan.tgl_berakhir,tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga_produk,tb_user.id_user,tb_user.nama_user,tb_user.no_hp FROM tb_pesanan JOIN tb_produk ON tb_pesanan.id_produk=tb_produk.id_produk JOIN tb_user ON tb_pesanan.id_user=tb_user.id_user WHERE tb_pesanan.status = 'selesai' ");
		return $query;
	}

	public function get_by_session(){
		$query = $this->db->query("SELECT tb_pesanan.id_pesanan,tb_pesanan.id_produk,tb_pesanan.id_user,tb_pesanan.nickname_discord,tb_pesanan.jumlah,tb_pesanan.status,tb_pesanan.tgl,tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga_produk,tb_produk.photo,tb_user.id_user,tb_user.nama_user,tb_user.no_hp FROM tb_pesanan JOIN tb_produk ON tb_pesanan.id_produk=tb_produk.id_produk JOIN tb_user ON tb_pesanan.id_user=tb_user.id_user WHERE status_delete = '1' AND tb_user.id_user = '".$this->session->userdata('id_user')."' ");
		return $query;
	}

	public function get_layanan_aktif_by_session(){
		$query = $this->db->query("SELECT tb_pesanan.id_pesanan,tb_pesanan.id_produk,tb_pesanan.id_user,tb_pesanan.nickname_discord,tb_pesanan.jumlah,tb_pesanan.status,tb_pesanan.tgl,tb_pesanan.tgl_berakhir,tb_produk.id_produk,tb_produk.nama_produk,tb_produk.harga_produk,tb_produk.photo,tb_user.id_user,tb_user.nama_user,tb_user.no_hp FROM tb_pesanan JOIN tb_produk ON tb_pesanan.id_produk=tb_produk.id_produk JOIN tb_user ON tb_pesanan.id_user=tb_user.id_user WHERE tb_pesanan.status = 'selesai' AND tb_user.id_user = '".$this->session->userdata('id_user')."' ");
		return $query;
	}

	public function hapus_data_pesanan_selesai($where){
		$this->db->delete('tb_pesanan', $where);
		return TRUE;
	}

	public function hapus_pesanan_user($data, $where){
		$this->db->set('status_delete');
		$this->db->where($where);
		$this->db->update('tb_pesanan', $data);
	}

	public function aksi_pesanan_baru($data, $where){
		$this->db->set('status');
		$this->db->where($where);
		$this->db->update('tb_pesanan', $data);
		return TRUE;
	}

	public function aksi_pesanan_proses($data, $where){
		$this->db->set('status');
		$this->db->where($where);
		$this->db->update('tb_pesanan', $data);
		return TRUE;
	}
}