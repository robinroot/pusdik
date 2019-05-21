<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Mod_komentar");
	}

	function savecomment(){
		if($_POST){
			$data = array(
				'id_berita' => $_POST['id_berita'],
				'isi' => htmlentities($_POST['isi']),
				'status' => 'pending',
				'pengirim' => htmlentities($_POST["pengirim"]),
				'email' => htmlentities($_POST["email"]),
				'tanggal' => date("Y-m-d H:i:s")
			);
			$result = $this->Mod_komentar->InsertData('komentar',$data);
			if($result == 1){
				echo "1";
			}else{
				echo "0";
			}
		}else{
			echo "<h2>Access Denied !!</h2>";
		}
	}

	public function ajaxcaptcha($id_berita = 0){
		$vals = array(
			'img_path' => 'captcha/',
			'img_url' => base_url().'captcha',
			'font_path' => 'system/font/texb.ttf',
			'img_width' => 200,
			'img_height' => 60,
			'expiration' => 90
		);
		
		$cap = create_captcha($vals);
		// var_dump($caps);exit();
		$data = array(
			'captcha_time' => $cap['time'],
			'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
		);
		$expiration = time()-90;
		$this->db->query("delete from captcha where captcha_time < ".$expiration);
		$this->Mod_komentar->InsertData('captcha',$data);
		$this->load->view('frontend/blog/layout/form_komentar',array('kode_content' => $id_berita,'image' => $cap['image']));
	}

	function validasicaptcha(){
		if($_POST){
			$expiration = time()-90;
			$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
			
			$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
			$binds = array($_POST['text_user'], $this->input->ip_address(), $expiration);
			$query = $this->db->query($sql, $binds);
			$row = $query->row();

			if ($row->count == 0){
				echo "0";
			}else{
				echo "1";
			}
		}else{
			echo "<H2>Access Denied !!</H2>";
		}
	}

}
