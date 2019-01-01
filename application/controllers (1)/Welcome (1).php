<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
        $this->load->model('welcome_model');
    }
	
	public function index()
	{	
		$data = array();
		$data['title'] = "Home";
		$data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = $this->load->view('pages/slider', '', true);
		$data['left_sidebar'] = $this->load->view('pages/left_sidebar', '', true);
		$data['recommended_items'] = NULL;
		$data['all_published_product'] = $this->welcome_model->all_published_product();
		$data['featured_product'] = $this->load->view('pages/featured_product', $data, true);
		$this->load->view('master', $data);
	}

	public function account()
	{	
		$data = array();
		$data['title'] = "Account";
		$data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
		$data['recommended_items'] = $this->load->view('pages/recommended_items', '', true);
		$data['left_sidebar'] = $this->load->view('pages/left_sidebar', '', true);
		$data['featured_product'] = $this->load->view('pages/account', '', true);
		$this->load->view('master', $data);
	}

	public function product_details($product_id)
	{
		$data = array();
		$data['title'] = "Product Details";
		$data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
		$data['left_sidebar'] = $this->load->view('pages/left_sidebar', '', true);
		$data['recommended_items'] = $this->load->view('pages/recommended_items', '', true);
		$data['product_details'] = $this->welcome_model->select_product_details_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/product_details', $data, true);
		$this->load->view('master', $data);
	}

	public function contact()
	{
		$data = array();
		$data['title'] = "Contact";
		$data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
		$data['recommended_items'] = NULL;
		$data['left_sidebar'] = NULL;
		$data['featured_product'] = $this->load->view('pages/contact', '', true);
		$this->load->view('master', $data);
	}
}
