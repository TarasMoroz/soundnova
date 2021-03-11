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

$route['upload/save_sermon'] = "upload/save_sermon";

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
$route['subscribe'] = "pages/subscribe/";
$route['sitemap'] = "pages/sitemap/";
$route['google'] = "pages/google/";

$route['(/)?'] = $route['default_controller'];

// $route['(ua|ru)/favorite'] = "pages/favorite";
// $route['(ua|ru)/compare'] = "pages/compare";

$route['catalog'] = "catalog/index";
$route['catalog/type/(:any)'] = "catalog/index/$1";
$route['catalog/(:any)'] = "catalog/show_category/$1";
$route['catalog/(:any)/type/(:any)'] = "catalog/show_category/$1/$2";
$route['product/(:any)'] = "product/show_product/$1";

// $route['(ua|ru)/cart'] = "cart/index";
// $route['(ua|ru)/checkout'] = "cart/checkout";
// $route['(ua|ru)/order/(:num)'] = "cart/order/$2";
// $route['(ua|ru)/blog'] = "blog/index";
// $route['(ua|ru)/blog/(:any)'] = "blog/post/$2";
// $route['(ua|ru)/sales'] = "sales/index";
// $route['(ua|ru)/sale/(:num)'] = "sales/sale/$2";

$route['(:any)'] = "pages/show_page/$1";

// $route['(ua|ru)/(:any)/(:any)'] = "pages/show_page/$2/$3";
// $route['(ua|ru)/events'] = "events/index/$1";
// $route['(ua|ru)/events/(:any)'] = "events/show_event/$2";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
