<h1>This is example 2</h1>
<p>Here we have rendered a theme with name "simple" without any external files like css,images,js... e.t.c. </p>

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

	public function example_2()
	{
		$this->output->set_template('simple');
		$this->load->view('ci_simplicity/example_2');
	}
	...
}
</pre>