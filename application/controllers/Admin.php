<?php

class Admin extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata('id'))
			redirect('Admin/welcome');
		$this->form_validation->set_rules('username','User Name','required|alpha');	
		$this->form_validation->set_rules('password','User Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run() == TRUE)	
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = md5($password);
			$this->load->model('Login_model');
			$id = $this->Login_model->isValidate($username,$password);
			if($id)
			{
				$this->session->set_userdata('id',$id);
				return redirect('Admin/welcome');

			}
			else
			{
				echo "Details not matched";
			}

		}
		else
		{
			$this->load->view('Admin/login');
		}
	}

	public function welcome()
	{
		if(!$this->session->userdata('id'))
			redirect('Admin/index');
		$this->load->model('Login_model');
		$user = $this->Login_model->userDetails();
		$this->load->view('Admin/dashboard',['user'=>$user]);
	}

	public function register()
	{
		if($this->session->userdata('id'))
			redirect('Admin/welcome');
		$this->form_validation->set_rules('username','Username','required|is_unique[users.name]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[password]');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$gender = $this->input->post('gender');
	
			$this->load->model('Login_model');
			$register = $this->Login_model->register($username,$password,$email,$phone,$gender);

		}
		else
		{
			$this->load->view('Admin/register');

		}

		
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('Admin/index');
	}
}


?>