<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		$jumlah= $this->model_berita->hitungberitautama()->num_rows();
		$config['base_url'] = base_url().'main/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 3; 	
		if ($this->uri->segment('3')!=''){
			$dari = $this->uri->segment('3');
		}else{
			$dari = 0;
		}

		if (is_numeric($dari)) {
			$data['utama'] = $this->model_berita->utama($dari, $config['per_page']);
		}else{
			redirect('main');
		}
		$this->load->view('phpmu-one/home',$data);
	}
}
