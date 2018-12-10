<?php
class M_Welcome extends CI_Model{
    public function register($data){
        return $this->db->insert('users',$data);
    }
}
