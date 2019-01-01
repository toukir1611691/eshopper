<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('category_model');
	}
	
	public function add_category_form()
	{
		$data = array();
		$data['title'] = 'Add-category';
		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		$this->load->view('admin/category/add_category_form', $data);
	}

	public function save_category()
	{
		//$this->load->model('category_model');
		$this->category_model->save_category();
		$this->show_all_category();

		
	}

	public function show_all_category()
	{
		//$this->load->model('category_model');
		$data['all_category']= $this->category_model->get_all_category();
		
		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		$this->load->view('admin/category/all_category', $data);

	}

	public function change_category_status($category_id, $status)
	{	
		//$this->load->model('category_model');
		$this->category_model->change_category_status($category_id, $status);
		redirect('all-category');
	}

	public function edit_category($category_id)
	{
		$data['category_data'] = $this->category_model->get_category_detail($category_id);

		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		$this->load->view('admin/category/edit_category_form', $data);

	}

	public function update_category()
	{

		$this->category_model->update_category();
		
		redirect('all-category');
	}

	
	public function delete_category($category_id)
	{
		$this->category_model->delete_category_by_id($category_id);
		$data['sidebar'] = $this->load->view('admin/sidebar', '', true);
		//$this->load->view('admin/category/all_category', $data);

		redirect('all-category');

	}

}


