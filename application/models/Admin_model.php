<?php
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	public function get_by_id($where){
		$this->db->where($where);
		return $this->db->get('tb_admin');
	}

	public function edit_akun_admin($data, $where){
		$this->db->set('username');
		$this->db->set('password');
		$this->db->where($where);
		$this->db->update('tb_admin', $data);
	}

	public function edit_profil_admin($data, $where){
		$this->db->set('nama_admin');
		$this->db->where($where);
		$this->db->update('tb_admin', $data);
	}
}