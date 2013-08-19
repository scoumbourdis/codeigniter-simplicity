<h1>This is example 1</h1>
<p>Here is the default template with a webpage</p>

	<div>
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

	public function example_1()
	{
		$this->load->view('ci_simplicity/example_1');
	}
	...
}
		</pre>
	</div>