<?php
switch ($match['name']):

	case 'landing':#home->landing__body
		require 'Controller/Landing__Controller.php';

		$Landing__Controller = new  Landing__Controller();
		$Landing_index=$Landing__Controller->index();

		require  'view/landing__body.php';		
	break;

default:
        echo "404";
        require  'view/landing__body.php';
endswitch;
?>