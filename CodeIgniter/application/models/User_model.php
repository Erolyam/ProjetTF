<?php
	class User_model extends CI_Model{
		public function register($user_data){
			// Insert user
			return $this->db->insert('user', $user_data);
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

        function check_username_exists($username)
        {
            $this->db->where('username',$username);
            $query = $this->db->get('User');
            return $query->num_rows() > 0;
        }

        function check_email_exists($email)
        {
            $this->db->where('email',$email);
            $query = $this->db->get('User');
            return $query->num_rows() > 0;
        }

	}