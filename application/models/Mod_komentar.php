<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_komentar extends CI_Model {


	public function InsertData($table,$data){
		return $this->db->insert($table,$data);
	}


	function GetComment($where = ""){
		return $this->db->query("select berita.nama_berita,komentar.* from berita inner join komentar on komentar.id_berita=berita.id_berita $where");
	}


	public function UpdateData($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}
	

	public function DeleteData($table,$where){
		return $this->db->delete($table,$where);
	}

}