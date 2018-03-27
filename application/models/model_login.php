<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {
	
    public function getlogin($a,$b)
    {
        $pwd= md5($b);
        $this->db->where('username',$a);
        $this->db->where('password',$pwd);
        $query= $this->db->get('admin');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $row)
            {
                $sess = array('username'    =>$row->username,
                              'nama'        =>$row->nama,
                              'foto'        =>$row->foto);
                $this->session->set_userdata($sess);
                redirect('admin');                
            }
        }
        else
        {
            $this->session->set_flashdata('info','Maaf username atau password salah');
            redirect('login');
        }
    }
}
