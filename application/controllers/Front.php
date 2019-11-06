<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Rest_model');
		
	}
	public function index()
	{
		$this->load->view('front/index');
	}
	public function scaling()
	{
		$this->load->view('front/scaling');
	}
}