<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['admin-home'] = 'admin/check_admin_login';
$route['dashboard'] = 'admin/check_admin_login';
$route['admin'] = 'admin';

$route['add-product'] = 'product/add_product_form';
$route['all-product']= 'product/show_all_product';
$route['change-product-status/(.+)/(.+)'] = 'product/change_product_status/$1/$2';
$route['edit-product/(.+)'] = 'product/edit_product/$1';
$route['delete-product/(.+)'] = 'product/delete_product/$1';
$route['update-product'] = 'product/update_product';
$route['product-details/(.+)'] = 'welcome/product_details/$1';


$route['add-to-cart'] = 'Cart/add_to_cart';
$route['show-cart'] = 'cart/show_cart';
$route['delete-from-cart/(.+)'] = 'cart/delete_from_cart/$1';
$route['update-product-cart-qty'] = 'cart/update_product_cart_qty';


$route['all-category']= 'category/show_all_category';
$route['add-category'] = 'category/add_category_form';
$route['change-category-status/(.+)/(.+)'] = 'category/change_category_status/$home-page1/$2';
$route['edit-category/(.+)'] = 'category/edit_category/$1';
$route['delete-category/(.+)'] = 'category/delete_category/$1';

$route['checkout'] = 'checkout/index';
$route['logout'] = 'checkout/logout';
$route['customer-registration'] = 'checkout/customer_registration';
$route['customer-to-billing'] = 'checkout/check_customer_login';

$route['billing'] = 'checkout/billing';
$route['update-billing'] = 'checkout/update_billing';
$route['shipping'] = 'checkout/shipping';
$route['save-shipping'] = 'checkout/save_shipping';
$route['payment'] = 'checkout/payment';
$route['place-order'] = 'checkout/place_order';
$route['success'] = 'checkout/success';
$route['fail'] = 'checkout/fail';
$route['cancel'] = 'checkout/cancel';

$route['account'] = 'welcome/account';
$route['home-page'] = 'welcome/index';
$route['contact'] = 'welcome/contact';

$route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
