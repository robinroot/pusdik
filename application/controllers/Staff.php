<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'login' || $this->session->userdata('level') != "staff") {
			redirect('gerbang','refresh');
			exit;
		}
		$this->load->model('mod_berita');
		$this->load->model('mod_kategoriberita');
		$this->load->model('Mod_konfigurasi');
		$this->load->library('upload');
	}


	public function index()
	{
		$data['total'] = $this->mod_berita->count_berita();
		$data['total_kategoriberita'] = $this->mod_berita->count_katberita();
		$data['title'] = 'Dashboard staff';
		$data['visitor'] = $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,10) = '".date("Y-m-d")."'")->num_rows();
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/vwIndex');
		$this->load->view('backend/layout/vwFooter');
	}

	public function profil(){
		$data['isi'] = $this->Mod_konfigurasi->get_profile();
		$data['title'] = 'Data - Profil';
		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/vwProfil',$data);
		$this->load->view('backend/layout/vwFooter');
	}




	public function berita()
	{
		$data['title'] = 'Berita';
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwIndex_staff');
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

		$datalist = $this->mod_berita->getAll($like, $where, $limit, $offset);

		$page                = array();
        $page['limit']       = $limit;
        $page['count_limit'] = $datalist->num_rows();
        $page['count_row']   = $this->mod_berita->getCount($like, $where );
        $page['current']     = $pg;
        $page['list']        = gen_paging($page);
        $data['paging'] = $page;
        $data['list']   = $datalist;

        $view = $this->load->view('backend/berita/vwListStaff',$data, true);
        echo json_encode(array('view' => $view));
	}

	public function tambah_berita(){
		$kategori	= $this->mod_berita->getview_tambahberita();


		$datas = array(	'title'		=> 'Tambah berita',
						'kategori'	=> $kategori,
						'error'		=> ''
					);


		$this->load->view('backend/layout/vwSidebar_staff', $datas);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwTambahStaff',$datas);
		$this->load->view('backend/layout/vwFooter');
	}

	function simpan(){
		$val = $this->form_validation;
		$val->set_rules('nama_berita','Nama berita','required|is_unique[berita.nama_berita]',
			array(	'required'		=> 'Nama berita harus diisi',
					'is_unique'		=> 'Nama berita: <strong>'.$this->input->post('nama_berita', TRUE).
									   '</strong> sudah ada. Buat nama yang berbeda'));
		$val->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		$nmgambar = '';
		// if($val->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
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
				$configs['width'] 			= 370; // Pixel
				$configs['height'] 			= 250; // Pixel
				$configs['x_axis'] 			= 0;
				$configs['y_axis'] 			= 0;
				$configs['thumb_marker'] 	= '';
				$this->load->library('image_lib', $configs);
				$this->image_lib->resize();
				$nmgambar = $upload_data['uploads']['file_name'];


			$i = $this->input;
			$data = array(	'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita',TRUE),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita',TRUE),
							'keterangan'			=> $i->post('keterangan',TRUE),
							'jenis_berita'			=> $i->post('jenis_berita',TRUE),
							'status_berita'			=> $i->post('status_berita',TRUE),
							'gambar'				=> $nmgambar,
							'tanggal_post'			=> date('Y-m-d H:i:s')
							);
			$this->mod_berita->tambah($data);
			$this->session->set_flashdata('sukses','<div class="alert alert-success"><strong>Behasil tambah berita</strong></div>');
			redirect(base_url('staff/berita'));
			exit;
	}
		}

	public function edit_berita($id_berita){
		$data['list'] = $this->mod_berita->listing_edit($id_berita);
		$data['kategori'] = $this->db->get('kategori_berita')->result();
		$data['title'] = "Edit Berita";
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/berita/vwEditStaff',$data);
		$this->load->view('backend/layout/vwFooter');
	}



	public function do_edit_berita(){
	$val = $this->form_validation;
		$val->set_rules('nama_berita','Nama berita','required|is_unique[berita.nama_berita]',
			array(	'required'		=> 'Nama berita harus diisi',
					'is_unique'		=> 'Nama berita: <strong>'.$this->input->post('nama_berita', TRUE).
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
				$configs['quality'] 		= "100%";
				$configs['maintain_ratio'] 	= TRUE;
				$configs['width'] 			= 370; // Pixel
				$configs['height'] 			= 250; // Pixel
				$configs['x_axis'] 			= 0;
				$configs['y_axis'] 			= 0;
				$configs['thumb_marker'] 	= '';
				$this->load->library('image_lib', $configs);
				$this->image_lib->resize();
				$nmgambar = $upload_data['uploads']['file_name'];


			$i = $this->input;
			$id_berita = $i->post('id_berita');
			$data = array(	'id_kategori_berita' => $i->post('id_kategori_berita',TRUE),
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita',TRUE),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita',TRUE),
							'keterangan'			=> $i->post('keterangan',TRUE),
							'jenis_berita'			=> $i->post('jenis_berita',TRUE),
							'status_berita'			=> $i->post('status_berita',TRUE),
							'gambar'				=> $nmgambar,
							'tanggal_post'			=> date('Y-m-d H:i:s')
							);
	$this->mod_berita->edit($data, $id_berita);
	$this->session->set_flashdata('edit','<div class="alert alert-success"><strong>Behasil edit berita</strong></div>');
			redirect(base_url('staff/berita'));
			exit;
	}
}


	public function delete_berita($id_berita){
		$data = array('id_berita'	=> $id_berita);
		$this->mod_berita->delete($data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><strong>Behasil delete berita</strong></div>');
		redirect("staff/berita");
		exit;
	}


	//kategori berita

	public function kategori_berita()
		{
		$data['title'] = 'Kategori Berita';
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/kategoriberita/vwIndexStaff');
		$this->load->view('backend/layout/vwFooter');
	}

	public function read_kategori_berita($pg=1){
		$limit = $this->input->post('limit');
		$search = $this->input->post('search');
		$offset = ($limit*$pg) - $limit;
		$like = '';
		$where = '';
		if($search){
			$like = "(nama_kategori_berita LIKE '%$search%' OR keterangan LIKE '%$search%' )";
		}

		$datalist = $this->mod_kategoriberita->getAll($like, $where, $limit, $offset);

		$page                = array();
        $page['limit']       = $limit;
        $page['count_limit'] = $datalist->num_rows();
        $page['count_row']   = $this->mod_kategoriberita->getCount($like, $where );
        $page['current']     = $pg;
        $page['list']        = gen_paging($page);

        $data['paging'] = $page;
        $data['list']   = $datalist;

        $view = $this->load->view('backend/kategoriberita/vwListStaff',$data, true);
        echo json_encode(array('view' => $view));
	}

	public function tambah_kategori_berita(){
		$this->form_validation->set_rules('nama_kategori_berita','Nama kategori','required',
			array(	'required'	=> 'Nama kategori berita harus diisi'));
		if($this->form_validation->run() === TRUE) {
			$i 				= $this->input;
			$slug_kategori	= url_title($i->post('nama_kategori_berita'),'dash',TRUE);
			$data = array(	'slug_kategori_berita'	=> $slug_kategori,
							'nama_kategori_berita'	=> $i->post('nama_kategori_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'urutan'				=> $i->post('urutan'));
			$this->mod_kategoriberita->tambah($data);
			$this->session->set_flashdata('sukses','<div class="alert alert-success"><strong>Behasil tambah kategori</strong></div>');
			redirect(base_url('staff/kategori_berita'));
			exit;
		}
	}


	public function edit_kategori_berita($id_kategori_berita) {
	$i = $this->input;
	$slug_kategori	= url_title($i->post('nama_kategori_berita'),'dash',TRUE);
	$data = array('nama_kategori_berita' => $i->post('nama_kategori_berita'),
				  'keterangan' => $i->post('keterangan') , 'urutan' => $i->post('urutan'), 'slug_kategori_berita' => $slug_kategori
				);
	$this->mod_kategoriberita->edit($data, $id_kategori_berita);
	$this->session->set_flashdata('sukses','<div class="alert alert-success"><strong>Behasil edit</strong></div>');
			redirect(base_url('staff/kategori_berita'));
			exit;
}

	public function delete_kategori_berita($id_kategori_berita)
	{
		$data = array('id_kategori_berita'	=> $id_kategori_berita);
		$this->mod_kategoriberita->delete($data);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><strong>Behasil delete</strong></div>');
		redirect(base_url('staff/kategori_berita'));
		exit;
	}


	//list komentar
	public function listcomment($mess = -1){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit();
		}
		$this->load->model('Mod_komentar');

		$datas = array(
			'message' => $mess,
			'session' => $this->session->userdata('login'),
			'comment' => $this->Mod_komentar->GetComment("order by id_comment desc")->result_array(),
			'title' => 'komentar'
		);

		$data['title'] = 'List Komentar';
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/listkomentar',$datas);
		$this->load->view('backend/layout/vwFooter');
	}


	public function publishingcomment($kode = 0){
		$this->load->model('Mod_komentar');
		$data = array('status' => 'publish');
		$result = $this->Mod_komentar->UpdateData('komentar',$data,array('id_comment' => $kode));
		if($result == 1){
			header('location:'.base_url().'Dashboard/listcomment/1');
			exit();
		}else{
			header('location:'.base_url().'Dashboard/listcomment/0');
			exit();
		}
	}

	public function deletingcomment($kode = 0){
		$this->load->model('Mod_komentar');
		$result = $this->Mod_komentar->DeleteData('komentar',array('id_comment' => $kode));
		if($result == 1){
			header('location:'.base_url().'Dashboard/listcomment/3');
			exit();
		}else{
			header('location:'.base_url().'Dashboard/listcomment/0');
			exit();
		}
	}


	function replycomment($kode = 0){
		$this->load->model('Mod_komentar');
		$data = array(
			'comment' => $this->Mod_komentar->GetComment("where berita.id_berita = '$kode' order by id_comment")->result_array(),
			'session' => $this->session->userdata('login'),
			'title' => 'balas komentar'
		);
		$this->load->view('backend/dashboard/commentreply',$data);
	}

	function myreply(){
		$this->load->model('Mod_komentar');
		if($_POST){
			$data_sess = $this->session->userdata('login');
			$data = array(
				'id_berita' => $_POST['id_berita'],
				'isi' => $_POST['mycomment'],
				'status' => 'publish',
				'pengirim' => $data_sess['pengguna'],
				'website' => 'google',
				'tanggal' => date("Y-m-d H:i:s")
			);
			$result = $this->Mod_komentar->InsertData('komentar',$data);
			if($result == 1){
				header('location:'.base_url().'Dashboard/listcomment/2');
				exit();
			}else{
				header('location:'.base_url().'Dashboard/listcomment/0');
				exit();
			}
		}else{
			$this->load->view('webadmin/pagenotfound',array('title' => 'page not found'));
		}
	}

	public function visitorberita(){
		$view_stat = array(
			'day' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,10) = '".date("Y-m-d")."'")->num_rows(),
			'yesterday' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,10) = '".date("Y-m-d", strtotime("yesterday"))."'")->num_rows(),
			'mounth' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,7) = '".date("Y-m")."'")->num_rows(),
			'year' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,4) = '".date("Y")."'")->num_rows(),
			'sepanjang_waktu' => $this->Mod_konfigurasi->GetVisitor()->num_rows() );

		$data = array('title' => "Statistik Visitor Berita",
					  'post' => $this->Mod_konfigurasi->GetContent("where status_berita = 'Publish' order by count desc limit 5")->result_array(),
					  'visitor' => $view_stat
			);

		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/vwStatistik',$data);
		$this->load->view('backend/layout/vwFooter');
	}


		public function visitorweb(){
		$view_stat = array(
			'day' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,10) = '".date("Y-m-d")."'")->num_rows(),
			'yesterday' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,10) = '".date("Y-m-d", strtotime("yesterday"))."'")->num_rows(),
			'mounth' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,7) = '".date("Y-m")."'")->num_rows(),
			'year' => $this->Mod_konfigurasi->GetVisitor("where SUBSTRING(tanggal,1,4) = '".date("Y")."'")->num_rows(),
			'sepanjang_waktu' => $this->Mod_konfigurasi->GetVisitor()->num_rows() );

		$data = array('title' => "Statistik Visitor Website",
					  'post' => $this->Mod_konfigurasi->GetContent("where status_berita = 'Publish' order by count desc limit 5")->result_array(),
					  'visitor' => $view_stat
			);

		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/vwStatistikWeb',$data);
		$this->load->view('backend/layout/vwFooter');
	}


	public function viewProfile(){
		$id = $this->session->id;
		$data =	array(
			'list' => $this->Mod_konfigurasi->list_users($id),
			'title' => "Profile"
		);
		$this->load->view('backend/layout/vwSidebar_staff', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/dashboard/vwProfileStaff',$data);
		$this->load->view('backend/layout/vwFooter');
	}

	function check_account(){

		$old_password=md5($this->input->post('opassword'));
		$id = $this->session->id;
		$cek=$this->Mod_konfigurasi->Getuser(array('password' => $old_password,'id_user'=>$id));
		if($cek->num_rows() > 0){
			echo json_encode(false);

			// jika cek user bernilai lebih dari sama dengan 1 (ada data) maka kirimkan nilai false
		} else{
			echo json_encode(true);
		}
	}

	public function savechange(){
		$id = $this->session->id;
		$pass = md5($this->input->post('password', TRUE));
		$data = array('nama' => $this->input->post('nama', TRUE),
									'email' => $this->input->post('email'),
									'username' => $this->input->post('username', TRUE),
									'password' => $pass
	);

		$this->Mod_konfigurasi->save_change($id, $data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><strong>Behasil ubah password, silahkan logout terlebih dahulu</strong></div>');
		redirect('staff/viewProfile','refresh');
		exit;
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("/gerbang");
		exit();
	}

}
