<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kategoriberita extends CI_Model {

	
	public function getAll($like, $where, $limit, $offset){

		if($like){
			$this->db->where($like);
		}

		if($where){
			$this->db->where($where);
		}

		if($limit != '' || $offset != ''){
			$query = $this->db->get("kategori_berita", $limit, $offset);
		}else{
			$query = $this->db->get("kategori_berita");
		}

		return $query;	
	}

	public function getCount($like, $where){

		if($like){
			$this->db->where($like);
		}

		if($where){
			$this->db->where($where);
		}

		$query = $this->db->get("kategori_berita");

		return $query->num_rows();
	}

	public function tambah($data){
		$this->db->insert('kategori_berita',$data);
	}

	public function edit($data, $id_kategori_berita) {
		
		$this->db->where('id_kategori_berita',$id_kategori_berita);
		$this->db->update('kategori_berita',$data);
	}


	public function delete($data){
		$this->db->where('id_kategori_berita',$data['id_kategori_berita']);
		$this->db->delete('kategori_berita',$data);
	}

}
