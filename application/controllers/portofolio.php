<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class portofolio extends CI_Controller {
	public function index()
	{
		$data['title']='Portofolio';
		$data['page']=$this->load->view('portofolio_v',$data,true);
		$this->load->view('template',$data);
	}
}
