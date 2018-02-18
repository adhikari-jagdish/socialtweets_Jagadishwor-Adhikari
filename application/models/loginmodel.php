<?php

class Loginmodel extends CI_Model{

public function check_login($username, $password)
{
	$q = $this->db->where(['username'=>$username, 'password'=>$password]) ->from('users') ->get();

	if($q->num_rows())
	{
		return TRUE; 
	}

	else{
		return FALSE;
	}
	
}

public function fetch_data()
{
	$query = $this->db->get("users");
	return $query;

}

}

?>