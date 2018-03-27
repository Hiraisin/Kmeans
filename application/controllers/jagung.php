<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jagung extends CI_Controller {
	
	public function index()
	{
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Tampil';
            $isi['sub']     ='Data Tanaman Jagung';
            $isi['hal']     ='jagung';
            $isi['input']    ='in_jagung';
            $isi['data']     = $this->db->get('data_jagung');
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/view');
            $this->load->view('admin/footer');    
	}
        
        public function in_jagung()
        {
            $this->model_security->getsecurity();
            
            $isi['judul']   ='Input Data';
            $isi['sub']     ='Jagung';
            $isi['simpan']  ='sim_jagung';
            $isi['tabel']   ='data_jagung';
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
            
            redirect('jagung');
        }
        
        public function edit()
        {
            $this->model_security->getsecurity();
            
            $key= $this->uri->segment(3);
            $isi['judul']   ='Edit';
            $isi['sub']     ='Data Tanaman Jagung';
            $isi['hal']     ='jagung';
            $isi['update']  ='up_jagung';
            $isi['data']    = $this->db->get('data_jagung');
            
            $this->load->model('model_jagung');
            $this->db->where('kd_data',$key);
            $query= $this->db->get('data_jagung');
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
        
        public function up_jagung() 
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
            $this->load->model('model_jagung');
            $this->model_jagung->getupdate('data_jagung',$data,$where);
            
            redirect('jagung');
            
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
            redirect('jagung');
        }
        
        public function iterasi() 
        {
            $this->model_security->getsecurity();
            $this->load->model('model_jagung');
            
            $kd             = $this->model_jagung->selectdata('data_jagung');
            $n=0;
            foreach ($kd->result() as $d)
            {
                $cen[$n]= $d->kd_data;
                $n++;
            }
            $rand= rand(0,$n-1);
            $x = $cen[$rand];
            
            $abc = $this->model_jagung->selectdata('data_jagung where kd_data = "'.$x.'"')->result_array();
            $isi= array(
                'judul'      =>'iterasi',
                'sub'      =>'Tanaman Jagung',
                'hal'      =>'jagung',
                'data'      =>$this->model_jagung->selectdata('data_jagung'),
                'kode'       =>$abc[0]['kd_data'],
                'h_tanam'    =>$abc[0]['tanam'],
                'h_produksi' =>$abc[0]['produksi'],
                'h_panen'    =>$abc[0]['panen'],
            );
			
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/iterasi_view');
            $this->load->view('admin/footer');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }
}
