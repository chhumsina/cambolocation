<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends Site_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(  )
	{
	
		$data['title']	= 'Home page';
		$data['page']	= 'content/home/view';
		$data['action']	= 'Home page';
		$this->load->view('layout/layout',$data);
	}
        
        public function post() {
	    $this->load->view('content/home/post');
        }
}