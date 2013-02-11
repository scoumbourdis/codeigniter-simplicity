<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->helper('url');
	}	
	
	public function index()
	{
		$this->output->set_template('default');
		$this->load->view('simplicity_welcome');		
	}
}