<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_padi extends CI_Model{
	
	public function getdata($key)
	{
            $this->db->where('kd_data',$key);
            $hasil= $this->db->get('data_padi');
            return $hasil;
	}
        
        public function getupdate($tabel,$data,$where)
        {
            return $this->db->update($tabel,$data,$where);
                      
        }
        
        public function getinsert($data) 
        {
            $this->db->insert('data_padi',$data);
        }
        
        public function getdelete($key) {
            
            $this->db->where('kd_data',$key);
            $hasil = $this->db->delete('data_padi');
        }
        
}
