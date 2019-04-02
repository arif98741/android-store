<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'publicview';


/*
!---------------------------------------------------
! 	Controller For User
!---------------------------------------------------
*/
$route['login'] 		  = 'main/index';



$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;


