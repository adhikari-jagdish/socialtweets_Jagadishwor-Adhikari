<?php

class Mainmodel extends CI_Model{


public function fetch_data()
{
	$query = $this->db->get("users");
	return $query;

}


}

?>