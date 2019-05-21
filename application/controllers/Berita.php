<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_berita');
		$this->load->model('Mod_komentar');
		$this->load->model('Mod_konfigurasi');
		$this->load->library('upload');
	}

	
	public function index(){

		if ($this->session->userdata('status') != 'login') {
			redirect('berita/listing','refresh');
			exit;
		}

		$data['title'] = 'Berita';
		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwIndex');
		$this->load->view('backend/layout/vwFooter');
	}


	public function read($pg=1){
		$limit = $this->input->post('limit');
		$search = $this->input->post('search');
		$offset = ($limit*$pg) - $limit;
		$like = '';
		$where = '';

		if($search){
			$like = "(a.nama_berita LIKE '%$search%' OR a.keterangan LIKE '%$search%' )";
		}
		$datalist = $this->Mod_berita->getAll($like, $where, $limit, $offset);

		$page                = array();
        $page['limit']       = $limit;
        $page['count_limit'] = $datalist->num_rows();
        $page['count_row']   = $this->Mod_berita->getCount($like, $where );
        $page['current']     = $pg;
        $page['list']        = gen_paging($page);

        $data['paging'] = $page;
        $data['list']   = $datalist;

        $view = $this->load->view('backend/berita/vwList',$data, true);
        echo json_encode(array('view' => $view));
	}

	//read frontend berita
	public function read_berita_frontend($pg=1){
		$limit = $this->input->post('limit');
		$search = $this->input->post('search');
		$offset = ($limit*$pg) - $limit;
		$like = '';
		$where = '';

		if($search){
			$like = "(a.nama_berita LIKE '%$search%' )";
		}
		$datalist = $this->Mod_berita->getAll($like, $where, $limit, $offset);

		$page                = array();
        $page['limit']       = $limit;
        $page['count_limit'] = $datalist->num_rows();
        $page['count_row']   = $this->Mod_berita->getCount($like, $where );
        $page['current']     = $pg;
        $page['list']        = gen_paging($page);

        $data['paging'] = $page;
        $data['list']   = $datalist;


        $view = $this->load->view('frontend/blog/vwListBerita',$data, true);
        echo json_encode(array('view' => $view));
	}

	public function read_berita($slug_berita){
		$this->countervisitor();
		$site	= $this->Mod_konfigurasi->listing();
		$berita	= $this->Mod_berita->read($slug_berita);
		$read	= $this->Mod_berita->read($slug_berita);
		$data	= array( 'title'	=> $read->nama_berita,
						 'keywords' => $read->nama_berita,
						 'kategori' => $this->Mod_berita->get_kategoriberita(),
						 'berita'	=> $berita,
						 'read'		=> $read,
						 'popular_post' => $this->Mod_berita->popular_post(),
						 'komentar' => $this->Mod_komentar->GetComment("where berita.slug_berita = '$slug_berita' and komentar.status = 'publish'")->result_array()
						);
		$this->cookiesetter($slug_berita);
		$this->load->view('frontend/blog/layout/header');
		$this->load->view("frontend/blog/layout/content",$data);
		$this->load->view('frontend/blog/layout/footer',$data);
		
	}

	public function listing(){
		$data['sosmed'] = $this->Mod_konfigurasi->listing();
		$data['judul'] = $this->Mod_konfigurasi->listing();
		$data['berita'] = $this->Mod_berita->bloghome();
		$data['sosmed'] = $this->Mod_konfigurasi->listing();
		$data['title'] = 'Berita';
		$this->load->view('frontend/layout/vwHeader',$data);
		$this->load->view('frontend/blog/vwBerita',$data);
		$this->load->view('frontend/layout/vwFooter',$data);
	}

	public function kategoriberita($id){
		$id = $this->uri->segment(3);
		$data = array('kategori' => $this->Mod_berita->kategori_berita($id),
					  'title' => "kategori Berita",
					  'sosmed' => $this->Mod_konfigurasi->listing()
					);
		
		$this->load->view('frontend/layout/vwHeader',$data);
		$this->load->view('frontend/blog/kategoriberita',$data);
		$this->load->view('frontend/layout/vwFooter',$data);
	}


	// public function debug(){
	// 	echo "<pre>";
	// 	print_r($this->Mod_berita->popular_post());
	// 	echo "</pre>";
	// }


	public function tambah_berita(){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
		}

		$kategori	= $this->mod_berita->getview_tambahberita();
		$datas = array(	'title'		=> 'Tambah berita',
						'kategori'	=> $kategori,
						'error'		=> ''
					);
		
		
		$this->load->view('backend/layout/vwSidebar', $datas);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwTambah',$datas);
		$this->load->view('backend/layout/vwFooter');
	}

	function simpan(){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
		}

		$val = $this->form_validation;
		$val->set_rules('nama_berita','Nama berita','required|is_unique[berita.nama_berita]',
			array(	'required'		=> 'Nama berita harus diisi',
					'is_unique'		=> 'Nama berita: <strong>'.$this->input->post('nama_berita').
									   '</strong> sudah ada. Buat nama yang berbeda'));
		$val->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		$nmgambar = '';
		// if($val->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg|jpeg';
			$config['max_size']			= '12000'; // KB	
			// $this->load->library('upload', $config);
				$this->upload->initialize($config);
			if(! $this->upload->do_upload('gambar')) {
				var_dump($this->upload->display_errors()." ".$config['upload_path']);exit();
			}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$configs['image_library']	= 'gd2';
				$configs['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$configs['new_image'] 		= './assets/upload/image/thumbs/';
				$configs['create_thumb'] 	= TRUE;
				$configs['quality'] 			= "100%";
				$configs['maintain_ratio'] 	= TRUE;
				$configs['width'] 			= 360; // Pixel
				$configs['height'] 			= 200; // Pixel
				$configs['x_axis'] 			= 0;
				$configs['y_axis'] 			= 0;
				$configs['thumb_marker'] 	= '';
				$this->load->library('image_lib', $configs);
				$this->image_lib->resize();
				$nmgambar = $upload_data['uploads']['file_name'];
			
						}
	

		$i = $this->input;
			$data = array(	'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_berita'				=> $i->post('jenis_berita'),
							'status_berita'			=> $i->post('status_berita'),
							'gambar'				=> $nmgambar,
							'tanggal_post'			=> date('Y-m-d H:i:s')
							);
			$this->Mod_berita->tambah($data);
			$this->session->set_flashdata('sukses','Berita telah ditambah');
			redirect(base_url('berita'));
	}

	public function edit($id_berita){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
		}

		$data['list'] = $this->mod_berita->listing_edit($id_berita);
		$data['kategori'] = $this->db->get('kategori_berita')->result();
		$data['title'] = "Edit Berita"; 
		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwEdit',$data);
		$this->load->view('backend/layout/vwFooter');
	}

	public function do_edit(){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
		}

	$this->load->model('mod_kategoriberita');
	$id_kategori_berita = $this->uri->segment(3);
	$i = $this->input;
	$id_berita = $i->post('id_berita');
	$data = array('nama_berita' => $i->post('nama_berita',TRUE),
				  'keterangan' => $i->post('keterangan'),
				  'id_kategori_berita' => $i->post('id_kategori_berita')
				);
	$this->mod_berita->edit($data, $id_berita);
			redirect(base_url('berita'));
	}


	public function delete($id_berita){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit;
		}

		$data = array('id_berita'	=> $id_berita);
		$this->mod_berita->delete($data);
		$this->session->set_flashdata('sukses','berita telah didelete');
		redirect("/berita");
		exit();
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
						setcookie("_gf",'robinroot', time()+3600*24, '/');
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


	private function cookiesetter($slug_berita){
		if(!isset($_COOKIE[$slug_berita])){
			$content = $this->Mod_konfigurasi->GetContent("where slug_berita = '$slug_berita'")->result_array();
			$result = $this->Mod_konfigurasi->UpdateData('berita',array('count' => ($content[0]['count']+1)),array('slug_berita'=>$slug_berita));
			if($result == 1){
				setcookie($slug_berita,"http://localhost/pusdikhub/id/home", time()+3600);
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("/gerbang");
		exit();
	}

}
