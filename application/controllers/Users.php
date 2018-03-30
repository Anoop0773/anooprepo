<?php
// class Users extends MY_controller
class Users extends CI_Controller
{
	public function index()
	{
		$this->load->view('Users/Articlelist');
	}
}


?>