<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/index';
$route['(:any)'] = 'pages/view/$1';
$route['events/dare2develop'] = 'pages/dare2develop';
$route['events/(:any)'] = 'pages/view_events/$1';
$route['admin/dashboard/(.+)'] = 'admin/dynamic_admin/$1';
$route['user/dashboard/(.+)'] = 'user/dynamic_user/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
