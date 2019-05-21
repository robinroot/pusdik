<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_konfigurasi extends CI_Model {


	public function get_config(){
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$query = $this->db->get()->row();
		return $query;
	}

	public function update_config($data, $id){
		$this->db->update('konfigurasi',$data);
		$this->db->where('id_konfigurasi',$id);
	}

	public function get_profile(){
		$query = $this->db->get('profil');
		return $query;
	}

	public function update_profile($id, $datas){
		$this->db->update('profil', $datas);
		$this->db->where('id_profile', $id);

	}

	public function listing(){
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$this->db->order_by('id_konfigurasi','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_quotes(){
		$this->db->select('*');
		$this->db->from('quote');
		$query = $this->db->get()->row();
		return $query;
	}

	public function post_quote($id,$data){
		$this->db->update('quote',$data);
		$this->db->where('id_quote',$id);
	}


	function GetVisitor($where = ""){
		return $this->db->query("select * from visitor $where");
	}

	function GetContent($where = ''){
		return $this->db->query("select * from berita $where;");
	}

	public function InsertData($table,$data){
		return $this->db->insert($table,$data);
	}

	public function UpdateData($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

	public function list_account(){
		return $this->db->get('users');
	}

	public function list_users($id){
		$this->db->where('id_user', $id);
		return $this->db->get('users');
	}

	public function update_akun($data, $id_user) {
		$this->db->where('id_user',$id_user);
		$this->db->update('users',$data);
	}

	public function delete_account($data){
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('users',$data);
	}

	public function save_change($id, $data){
		$this->db->where('id_user', $id);
		$this->db->update('users',  $data);

	}

	function Getuser($where) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        $data=$this->db->get();
        return $data;
    }


}
