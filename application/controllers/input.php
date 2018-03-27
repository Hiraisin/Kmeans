<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	
	public function index()
	{
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
	}
        
        public function in_jagung()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Jagung';
            $isi['simpan']  ='sim_jagung';
            $isi['tabel']   ='data_kedelai';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
        }
        
        public function in_padi_l()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Padi Ladang';
            $isi['simpan']  ='sim_padi_l';
            $isi['tabel']   ='data_padi_ladang';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
        }
        
        public function in_padi_s()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Padi Sawah';
            $isi['simpan']  ='sim_padi_s';
            $isi['tabel']   ='data_padi_sawah';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
        }
        
        public function in_kedelai()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Kedelai';
            $isi['simpan']  ='sim_kedelai';
            $isi['tabel']   ='data_kedelai';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
        }
        
        
        public function sim_jagung()
        {
            $this->model_security->getsecurity();          
            $data['kecamatan']  = $this->input->post('kecamatan');
            $data['tanam']      = $this->input->post('tanam');
            $data['panen']      = $this->input->post('panen');
            $data['produksi']   = $this->input->post('produksi');
            $data['tahun']      = $this->input->post('tahun');
            
            $this->load->model('model_jagung');
            $this->model_jagung->getinsert($data);
            
            redirect('admin/tampil_jagung');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }
}
