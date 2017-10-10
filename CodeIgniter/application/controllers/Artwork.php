<?php
	class Artwork extends CI_Controller{
		public function index($offset = 0){	
			// Pagination Config	
			$config['base_url'] = base_url() . 'Artwork/index/';
			$config['total_rows'] = $this->db->count_all('Artwork');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			//$this->pagination->initialize($config);

			$data['title'] = 'Les oeuvres';
            
          
			$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header');
			$this->load->view('Artwork/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($idArtwork = NULL){
			$data['post'] = $this->post_model->get_posts($idArtwork);
			
			$data['comments'] = $this->comment_model->get_comments($idArtwork);
           
			if(empty($data['post'])){
				show_404('dsfddfdfsfsd');
			}

			//$data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('Artwork/view', $data);
			$this->load->view('templates/footer');
		}

		public function add(){
			// Check login
		/*	if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}*/

			$data['title'] = 'Liste des films';

			$data['categories'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('Artwork/add', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

				$this->post_model->create_post($post_image);

				// Set message
				$this->session->set_flashdata('post_created', 'Your post has been created');

				redirect('Artwork');
			}
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->post_model->delete_post($id);

			// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

			redirect('Artwork');
		}

		public function edit($idArtwork){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['post'] = $this->post_model->get_posts($slug);

			// Check user
			if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']){
				redirect('posts');

			}

			$data['categories'] = $this->post_model->get_categories();

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
			$this->load->view('Artwork/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->post_model->update_post();

			// Set message
			$this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('Artwork');
		}
	}