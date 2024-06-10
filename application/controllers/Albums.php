<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Albums extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('album')->num_rows();
			$config['base_url'] = base_url().'albums/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 25; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "Albums";
			if (is_numeric($dari)) {
				$data['album'] = $this->model_utama->view_where_ordering_limit('album',array('aktif' => 'Y'),'id_album','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load('phpmu-one/template','phpmu-one/album',$data);
	}

	
}
