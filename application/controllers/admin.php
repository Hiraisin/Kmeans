<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Judul';
            $isi['sub']     ='Sub';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/home');
            $this->load->view('admin/footer');
	}
                        
        public function simpan_jagung()
        {
            $this->model_security->getsecurity();          
            $data['kecamatan']  = $this->input->post('kecamatan');
            $data['tanam']      = $this->input->post('tanam');
            $data['panen']      = $this->input->post('panen');
            $data['produksi']   = $this->input->post('produksi');
            $data['tahun']      = $this->input->post('tahun');
            
            $this->load->model('model_jagung');
            $this->model_jagung->getinsert($data);
            
            redirect('admin/tampil');
        }
        
        public function tampil_jagung() 
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Jagung'; 
            $isi['input']    ='in_jagung';
            $isi['data']     = $this->db->get('data_jagung');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');
        }
        
        public function tampil_padi_l() 
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Padi Ladang';
            $isi['input']    ='in_padi_l';
            $isi['data']     = $this->db->get('data_padi_ladang');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');
        }
        
        public function tampil_padi_s() 
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Padi Sawah';
            $isi['input']    ='in_padi_s';
            $isi['data']     = $this->db->get('data_padi_sawah');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');
        }
        
        public function tampil_kedelai() 
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Kedelai';
            $isi['input']    ='in_kedelai';
            $isi['data']     = $this->db->get('data_kedelai');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');
        }
        
        public function delete() 
        {
            $this->model_security->getsecurity();
            $this->load->model('model_jagung');
            
            $key= $this->uri->segment(3);
            $this->db->where('kd_data',$key);
            $query= $this->db->get('data_jagung');
            if($query->num_rows>0)
            {
                $this->model_jagung->getdelete($key);
            }
            redirect('admin/tampil');
        }
        
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }       
    
}
