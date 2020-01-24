<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function index()
	{
		$data['page']="About Us";
		$this->load->view('aboutus',$data);
	}
}
