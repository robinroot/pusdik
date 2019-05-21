<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {


	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
	}

	public function update_quotes(){
		
	}

}