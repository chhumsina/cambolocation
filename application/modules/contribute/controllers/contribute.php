<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contribute extends Site_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('mod_contribute'));
    }

    public function index() {
        $data['pages'] = $this->mod_contribute->findAll();
        $data['title']  = 'Contribute';
        $data['page']   = 'contribute/view';
        $data['action'] = 'Contribute';
        $this->load->view('layout/layout', $data);
    }
}
