<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Welcome_model extends CI_MODEL {

    public function all_published_product()
    {
        $data = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_status', 1)
                        ->get()
                        ->result();

        // echo '<pre>';
        // print_r ($data);
        // exit();

        return $data;
    }

    public function select_product_details_by_id($product_id)
    {
        $product_details = $this->db->select('*')
                        ->from('tbl_product')
                        ->where('product_id', $product_id)
                        ->get()
                        ->row();
        return $product_details;
    }


}