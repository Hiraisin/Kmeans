<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jagung extends CI_Model{
	
	public function getdata($key)
	{
            $this->db->where('kd_data',$key);
            $hasil= $this->db->get('data_jagung');
            return $hasil;
	}
        
        public function selectdata($where = ''){
            return $this->db->query("select * from $where;");
	}
        
        public function getupdate($tabel,$data,$where)
        {
            return $this->db->update($tabel,$data,$where);
                      
        }
        
        public function getinsert($data) 
        {
            $this->db->insert('data_jagung',$data);
        }
        
        public function getdelete($key) {
            
            $this->db->where('kd_data',$key);
            $hasil = $this->db->delete('data_jagung');
        }
        
        public function getrandom() 
        {                       
            $this->db->select('*');
            $this->db->order_by('RAND()');
            $this->db->limit(3);
            return $this->db->get('data_jagung'); //<table> is the db table name            
        }
        
}
