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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'C_Home';
$route['helper'] = 'C_helper';
$route['helper/url'] = 'C_helper/url';
$route['helper/url/base_url'] = 'C_helper/base_url';
$route['helper/url/site_url'] = 'C_helper/site_url';
$route['helper/post'] = 'C_helper/post';
$route['news'] = 'news/C_news';
$route['news/(:any)'] = 'news/C_news/viewNews/$1';
$route['news/data/create'] = 'news/C_news/createNews';
$route['news/data/(:any)/edit'] = 'news/C_news/editNews';
$route['news/data/(:any)/delete'] = 'news/C_news/delete';
$route['news/data/store'] = 'news/C_news/store';
$route['news/data/storeEdit'] = 'news/C_news/storeEdit';
$route['barang'] = 'barang/C_barang';
$route['barang/pesan'] = 'barang/C_barang/pesan';
$route['barang/checkout'] = 'barang/C_barang/checkout';
$route['barang/store'] = 'barang/C_barang/store';
$route['barang/editStore'] = 'barang/C_barang/editStore';
$route['barang/(:any)/delete'] = 'barang/C_barang/delete';
$route['pesan/(:any)/edit'] = 'barang/C_barang/edit';
$route['barang1'] = 'C_barang';
$route['kalender'] = 'C_calendar';
$route['kalender/(:any)/(:any)'] = 'C_calendar';
$route['kalender/infohari/(:any)/(:any)/(:any)'] = 'C_calendar/infohari/$1/$2/$3';
$route['kalender/pdf/(:any)/(:any)/(:any)'] = 'C_calendar/pdf/$1/$2/$3';
$route['upload'] = 'C_upload';




