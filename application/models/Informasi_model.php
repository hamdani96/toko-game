<?php
/**
 * 
 */
class Informasi_model extends CI_Model
{
	
	public function get_data(){
		return $this->db->get('tb_tentang');
	}

	public function edit_data_tentang($data, $where){
		$this->db->where($where);
		$this->db->update('tb_tentang', $data);
		return TRUE;
	}

	public function get_data_galeri(){
		return $this->db->get('tb_galeri');
	}

	function get_data_by_id($table, $where = FALSE){
		if($where == TRUE) {
			$doGet  = $this->db->where($where)->get($table);
			return $doGet;
		}
		$doGet  = $this->db->get($table);
		return $doGet;
	}

	public function simpan_data($table, $data)
	{
		$doSave = $this->db->insert($table, $data);

		if ($doSave) {
			return ['res' => 'sukses'];
		} else {
			return ['res' => 'gagal'];
		}
	}

	public function upload_foto($name, $path) {
		$config['image_library']='gd2';
		$config['upload_path']    = $path;
		$config['allowed_types']  = 'jpg|jpeg|png|ico';
		$config['max_size']       = 5000;
		$config['quality']		  = '50%';
		$config['width']		  = 600;
		$config['height']		  = 400;
		$config['encrypt_name']   = FALSE;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload($name)) {
			$return = array(
				'result' => 'success',
				'file' => $this->upload->data(),
				'error' => ''
			);
			return $return;
		} else {
			$return = array(
				'result' => 'failed',
				'file' => '',
				'error' => $this->upload->display_errors()
			);
			return $return;
		}
	}

	public function edit_data($table, $where, $set) {
		$doUpdate = $this->db->where($where)
		->set($set)
		->update($table);
		if ($doUpdate) {
			return ['res' => 'sukses'];
		} else {
			return ['res' => 'gagal'];
		}

	}

	public function hapus_data($table, $where){
		$doDelete = $this->db->where($where)
		->delete($table);
    // DELETE FROM $table WHERE $where
		if ($doDelete) {
      // Jika berhasil akan me-return array res dengan value sukses
			return ['res' => 'sukses'];
		} else {
      // Jika gagal akan me-return array res dengan value gagal
			return ['res' => 'gagal'];
		}
	}
}