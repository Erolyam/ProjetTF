<?php
	class User_model extends CI_Model{
		public function register(){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'password' => $this->input->post('password'),
                'rol' => $this->input->post('rol'),
                'lastname' => $this->input->post('lastname')
			);

			// Insert user
			return $this->db->insert('user', $data);
		}

		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('user');

			if($result->num_rows() == 1){
				return $result->row(0)->idUser;
			} else {
				return false;
			}
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('user', array('username' => $username));
			if($query->row_array() == null) {
				return true;
			} else {
				return false;
			}

		}/***/

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('user', array('email' => $email));
			if($query->row_array() == null){
				return true;
			} else {
				return false;
			}
		}
	}