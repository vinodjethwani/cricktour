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
$route['Login'] = 'login';
$route['login/auth']='login/auth';
$route['Register'] = 'register';
$route['register/doregister']='register/doregister';

$route['Forgot-Password'] = 'welcome/forgot';
$route['Recover-Password'] = 'welcome/recoverpass';
$route['logout']= 'login/logout';

//Admin Dash Routes
$route['admin/dashboard']='admin/DashboardController';

$route['admin/add_tournament']='admin/DashboardController/add_tournament';

$route['admin/my_tours']='admin/DashboardController/my_tours';

$route['admin/my_match']='admin/DashboardController/my_match';

$route['admin/layouts/Top-nav']='admin/DashboardController/layouts';

$route['admin/layouts/Top-nav-sidebar']='admin/DashboardController/layoutstopside';

$route['admin/Charts/ChartJs']='admin/DashboardController/ChartJs';

$route['admin/Charts/Flot']='admin/DashboardController/Flot';

$route['admin/Charts/Inline']='admin/DashboardController/Inline';

$route['admin/Tables/DataTable']='admin/DashboardController/DataTable';

$route['admin/Calendarr']='admin/DashboardController/Calendarr';

$route['admin/Gallery']='admin/DashboardController/gallery';

$route['admin/Mailbox/Inbox']='admin/DashboardController/MailInbox';

$route['admin/Mailbox/Compose']='admin/DashboardController/MailCompose';

$route['admin/Mailbox/MailRead']='admin/DashboardController/MailRead';

$route['admin/Pages/Profile']='admin/DashboardController/Profile';

$route['admin/Pages/Projects']='admin/DashboardController/Projects';

$route['admin/Pages/Contacts']='admin/DashboardController/Contact';





















$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
