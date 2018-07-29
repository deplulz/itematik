<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['title']='Contact';
		$data['page']=$this->load->view('contact_v',$data,true);
		$this->load->view('template',$data);
	}
}
