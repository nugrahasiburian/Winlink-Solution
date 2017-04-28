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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = "Default_controller/index";

$route['home'] = "frontend/Home_controller_Front/index";
$route['profil'] = "frontend/Profil_controller_Front/index";
$route['pengajaran'] = "frontend/Pengajaran_all_controller_Front/index";
$route['pengajaran/(:num)/(:num)'] = "frontend/Pengajaran_all_controller_Front/index";
$route['pengajaran-detail/(:num)'] = "frontend/Pengajaran_detail_controller_Front/index";

$route['wp_admin'] = "backend/Home_controller_Back/index";
$route['wp_admin/profil'] = "backend/Profil_controller_Back/index";
$route['wp_admin/profil/(:any)'] = "backend/Profil_controller_Back/index";
$route['wp_admin/profil/(:any)/save'] = "backend/Profil_controller_Back/save";

$route['wp_admin/pengajaran'] = "backend/Pengajaran_controller_Back/index";
$route['wp_admin/pengajaran/(:num)'] = "backend/Pengajaran_controller_Back/show_list_of_pengajaran";
$route['wp_admin/pengajaran/create_new/(:num)'] = "backend/Pengajaran_controller_Back/show_form_edit_pengajaran";
$route['wp_admin/pengajaran/edit/(:num)'] = "backend/Pengajaran_controller_Back/show_form_edit_pengajaran";
$route['wp_admin/pengajaran/delete/(:num)'] = "backend/Pengajaran_controller_Back/delete_sql_controller";
$route['wp_admin/pengajaran/(:any)/(:any)/post_create_new'] = "backend/Pengajaran_controller_Back/insert_into_sql_controller";
$route['wp_admin/pengajaran/(:any)/(:any)/post_edit'] = "backend/Pengajaran_controller_Back/update_sql_controller";
;