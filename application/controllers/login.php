<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
            $data = array ( 'title'         => '.:: Login ::.',
                            'error'         => '',		
                            'sub'           => 'Selamat Datang di Sistem Informasi Data Mining Dinas Pertanian dan Peternakan',
                            'titlesistem'   => 'Selamat Datang',
                          );
            $this->load->view('depan',$data);
	}
        public function getlogin()
        {
            $a =$this->input->post('username');
            $b =$this->input->post('password');
            $this->load->model('model_login');         
            $this->model_login->getlogin($a,$b);
        }
}
