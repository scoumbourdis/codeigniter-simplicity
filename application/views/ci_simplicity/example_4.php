<h1>Example 4</h1>

<p>This example doesn't have any template.</p>

<p>This page is rended with the normal view, <a href="<?php echo base_url();?>">go back to home page</a></p>

<h2>Code Behind this page</h2>
<pre style="background: #eee; padding: 10px; border-radius: 5px;">
&lt?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	...

	public function example_4()
	{
		$this->output->unset_template();
		$this->load->view('ci_simplicity/example_4');
	}
	...
}
</pre>