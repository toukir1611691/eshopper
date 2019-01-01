<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct() {
		parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
    }

    public function add_product_form()
    {   
        // $this->load->model('category_model');
        // $data['category_info'] = $this->category_model->get_all_active_category();

        // $this->load->model('product_model');
        $data['category_info'] = $this->product_model->get_all_active_category();

        // echo '<pre>';
        // print_r ($data);
        // exit();
        
		$data['title'] = 'Add-product';
		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
        $this->load->view('admin/product/add_product_form', $data);
        
    }
    
    private function upload_product_image()
    {

        $config['upload_path']          = './product_images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('product_image'))
        {
            $error = $this->upload->display_errors();
            
        }
        else
        {
            $data = $this->upload->data();
            $image_path = "product_images/$data[file_name]";
            return $image_path;
            
        }

    }


    public function save_product()
    {
        $product_image = $this->upload_product_image();


        $this->product_model->save_product($product_image);

        $this->session->set_userdata('message', 'Product saved succesfully!');

        $this->add_product_form();
    
    }

    public function show_all_product()
	{
		//$this->load->model('category_model');
		$data['all_product']= $this->product_model->get_all_product();
		
        $data['sidebar'] = $this->load->view('admin/sidebar', '', true);
        
		$this->load->view('admin/product/all_product', $data);

	}

    public function change_product_status($product_id, $status)
	{	
		//$this->load->model('category_model');
		$this->product_model->change_product_status($product_id, $status);
		redirect('all-product');
    }
    
    public function edit_product($product_id)
	{
        $data['product_data'] = $this->product_model->get_product_detail($product_id);

        // echo '<pre>';
        // print_r($data);
        // exit();

        
        $data['category_info'] = $this->product_model->get_all_active_category();

		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		$this->load->view('admin/product/edit_product_form', $data);

	}

	public function update_product()
	{
        // echo '<pre>';
        // print_r ($_FILES);

        if($_FILES['product_image']['name']== '' || $_FILES['product_image']['size']== 0 )
        {
            $product_image = $this->input->post('product_old_image', TRUE);
            $this->product_model->update_product($product_image);
        }
        else
        {
            $product_image = $this->upload_product_image();
            $this->product_model->update_product($product_image);
            unlink($this->product_model->update_product($product_image));
        }
        
		redirect('all-product');
    }
    
    public function delete_product($product_id)
	{
		$this->product_model->delete_product_by_id($product_id);
		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		//$this->load->view('admin/category/all_category', $data);

		redirect('all-product');

	}

}

?>