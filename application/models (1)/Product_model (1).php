<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Product_model extends CI_MODEL {

    public function get_all_active_category()
    {
        $result = $this->db->select('*')
                        ->from('tbl_category')
                        ->where('category_status', 1)
                        ->get()
                        ->result();
        
        return $result;
    }

    
    public function save_product($product_image)
    {

        $product_data = $this->input->post(NULL, TRUE);

        $top_product = $this->input->post('top_product', TRUE);
       
        if($top_product == 'on')
        {
            $product_data['top_product'] = 1;
        }
        else
        {
            $product_data['top_product'] = 0;
        }

        $product_data['product_image'] = $product_image;

        //$product_data['product_status'] = 1;

        $this->db->insert('tbl_product', $product_data);
    }

    public function get_all_product(){

        $data = $this->db->select('*')->from('tbl_product')->get()->result();

        // echo'<pre>';
        // print_r($data);
        // exit();
              
        return $data;

    }

    public function change_product_status($product_id, $status)
    {
        $data['product_status'] = $status;
        $this->db->WHERE('product_id', $product_id);
        $this->db->UPDATE('tbl_product', $data);
    }

    public function get_product_detail($product_id)
    {
        $data = $this->db->SELECT('*')
                        ->from('tbl_product')
                        ->WHERE ('product_id', $product_id)
                        ->get()
                        ->row();

        // echo '<pre>';
        // print_r($data);
        // exit();

        return $data;
    }

    // public function update_product()
    // {   
    //     $data = $this->input->post(NULL, TRUE);
    //     $product_id = $data['product_id'];
    //     unset($data['product_id']);
	// 	// echo '<pre>';
	// 	// print_r ($data);
    //     // exit();
       
        
        
    //     $this->db->where('product_id', $product_id)->update('tbl_product', $data);

    // }

    public function update_product($product_image)
    {
        $product_id = $this->input->post('product_id', TRUE);
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['product_short_desc'] = $this->input->post('product_short_desc', TRUE);
        $data['product_long_desc'] = $this->input->post('product_long_desc', TRUE);
        $data['product_category'] = $this->input->post('product_category', TRUE);
        $data['product_price'] = $this->input->post('product_price', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_image'] = $product_image;
        // $top_product = $this->input->post('top_product', TRUE);
       
        // if($top_product == 'on')
        // {
        //     $data['top_product'] = 1;
        // }
        // else
        // {
        //     $data['top_product'] = 0;
        // }

        $top_product = $this->input->post('top_product', true);
        if ($top_product == 'on') {
            $data['top_product'] = 1;
        } else {
            $data['top_product'] = 0;
        }

        $result= $this->db->where('product_id', $product_id)
                    ->update('tbl_product', $data);

        // echo'<pre>';
        // print_r($result);
        // exit();

        
        
    }

    public function delete_product_by_id($product_id)
    {
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');

    }

    public function select_top_product()
    {
        $result = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('top_product', 1)
                        ->get()
                        ->result();
        
        return $result;
    }


}

?>