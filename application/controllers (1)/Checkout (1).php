<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function index()
    {
        $data = array();
        $data['title'] = "Checkout";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
        $data['left_sidebar'] = '';
        $data['recommended_items'] = NULL;
		// //$data['product_details'] = $this->welcome_model->select_product_details_by_id($product_id);
		$data['featured_product'] = $this->load->view('pages/checkout', $data, true);
		$this->load->view('master', $data);
    }

    public function customer_registration()
    {
       $customer_id= $this->checkout_model->save_customer_info();

       $sdata = array();
       $sdata['customer_name'] = $this->input->post('customer_name');
       $sdata['customer_id'] = $customer_id;
       $this->session->set_userdata($sdata);

       redirect ('/billing');
    }

    public function check_customer_login()
    {
        $email_address = $this->input->post('email_address',TRUE );
		$password = $this->input->post('password',TRUE);
		$encrypt_password = md5($password);

		$customer_detail = $this->checkout_model->get_customer_detail($email_address);

		if($encrypt_password == $customer_detail->password)
		{
			$data = array();
            $data['title'] = "Billing";
            $data['header'] = $this->load->view('pages/header', '', true);
            $data['slider'] = NULL;
            $data['left_sidebar'] = '';
            $data['recommended_items'] = NULL;
            
            $customer_id = $this->session->userdata('customer_id');

            $this->load->view('admin/admin_master', $data);
            $data['customer_detail'] = $this->checkout_model->get_customer_detail($email_address);
            $data['featured_product'] = $this->load->view('pages/billing', $data, true);
            $this->load->view('master', $data);
		}
		else{
			$data['error_message'] = "Incorrect email or password";
			$this->load->view('admin/admin_login', $data);
		 }
    }

    public function logout()
    {

        $data = array();
        $data['title'] = "Checkout";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = $this->load->view('pages/slider', '', true);
		$data['left_sidebar'] = $this->load->view('pages/left_sidebar', '', true);
		$data['recommended_items'] = NULL;
        
        $this->session->unset_userdata('customer_id');
        //$data['customer_info'] = $this->checkout_model->select_customer_info_by_id($customer_id);
        
        //$data['featured_product'] = $this->load->view('pages/checkout', $data, true);
        $data['all_published_product'] = $this->welcome_model->all_published_product();
		$data['featured_product'] = $this->load->view('pages/featured_product', $data, true);
		$this->load->view('master', $data);
    }

    public function billing()
    {
        $data = array();
        $data['title'] = "Billing";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
        $data['left_sidebar'] = '';
        $data['recommended_items'] = NULL;
        
        $customer_id = $this->session->userdata('customer_id');
        $data['customer_info'] = $this->checkout_model->select_customer_info_by_id($customer_id);
        
		$data['featured_product'] = $this->load->view('pages/billing', $data, true);
		$this->load->view('master', $data);
    }

    public function update_billing()
    {   
        $this->checkout_model->update_billing_info();
        $shipping_id = $this->session->userdata('shipping_id');
        if($shipping_id != NULL)
        {
            redirect ('/payment');
        }
        else{
            redirect ('/shipping');
        }

    }

    public function shipping()
    {
        $data = array();
        $data['title'] = "Shipping";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
        $data['left_sidebar'] = '';
        $data['recommended_items'] = NULL;
        
		$data['featured_product'] = $this->load->view('pages/shipping', $data, true);
		$this->load->view('master', $data);
    }

    public function payment()
    {
        $data = array();
        $data['title'] = "Payment";
        $data['header'] = $this->load->view('pages/header', '', true);
		$data['slider'] = NULL;
        $data['left_sidebar'] = '';
        $data['recommended_items'] = NULL;
        
		$data['featured_product'] = $this->load->view('pages/payment', $data, true);
		$this->load->view('master', $data);
    }

    public function place_order()
    {
        $payment_type = $this->input->post('payment_type', TRUE);
       //echo $payment_type;

       if($payment_type == 'cash_on_delivery' )
       {

       }

       if($payment_type == 'ssl_commerz' )
       {
           $this->ssl_commerz_payment();
       }

       if($payment_type == 'paypal' )
       {
           
       }
    }

    public function ssl_commerz_payment()
    {
        define ("STORE_ID", "testbox");
        define ("STORE_PASSWORD", "qwerty");
        define ("SSLCZ_REDIRECT_URL", "https://sandbox.sslcommerz.com/gwprocess/v3/api.php");
        define ("SSLCZ_VALIDATION_API", "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");

        $post_data = array();
        $post_data['store_id'] = "testbox";
        $post_data['store_passwd'] = "qwerty";
        $post_data['total_amount'] = "103";
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = "SSLCZ_TEST_".uniqid();
        $post_data['success_url'] = "http://localhost/Eshopper/success";
        $post_data['fail_url'] = "http://localhost/new_sslcz_gw/fail.php";
        $post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";
        # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

        // # EMI INFO
        // $post_data['emi_option'] = "1";
        // $post_data['emi_max_inst_option'] = "9";
        // $post_data['emi_selected_inst'] = "9";

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = "Test Customer";
        $post_data['cus_email'] = "test@test.com";
        $post_data['cus_add1'] = "Dhaka";
        // $post_data['cus_add2'] = "Dhaka";
        // $post_data['cus_city'] = "Dhaka";
        // $post_data['cus_state'] = "Dhaka";
        // $post_data['cus_postcode'] = "1000";
        // $post_data['cus_country'] = "Bangladesh";
        // $post_data['cus_phone'] = "01711111111";
        // $post_data['cus_fax'] = "01711111111";

        // # SHIPMENT INFORMATION
        // $post_data['ship_name'] = "Store Test";
        // $post_data['ship_add1 '] = "Dhaka";
        // $post_data['ship_add2'] = "Dhaka";
        // $post_data['ship_city'] = "Dhaka";
        // $post_data['ship_state'] = "Dhaka";
        // $post_data['ship_postcode'] = "1000";
        // $post_data['ship_country'] = "Bangladesh";

        // # OPTIONAL PARAMETERS
        // $post_data['value_a'] = "ref001";
        // $post_data['value_b '] = "ref002";
        // $post_data['value_c'] = "ref003";
        // $post_data['value_d'] = "ref004";

        // # CART PARAMETERS
        // $post_data['cart'] = json_encode(array(
        //     array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
        //     array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
        //     array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
        //     array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")    
        // ));
        // $post_data['product_amount'] = "100";
        // $post_data['vat'] = "5";
        // $post_data['discount_amount'] = "5";
        // $post_data['convenience_fee'] = "3";


        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL );
        curl_setopt($handle, CURLOPT_TIMEOUT, '');
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, '');
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


        $content = curl_exec($handle );

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }

        # PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );

        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
                # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
                # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            # header("Location: ". $sslcz['GatewayPageURL']);
            exit;
        } else {
            echo "JSON Data parsing error!";
        }

    }

    public function success()
    {
        echo "In Success";
    }
    
}

?>