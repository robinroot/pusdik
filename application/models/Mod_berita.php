<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_berita extends CI_Model {



	//Read
	public function read($slug_berita) {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('slug_berita',$slug_berita);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function listing() {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function listing_edit($id) {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita')->where('id_berita',$id);

		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function getview_tambahberita() {
		$this->db->select('*');
		$this->db->from('kategori_berita');
		$this->db->order_by('urutan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function kategori_berita($id){
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama')->from('berita')->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT')->join('users','users.id_user = berita.id_user','LEFT')->where('berita.id_kategori_berita',$id);
		// $this->db->order_by('id_berita','DESC'); 
		$query = $this->db->get();
		return $query->result();
	}

	public function get_kategoriberita(){
		$this->db->select('nama_kategori_berita, id_kategori_berita')->from('kategori_berita');
		$query = $this->db->get();
		return $query->result();
	}



	// Tambah
	public function tambah($data) {
		$this->db->insert('berita',$data);
	}


	public function getAll($like, $where, $limit, $offset){

		$this->db->join("kategori_berita b","a.id_kategori_berita = b.id_kategori_berita","left")
			->join("users c","a.id_user = c.id_user","left");
		if($like){
			$this->db->where($like);
		}

		if($where){
			$this->db->where($where);
		}

		if($limit != '' || $offset != ''){
			$query = $this->db->get("berita a", $limit, $offset);
		}else{
			$query = $this->db->get("berita a");
		}

		return $query;	
	}


	public function getCount($like, $where){
		$this->db->join("kategori_berita b","a.id_kategori_berita = b.id_kategori_berita","left");

		if($like){
			$this->db->where($like);
		}

		if($where){
			$this->db->where($where);
		}

		$query = $this->db->get("berita a");

		return $query->num_rows();
	}

	public function get_edit(){
		
	}

	public function delete($data){
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->delete('berita',$data);
	}

	public function edit($data, $idberita) {
		
		$this->db->where('id_berita',$idberita);
		$this->db->update('berita',$data);
	}


	#function tampil berita home
	public function home(){
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('berita.status_berita','Publish');
		$this->db->order_by('id_berita','DESC'); 
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

	public function bloghome(){
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('berita.status_berita','Publish');
		// $this->db->order_by('id_berita','DESC'); 
		$query = $this->db->get();
		return $query->result();
	}

	public function popular_post(){
	
		$this->db->select('count, nama_berita, tanggal_post, slug_berita');
		$this->db->from('berita');
		$this->db->order_by('count','DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();

	}

	public function count_berita(){
		$query = $this->db->get('berita');
		return $query->result();
	}

	public function count_katberita(){
		$query = $this->db->get('kategori_berita');
		return $query->result();
	}


}