<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	public function __construct($private, $allowedrole = -1)
	{
		self::$instance =& $this;
		
		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		$username = $this->session->userdata("username");
		$role = $this->session->userdata("role");
		
		if($private && empty($role) ||
			$allowedrole == 1 && $role != "student" ||
				$allowedrole == 2 && $role != "donor") redirect('home');
		
		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
	
	protected function load_view($view, $vars = array()) {
		#insert session errors here
		$username = $this->session->userdata("username");
		$role = $this->session->userdata("role");
		$user_personid = $this->session->userdata("personid");
		$user_donorid = $this->session->userdata("donorid");
		$user_studentid = $this->session->userdata("studentid");
		$sess = compact('username', 'role', 'user_personid', 'user_donorid', 'user_studentid');
		if(empty($role)) $this->load->view('include/header', $vars + $sess);
		else $this->load->view('include/header-login', $vars + $sess);
		$this->load->view($view, $vars + $sess);
		$this->load->view('include/footer', $vars + $sess);
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */