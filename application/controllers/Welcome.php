<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
			 $this->load->view('portofolio/headerporto');
			 $this->load->view('portofolio/contents');
			 $this->load->view('portofolio/footerporto');
	}

	public function konsultasi(){

		$this->load->view('portofolio/headerporto');
		$this->load->view('portofolio/view_konsultasi');
		$this->load->view('portofolio/footerporto');

	}


}
