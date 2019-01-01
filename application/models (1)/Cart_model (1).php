<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Cart_model extends CI_Model {

    public function select_product_info_by_product_id($product_id)

    {
        // echo $product_id;
        // exit();
        $product_info = $this->db->select('*')
                    ->from('tbl_product')
                    ->where('product_id',$product_id)
                    ->get()
                    ->row();

                    // echo '<pre>';
                    // print_r($product_info);
                    // exit();

        return $product_info;
    }




}