<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// All Pages Routing
$route['home'] = 'HomeController';
$route['about-us'] = 'HomeController/aboutUs';
$route['car-service'] = 'HomeController/carService';
$route['visa-service'] = 'HomeController/visaService';
$route['contact-us'] = 'HomeController/contactUs';
$route['contact-us-post'] = 'HomeController/contactUsPost';
$route['our-partners'] = 'HomeController/ourPartners';

$route['travel-packages'] = 'HomeController/travelPackages';
$route['travel-packages/(:any)'] = 'HomeController/travelPackages/$1';
$route['ticket-service'] = 'HomeController/ticketService';
$route['guide-service'] = 'HomeController/guideService';
$route['blogger'] = 'HomeController/blogger';
$route['priest'] = 'HomeController/priest';

$route['home-stays'] = 'HomeController/home_stays';

$route['login'] = 'AdminController/login';
$route['login_post'] = 'AdminController/login_post';
$route['logout'] = 'AdminController/logout';
$route['admin'] = 'AdminController';
$route['admin/dashboard'] = 'AdminController';
$route['admin/video-slider/add'] = 'AdminController/videoSliderAdd';
$route['admin/video-slider/add_post'] = 'AdminController/videoSliderAdd_post';
$route['admin/video-slider/delete/(:any)'] = 'AdminController/videoSliderDelete/$1';
$route['admin/video-slider/edit/(:any)'] = 'AdminController/videoSliderEdit/$1';
$route['admin/video-slider/preview'] = 'AdminController/videoSliderPreview';

$route['send_email'] = 'HomeController/send_email';
$route['contactus_home_post'] = 'HomeController/contactusHomePost';

