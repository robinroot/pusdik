<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_berita');
		$this->load->model('Mod_konfigurasi');
		$this->load->model('Mod_profilehome');
	}


	public function index()
	{
		$this->countervisitor();
		$data['sosmed'] = $this->Mod_konfigurasi->listing();
		$data['judul'] = $this->Mod_konfigurasi->listing();
		$data['berita'] = $this->Mod_berita->home();
		$data['ambilquote'] = $this->Mod_konfigurasi->get_quotes();
		$data['title'] = 'PUSDIKHUB KODIKLAT TNI-AD';
		$this->load->view('frontend/layout/vwHeader', $data);
		$this->load->view('frontend/layout/vwContent',$data);
		$this->load->view('frontend/layout/vwFooter',$data);
	}

	public function kontak(){
		$data = array('title' => "Kontak Kami",
									'sosmed' => $this->Mod_konfigurasi->listing()
	 	);

		$this->load->view('frontend/layout/vwHeader', $data);
		$this->load->view('frontend/layout/vwKontak',$data);
		$this->load->view('frontend/layout/vwFooter',$data);
	}

	public function profile(){
		$data['sosmed'] = $this->Mod_konfigurasi->listing();
		$data['title'] = 'PUSDIKHUB KODIKLAT TNI-AD';
		$data['isi_profile'] = $this->Mod_profilehome->get_profile();
		$this->load->view('frontend/layout/vwHeader',$data);
		$this->load->view('frontend/blog/vwProfile',$data);
		$this->load->view('frontend/layout/vwFooter',$data);

	}

	public function link(){
		$data['sosmed'] = $this->Mod_konfigurasi->listing();
		$data['title'] = 'PUSDIKHUB KODIKLAT TNI-AD';
		$this->load->view('frontend/layout/vwHeader',$data);
		$this->load->view('frontend/layout/vwLink',$data);
		$this->load->view('frontend/layout/vwFooter',$data);
	}


	private function countervisitor(){
		if($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_robot()){
			$agent = $this->agent->robot();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Unidentified User Agent';
		}

		$data_visitor = $this->Mod_konfigurasi->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."'")->result_array();
		if($data_visitor == NULL){
			$data = array(
				'ip' => $_SERVER['REMOTE_ADDR'],
				'os' => $this->agent->platform(),
				'browser' => $agent,
				'tanggal' => date("Y-m-d H:i:s")
			);
			$this->Mod_konfigurasi->InsertData('visitor',$data);
			$this->session->set_userdata('PUSDIKHUB_TNIAD',"robinroot");
			setcookie("PUSDIKHUB_TNIAD",'robinroot', time()+3600*24);
		}else{
			if(!isset($_COOKIE['PUSDIKHUB_TNIAD'])){
				$data_visitor = $this->Mod_konfigurasi->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."' and tanggal = '".date("Y-m-d H:i:s")."'");
				if($data_visitor != NULL){
					if(!$this->session->userdata('PUSDIKHUB_TNIAD')){
						$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
						);
						$this->Mod_konfigurasi->InsertData('visitor', $data);
						$this->session->set_userdata('PUSDIKHUB_TNIAD',"robinroot");
						setcookie("PUSDIKHUB_TNIAD",'robinroot', time()+3600*24);
					}else{
						setcookie("PUSDIKHUB_TNIAD",'robinroot', time()+3600*24);
					}
				}else{
					$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
					);
					$this->Mod_konfigurasi->InsertData('visitor', $data);
					$this->session->set_userdata('PUSDIKHUB_TNIAD',"robinroot");
					setcookie("PUSDIKHUB_TNIAD",'robinroot', time()+3600*24);
				}
			}
		}
	}

}
