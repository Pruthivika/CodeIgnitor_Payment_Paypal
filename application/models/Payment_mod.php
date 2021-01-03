<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_mod extends CI_Model{
    
    
    public function insert($data = array()) 
    {
        $insert = $this->db->insert('payment', $data);
        if($insert){
            return $insert;
            
        }else{
            return false;
        }

    }



   
}