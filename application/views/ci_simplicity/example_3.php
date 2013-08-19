<div class="span7">
	<h1>This is example 3</h1>
	<p>This is the default template but we also rendered a right sidebar with the section function.</p>
	
		<h2>Code Behind this page</h2>
		<pre>
&lt?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	...

	public function example_3()
	{
		$this->load->section('sidebar', 'ci_simplicity/sidebar');
		$this->load->view('ci_simplicity/example_3');
	}
	...
}
		</pre>	
</div>