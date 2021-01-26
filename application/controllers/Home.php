<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Simple Contact App',
 					'isi' =>'v_home'
 		);
 		$this->load->view('layout/wrapper',$data, FALSE); 
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */