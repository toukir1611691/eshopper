<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Checkout_model extends CI_Model {

    public function save_customer_info()
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name');
        $data['email_address'] = $this->input->post('email_address');
        $data['password'] = md5($this->input->post('password'));

        $this->db->insert('tbl_customer', $data);

        $customer_id = $this->db->insert_id();
        return $customer_id;
    }

    public function get_customer_detail($email_address)
    {
        $customer_detail = $this->db->select('*')
                ->from ('tbl_customer')
                ->where ('email_address', $email_address)
                ->get()
                ->row();

        // echo '<pre>';
        // print_r($customer_detail);
        // exit();

        return $customer_detail;
    }
    
    public function select_customer_info_by_id($customer_id)
    {
        $customer_info = $this->db->select('*')
                    ->from('tbl_customer')
                    ->where('customer_id',$customer_id)
                    ->get()
                    ->row();
        
        // echo'<pre>';
        // print_r ($customer_info);
        // exit();

        return $customer_info;
    }

    public function update_billing_info()
    {
        $data = $this->input->post(NULL, TRUE);

        $shipping_status = $this->input->post('shipping_status', TRUE);
        if($shipping_status == 'on')
        {
            $customer_id = $data['customer_id'];
            unset($data['customer_id']);
            
            $this->db->where('customer_id', $customer_id);
            $this->db->update('tbl_customer', $data);
            
            
            $data['customer_id'] = $customer_id;
            $this->db->insert('tbl_shipping', $data);

            $shipping_id = $this->db->insert_id();

            $sdata = array();
            $sdata['shipping_id'] = $shipping_id;
            $this->session->set_userdata($sdata);
        }
        else 
        {
            $customer_id = $data['customer_id'];
            unset($data['customer_id']);
            
            $this->db->where('customer_id', $customer_id);
            $this->db->update('tbl_customer', $data);


        }
    }


}


?>