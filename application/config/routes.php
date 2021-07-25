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

$route['default_controller'] = 'pages';

$route['admin'] = "admin/index";

$route['get_orders'] = "pages/get_orders";
$route['send/(:any)'] = "pages/send/$1";
$route['np/(:any)'] = "pages/np/$1";
$route['promocode'] = "pages/promocode/";
$route['order'] = "pages/order/";
$route['calc'] = "pages/calc/";
$route['photoswipe'] = "pages/photoswipe/";
$route['callback'] = "pages/callback/";
$route['addcomment'] = "pages/addcomment/";

$route['sitemap'] = "pages/sitemap/";

$route['save'] = "download/save/";

$route['(/)?'] = $route['default_controller'];

// pages
$route['contact'] = "pages/show_page_contact";
$route['sound-design-studio'] = "pages/show_page_design_studio";
$route['about'] = "pages/show_page_aboutus";
$route['reviews'] = "pages/show_page_reviews";
$route['error'] = "pages/show_page_404";
$route['support'] = "pages/show_page_support";
$route['support/category'] = "pages/show_page_support_category";

// categories, catalog
$route['catalog'] = "catalog/index";
$route['catalog/type/(:any)'] = "catalog/index/$1";
$route['catalog/(:any)'] = "catalog/show_category/$1";
$route['catalog/(:any)/type/(:any)'] = "catalog/show_category/$1/$2";

// product page
$route['product/(:any)'] = "product/show_product/$1";

// cart, checkout
$route['cart'] = "cart/index";
$route['cart/ajax_add_item'] = "cart/ajax_add_item";
$route['cart/ajax_remove_item'] = "cart/ajax_remove_item";

$route['checkout'] = "cart/checkout";
$route['success'] = "cart/purchase_success";

// subscription
$route['subscription'] = "subscription/index";
$route['join-now'] = "subscription/show_page_stageone_join";
$route['try-free'] = "subscription/show_page_stageone_free";
$route['stage-one'] = "subscription/show_page_stageone";
$route['stage-two'] = "subscription/show_page_stagetwo";
$route['stage-three'] = "subscription/show_page_stagethree";

// user
$route['login'] = "user/login";
$route['signup'] = "user/signup";
$route['account'] = "user/account";

// $route['(:any)'] = "pages/show_page/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
