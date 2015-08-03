<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

	var $table = 'users';
	var $max_idle_time = 300;

    function __construct()
    {
        parent::__construct();
    }
    
	function save( $user_data ) {
		$this->db->insert($this->table , $user_data); 
		return $this->db->insert_id();
	}
	function update( $user_data ) {
		if (isset($user_data['id'])) {
			$this->db->where('id', $user_data['id'] );
			$this->db->update( $this->table , $user_data); 
			return $this->db->affected_rows();
		}
		return false;
	}
	
	function get_by_username( $username ) {
		$query = $this->db->get_where($this->table, array('username' => $username), 1);
		if( $query->num_rows() > 0 ) return $query->row_array();
		return false;
	}
	
	function allow_pass( $user_data ) {
		$this->session->set_userdata( array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data ) );
	}
	
	function is_logged_in() {
		$last_activity = $this->session->userdata('last_activity');
		$logged_in = $this->session->userdata('logged_in');
		$user = $this->session->userdata('user');
		
		if ( ($logged_in == 'yes') 
		&& ((time() - $last_activity) < $this->max_idle_time )) {
			$this->allow_pass( $user );
			return true;
		} else {
			$this->remove_pass();
			return false;
		}
	}
	
	function remove_pass() {
		$array_items = array('last_activity' => '', 'logged_in' => '', 'user' => '');
		$this->session->unset_userdata($array_items);
	}
	
	function get_by_id( $id ) {
		$query = $this->db->get_where($this->table, array('id' => $id), 1);
		if( $query->num_rows() > 0 ) return $query->row_array();
		return false;
	}

	function email_exists( $email ) {
		$query = $this->db->get_where($this->table, array('email' => $email), 1);
		if( $query->num_rows() > 0 ) return true;
		return false;
	}
	
	function username_exists( $username ) {
		$query = $this->db->get_where($this->table, array('username' => $username), 1);
		if( $query->num_rows() > 0 ) return true;
		return false;
	}

	function hash_password( $password ) {
		$salt = $this->generate_salt();
		return $salt.'.'.md5( $salt.$password);
	}
	
	function check_password( $password, $hashed_password ) {
		list($salt, $hash) = explode('.', $hashed_password);
		$hashed2 = $salt.'.'.md5( $salt.$password);
		return ($hashed_password == $hashed2);
	}
	
	private function generate_salt( $length = 10 ) {
        $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $i = 0;
        $salt = "";
        while ($i < $length) {
            $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
            $i++;
        }
        return $salt;
	}
	
}
