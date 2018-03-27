<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
	public function index()
	{
            
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
                'random'    => $this->model_jagung->getrandom(),
            );
			
            $this->load->view('admin/header',$isi);
            $this->load->view('admin/tes');
            $this->load->view('admin/footer');
	}
}
