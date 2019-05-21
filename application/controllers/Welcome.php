<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index()
	{
		header("Location: http://localhost/pusdikhub/id/home", true, 301);
		exit();
	}
}
