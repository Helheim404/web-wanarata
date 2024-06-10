<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
	public function index(){
			$data['title'] = 'Semua Berita ';
			$jumlah= $this->model_berita->hitungberita()->num_rows();
			$config['base_url'] = base_url().'berita/index';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 10; 	
			if ($this->uri->segment('3')!=''){
				$dari = $this->uri->segment('3');
			}else{
				$dari = 0;
			}

			if (is_numeric($dari)) {
				$data['berita'] = $this->model_berita->semua_berita($dari, $config['per_page']);
			}else{
				redirect('berita');
			}
			//style pagination
			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';
			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();

		$this->load->view('phpmu-one/berita',$data);
	}

	public function detail(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM berita where judul_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('main');
	        }
		$data['title'] = cetak($row->judul);
		$data['description'] = cetak($row->isi_berita);
		$data['keywords'] = keywords();
		$data['record'] = $this->model_berita->berita_detail($ids)->row_array();
		$data['infoterbaru'] = $this->model_berita->info_terbaru(6);
		$this->load->view('phpmu-one/artikel',$data);
	}
}
