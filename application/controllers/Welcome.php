<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function profile()
	{
		$this->load->view('profile');
	}
}
