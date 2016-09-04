<?php
class Model_login extends CI_model {
	protected $table = 'accounts';

	public function authenticate_user($userName, $password) {
		$this->db->start_cache();
    $this->db->flush_cache();
    $result = false;

    $condition = "username =" . "'" .$userName. "' AND " . "password =" . "'" . md5($password) . "'";

    $query = $this->db->select("*")
        ->from('accounts')
        ->where($condition)
        ->limit(1)
        ->get();

    if ($query->num_rows() == 1){
        $result =  $query->row_array();
    }
    return $result;
	}
}
