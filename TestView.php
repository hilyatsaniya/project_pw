<?php 

/**
* 
*/
class TestView extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

        // Load librari helper
        $this->load->helper(array('form', 'url'));

        // Load librari form validation
        $this->load->library('form_validation');

        // Load librari session
        $this->load->library('session');

	}

	public function show_katalog()
	{
		$this->load->view('Katalog');
	}
}
 ?>