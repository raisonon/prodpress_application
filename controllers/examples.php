<?

class examples extends pp_app_controller {

	function __construct() {

		parent::__construct();

	}



	function default() {

			// set vars
			$data['domain'] = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[SERVER_NAME]";
			$data['app_root'] = PP_SLUG;
			$data['mvc_root'] = content_url('pp_app');

			// load wp admin bar
			do_action( 'template_redirect' );

			// output
			get_header();

			$this->load_view('wrappers/wrapper_start');
			$this->load_view('examples/welcome', $data);
			$this->load_view('wrappers/wrapper_end');
			get_footer();

		}


	function test() {

		echo 'Test plain text function';

	}


	function vue() {

		// set variables
		$data['variable_one'] = 1;
		$data['variable_two'] = 2;
		$data['welcome_message'] = 'Welcome to the MVC vue.js application';
		$data['welcome_description'] = 'You can use a variable direct from the data object too. These are dynamic.';

		//load the view
		get_header();
		$this->load_view('wrappers/wrapper_start');
		$this->load_view('base/vue', $data);
		$this->load_view('examples/vue', $data);
		$this->load_view('wrappers/wrapper_end');
		get_footer();

	}


	function custom() {
		// load the view
		get_header();
		$this->load_view('wrappers/wrapper_start');
		$this->load_view('examples/custom');
		$this->load_view('wrappers/wrapper_end');
		get_footer();
	}

}