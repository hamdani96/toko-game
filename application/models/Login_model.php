<?php
/**
 * 
 */
class Login_model extends CI_Model
{
	
	public function auth_admin($username, $password){
		$query = $this->db->query("SELECT * FROM tb_admin WHERE username='$username' AND password=md5('$password') LIMIT 1 ");
		return $query;
	}

	public function auth_pelanggan($email, $password) {
		$this->db->where('email', $email);
		$query = $this->db->get('tb_user');
		if ($query->num_rows() == 1) {
			$hash = $query->row('password');
			if (password_verify($password,$hash)){
				return $query->result();
			} else {
				echo "Wrong Password. Try again.";
			}
		} else {
			echo "Account is not existed.";
		}
	}
}