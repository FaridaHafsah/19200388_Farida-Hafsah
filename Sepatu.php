<?php

class Sepatu extends CI_Controller {

    public function index() {
		
        $this->load->view('view-form-sepatu');
    }

    public function cetak() {
        $data = [
            'nama' => $this->input->post('nama'), 
            'no' => $this->input->post('no'),
			'merk' => $this->input->post('merk'),
		    'ukuran' => $this->input->post('ukuran')];
        $this->load->view('view-data-sepatu', $data);
    }

}