<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Category_model extends CI_MODEL {

    public function save_category(){

        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_short_desc'] = $this->input->post('category_short_desc', TRUE);
        $data['category_long_desc'] = $this->input->post('category_long_desc', TRUE);
        $data['category_status'] = $this->input->post('category_status', TRUE);
        
        $this->db->insert('tbl_category', $data);

        // echo '<pre>';
        // print_r($data);
    }

    public function get_all_category(){

        $data = $this->db->select('*')->from('tbl_category')->get()->result();
              
        return $data;

    }

    public function change_category_status($category_id, $status)
    {
        $data['category_status'] = $status;
        $this->db->WHERE('category_id', $category_id);
        $this->db->UPDATE('tbl_category', $data);
    }

    public function get_category_detail($category_id)
    {
        $data = $this->db->SELECT('*')
                        ->from('tbl_category')
                        ->WHERE ('category_id', $category_id)
                        ->get()
                        ->row();

        // echo '<pre>';
        // print_r($data);
        // exit();

        return $data;
    }

    public function update_category()
    {   
        $data = $this->input->post(NULL, TRUE);
        $category_id = $data['category_id'];
        unset($data['category_id']);
		// echo '<pre>';
		// print_r ($data);
        // exit();
       
        
        
        $this->db->where('category_id', $category_id)->update('tbl_category', $data);

    }

    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');

    }

    
}

