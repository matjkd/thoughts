<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

if ($_SERVER['HTTP_HOST'] == "www.simplenamegenerator.co.uk")
{
	$route['default_controller'] = "babynames";

}
else

if ($_SERVER['HTTP_HOST'] == "simplenamegenerator.co.uk")
{
	$route['default_controller'] = "babynames";
}
else
{
	$route['default_controller'] = "welcome";
}

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
