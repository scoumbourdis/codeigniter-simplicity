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

	public function example_1()
	{
		$this->load->view('ci_simplicity/example_1');
	}

	public function example_2()
	{
		$this->output->set_template('simple');
		$this->load->view('ci_simplicity/example_2');
	}

	public function example_3()
	{
		$this->output->unset_template();
		$this->load->view('ci_simplicity/example_3');
	}
}
