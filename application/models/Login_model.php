<?php

class Login_model extends CI_model
{
	public function isValidate($username,$password)
	{
		$q =$this->db->where(['name'=>$username,'password'=>$password])
				->get('users');
//echo $this->db->last_query();
 			//var_dump($q);
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return false;
		}

	}

	public function userDetails()
	{
		$id = $this->session->userdata('id');
		$q = $this->db->where(['id'=>$id])
				->get('users');

			//echo $this->db->last_query();
				return $q->result();
	}
	public function register($username,$password,$email,$phone,$gender)
	{
				$array =array(
					'name' => $username, 
					'email' => $email,
					'password' => md5($password),
					'gender' => $gender,
					'phone' => $phone,
					'created' => date('Y-m-d')

					);

				$this->db->insert('users',$array);
				$this->session->set_flashdata("success","Your account has been created!");
				redirect("Admin/index","refresh");
	}
}

?>