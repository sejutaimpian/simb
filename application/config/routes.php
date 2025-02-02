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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';

$route['registration'] = 'auth/registration';
$route['login']      = 'auth/index';
$route['blocked']    = 'auth/blocked';

//route laporan
$route['laporan-service']                      = 'laporan/laporan_service';
$route['laporan-mekanik']                      = 'laporan/laporan_mekanik';

//Routes Mekanik
$route['listmekanik']                          = 'mekanik/listmekanik';

//Route Booking
$route['booking']                              = 'booking/booking';
$route['detail-booking']                       = 'booking/detail_booking';
$route['booking/save']                         = 'booking/save';
$route['upload-pembayaran']                    = 'booking/upload_pembayaran';
$route['upload']                               = 'booking/upload';
$route['lihatbuktipembayaran']                 = 'booking/lihatbuktipembayaran';
$route['lihat-invoice']                        = 'booking/lihatinvoice';
$route['lihat-kuitansi']                       = 'booking/lihatkuitansi';

// Rountes Dashboard Booking
$route['book']                                = 'booking/listbooking';
$route['invoice']                             = 'invoice';
$route['invoice/(:num)']                      = 'invoice/invoice/$1';
$route['kuitansi']                            = 'kuitansi';
$route['service/(:num)/add']                  = 'service/add/$1';
$route['service/(:num)/reject']               = 'service/reject/$1';
$route['service/(:num)/save']                 = 'service/save/$1';

//Routes Admin
$route['listadmin']                            = 'admin/listadmin';

//Routes Customers
$route['listcustomer']                         = 'customer/listcustomer';

//Routes Service
$route['listservice']                          = 'service/listservice';

//Routes Profile
$route['profile']                              = 'profile/profile';
$route['editprofile']                          = 'profile/edit';
$route['ubahpassword']                         = 'profile/changepassword';

//Routes Menu Pengaturan
$route['pengaturan']                           = 'pengaturan';
$route['tambahreference']                      = 'pengaturan/createreference';
$route['diagram']                              = 'diagram/index';
$route['maps']                                 = 'maps/index';
$route['exportexcel']                          = 'exportexcel/export';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
