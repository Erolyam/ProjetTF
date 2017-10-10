<?php
	class Users extends CI_Controller{
		// Register user
        public function is_form_valid(){
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[45]');
            $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|max_length[45]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[45]|callback_is_username_not_taken');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[45]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[45]|callback_email_regex_check|callback_is_email_not_taken');
            $this->form_validation->set_rules('age', 'Age', 'required|numeric|is_natural');
            return $this->form_validation->run();
        }

        public function email_regex_check($email)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                $this->form_validation->set_message('email_regex_check', 'E-mail invalide');
                return FALSE;
            }
        }

        public function is_email_not_taken($email){
            if(!$this->user_model->check_email_exists($email)){
                return true;
            }else{
                $this->form_validation->set_message('is_email_not_taken', 'Cet e-mail est déjà utilisé');
                return FALSE;
            }
        }

        public function is_username_not_taken($username){
            if(!$this->user_model->check_username_exists($username)){
                return true;
            }else{
                $this->form_validation->set_message('is_username_not_taken', 'Cet username est déjà utilisé');
                return FALSE;
            }
        }

		public function register(){
			$data['title'] = "Registre";

			if($this->is_form_valid() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
                $user_data = array();
                $user_data['name']=$this->input->post('name');
                $user_data['lastname']=$this->input->post('lastname');
                $user_data['age']=$this->input->post('age');
                $user_data['username']=$this->input->post('username');
                $user_data['email']=$this->input->post('email');
                $user_data['password']=hash('sha256', $this->input->post('password'));
                if(isset($_FILES['photo'])){
                    $file_data = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
                    $user_data['photo']=$file_data;
                }

                $this->user_model->register($user_data);

				// Set message
				$this->session->set_flashdata('user_registered', 'Utilisateur '.$user_data['username'].'ajouté correctement');

				redirect('Artwork');
			}
		}

		// Log in user
		public function login(){
			$data['title'] = 'Authentification';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
                // Get username
                $username = $this->input->post('username');
                $password = hash('sha256',$this->input->post('password'));
				// Get and encrypt the password
				// Login user
				$idUser = $this->user_model->login($username, $password);

				if($idUser){
					// Create session
					$user_data = array(
						'idUser' => $idUser,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					//$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('Artwork');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login incorrect');

					redirect('users/login');
				}		
			}
		}

		// Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('idUser');
			$this->session->unset_userdata('username');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'Vous êtes déconnecté');

			redirect('users/login');
		}

		 //Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}
/**/
		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}