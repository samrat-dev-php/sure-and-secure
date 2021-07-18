<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applynow_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function add_data($data) {
        $this->db->insert('apply_form', $data);    
        $insert_id = $this->db->insert_id();
        return  $insert_id;    
    }
    public function update_data($data, $insert_id) {
        $this->db->where('id', $insert_id);    
        $this->db->update('apply_form', $data);    
    }
    public function isExistApplyForm($email, $phone) {
        $this->db->select('*');
        $this->db->from('apply_form');        
        $this->db->where('email',$email); 
        $this->db->or_where('phone',$phone); 
        $query = $this->db->get();
        $count = $query->num_rows();
        $result = 'FALSE';
        if($count > 0) {
            $result = 'TRUE';
        }
        return $result;  
    }
    public function get_data($data) {
        $this->db->select('*');
        $this->db->from('apply_form');        
        $this->db->where($data); 
        $query = $this->db->get();
        $result = [
            'records' => $query->result(),
            'count' => $query->num_rows()
        ];
        return $result;  
    }
    public function get_login($data) {
        $this->db->select('*');
        $this->db->from('member_omt');        
        $this->db->where($data); 
        $query = $this->db->get();
        return $query;
    }
    public function get_login_profile($data) {
        $this->db->select('*');
        $this->db->from('member_omt');        
        $this->db->where($data); 
        $query = $this->db->get();
        return $query;
    }
}

?>