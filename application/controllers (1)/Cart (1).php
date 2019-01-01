<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    function __construct() {
		parent::__construct();
        $this->load->model('cart_model');
        $this->load->library('cart');
	}

    public function add_to_cart()
    {
    //   echo $product_id;
    //   exit();

        $product_id = $this->input->post('product_id', true);

    //     echo $product_id;
    //   exit();
        $qty = $this->input->post('qty', true);

        $product_info = $this->cart_model->select_product_info_by_product_id($product_id);

        $data = array(
            'id'      => $product_info->product_id,
            'qty'     => $qty,
            'price'   => $product_info->product_price,
            'name'    => $product_info->product_name,
            'options' => array('image' => $product_info->product_image)
            );
            // echo '<pre>';
            // print_r($data);
            // exit();
            
            $this->cart->insert($data);

            return redirect ('show-cart');

    }

    public function show_cart()
    {
        $data = array();
        $data['title'] = "Cart Details";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
        $data['left_sidebar'] = '';
        $data['recommended_items'] = NULL;
		// //$data['product_details'] = $this->welcome_model->select_product_details_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/cart_view', $data, true);
		$this->load->view('master', $data);
    }

    public function delete_from_cart($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty'   => 0
            );
    
        $this->cart->update($data);
        return redirect ('show-cart');
    }

    public function update_product_cart_qty()
    {
        $rowid = $this->input->post('rowid', TRUE);
        $qty = $this->input->post('qty', TRUE);
        
        $data = array(
            'rowid' => $rowid,
            'qty'   => $qty
            );
    
        $this->cart->update($data);
        return redirect ('show-cart');
    }




    

}



?>