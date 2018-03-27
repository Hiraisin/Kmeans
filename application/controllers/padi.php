<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padi extends CI_Controller {
	
	public function index()
	{   
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Padi'; 
            $isi['hal']     ='padi';
            $isi['input']    ='in_padi';
            $isi['data']     = $this->db->get('data_padi');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');            
	}
        public function in_padi()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Padi';
            $isi['simpan']  ='sim_padi';
            $isi['tabel']   ='data_padi';
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/input_view');
            $this->load->view('admin/footer');
        }

        public function sim_padi()
        {
            $this->model_security->getsecurity();          
            $data['kecamatan']  = $this->input->post('kecamatan');
            $data['tanam']      = $this->input->post('tanam');
            $data['panen']      = $this->input->post('panen');
            $data['produksi']   = $this->input->post('produksi');
            $data['tahun']      = $this->input->post('tahun');
            
            $this->load->model('model_padi');
            $this->model_padi->getinsert($data);
            
            redirect('padi');
        }

        public function edit()
        {
            $this->model_security->getsecurity();
            
            $key= $this->uri->segment(3);
            $isi['judul']   ='Edit';
            $isi['sub']     ='Data Tanaman Padi';
            $isi['hal']     ='padi';
            $isi['update']  ='up_padi';
            $isi['data']    = $this->db->get('data_padi');
            
            $this->load->model('model_padi');
            $this->db->where('kd_data',$key);
            $query= $this->db->get('data_padi');
            if($query->num_rows>0)
            {
                foreach ($query->result() as $rows)
                {
                    $isi['kode']       = $rows->kd_data;
                    $isi['kecamatan']  = $rows->kecamatan;
                    $isi['tanam']      = $rows->tanam;
                    $isi['panen']      = $rows->panen;
                    $isi['produksi']   = $rows->produksi;
                    $isi['tahun']      = $rows->tahun;
                }                
            }
            
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/edit_view');
            $this->load->view('admin/footer'); 
        }

        public function up_padi() 
        {
            $this->model_security->getsecurity();          
            $id= $this->input->post('kode');
            $k  = $this->input->post('kecamatan');
            $t= $this->input->post('tanam');
            $pan= $this->input->post('panen');
            $pro = $this->input->post('produksi');
            $tahun= $this->input->post('tahun');
            
            $data = array(
            'kecamatan' => $k,
            'tanam' => $t,
            'panen' => $pan,
            'produksi' => $pro,
            'tahun' => $tahun
            );
            
            $where=array(
                'kd_data'=>$id
            );
            $this->load->model('model_padi');
            $this->model_padi->getupdate('data_padi',$data,$where);
            
            redirect('padi');
            
        }
        
        public function delete() 
        {
            $this->model_security->getsecurity();
            $this->load->model('model_padi');
            
            $key= $this->uri->segment(3);
            $this->db->where('kd_data',$key);
            $query= $this->db->get('data_padi');
            if($query->num_rows>0)
            {
                $this->model_padi->getdelete($key);
            }
            redirect('padi');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }
}
