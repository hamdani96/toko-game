<?php
/**
 * 
 */
class User_model extends CI_Model
{
	
	public function get_data(){
		return $this->db->get('tb_user');
	}

	public function simpan_data($data){
		return $this->db->insert('tb_user', $data);
	}

	public function edit_data($data, $where){
		$this->db->where($where);
		$this->db->update('tb_user', $data);
	}

	public function hapus_data($where){
		$this->db->delete('tb_user', $where);
	}

	public function aktiv_user($where, $aktiv){
		$this->db->set('status');	
		$this->db->where($where);
		$this->db->update('tb_user', $aktiv);
	}

	public function get_by_id($where){
		$this->db->where($where);
		return $this->db->get('tb_user');
	}

	public function edit_data_profil_user($data, $where){
		$this->db->set('nama_user');
		$this->db->set('jk');
		$this->db->set('no_hp');
		$this->db->where($where);
		$this->db->update('tb_user', $data);
	}

	public function edit_data_akun_user($data, $where){
		$this->db->set('email');
		$this->db->set('password');
		$this->db->where($where);
		$this->db->update('tb_user', $data);
	}
}