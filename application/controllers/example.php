<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->helper('url');
		
		$this->output->set_template('default');
	}	
	
	public function index()
	{
		
		$this->load->view('ci_simplicity/welcome');		
	}
	
	public function about()
	{
		$this->load->view('ci_simplicity/about');		
	}	
}
