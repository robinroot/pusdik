<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit();
		}
		$this->load->model('mod_kategoriberita');
	}

	public function index()
	{
		$data['title'] = 'Kategori Berita';
		$this->load->view('backend/layout/vwSidebar', $data);
		$this->load->view('backend/layout/vwHeader');
		$this->load->view('backend/kategoriberita/vwIndex');
		$this->load->view('backend/layout/vwFooter');
	}

	public function read_kategori_berita($pg=1){
		if ($this->session->userdata('status') != 'login') {
			redirect('gerbang','refresh');
			exit();
		}
		
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

        $view = $this->load->view('backend/kategoriberita/vwList',$data, true);
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
			$this->session->set_flashdata('sukses','Kategori berita telah ditambah');
			redirect(base_url('dashboard/kategori_berita'));
			exit();
		}
	}


	public function edit_kategori_berita($id_kategori_berita) {
	// $uri = $this->uri->segment($id_kategori_berita);
	$i = $this->input;
	$slug_kategori	= url_title($i->post('nama_kategori_berita'),'dash',TRUE);
	$data = array('nama_kategori_berita' => $i->post('nama_kategori_berita'),
				  'keterangan' => $i->post('keterangan') , 'urutan' => $i->post('urutan'), 'slug_kategori_berita' => $slug_kategori

				);
	$this->mod_kategoriberita->edit($data, $id_kategori_berita);
			redirect(base_url('dashboard/kategori_berita'));
	
}

	public function delete_kategori_berita($id_kategori_berita){
		$data = array('id_kategori_berita'	=> $id_kategori_berita);
		$this->mod_kategoriberita->delete($data);
		$this->session->set_flashdata('sukses','Kategori berita telah didelete');
		redirect(base_url('kategori_berita'));
	}

}
