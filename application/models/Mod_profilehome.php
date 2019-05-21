<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_profilehome extends CI_Model {

public function get_profile(){
		$this->db->select('*');
		$this->db->from('profil');
		$query = $this->db->get()->row();
		return $query;
}



}