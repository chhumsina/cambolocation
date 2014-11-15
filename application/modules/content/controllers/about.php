<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class About extends Site_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(  )
	{
		
		$data['title']	= 'About Us';
		$data['page']	= 'content/login/view';
		$data['action']	= 'About page';
		$this->load->view('layout/layout',$data);
	}
}