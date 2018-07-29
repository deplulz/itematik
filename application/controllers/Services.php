<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function index()
	{
		$data['title']='Services';
		$data['page']=$this->load->view('services_v',$data,true);
		$this->load->view('template',$data);
	}
}
