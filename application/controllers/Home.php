<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']='Home';
		$data['page']=$this->load->view('home_v',$data,true);
		$this->load->view('template',$data);
	}
}
