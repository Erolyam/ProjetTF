<?php
	class Comments extends CI_Controller{
		public function create($post_id){

			/*if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}*/
			$idArtwork = $this->input->post('idArtwork');
			$data['post'] = $this->post_model->get_posts($idArtwork);

			$this->form_validation->set_rules('comment', 'Comment', 'required');
			


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('Artwork/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->create_comment($post_id);
				redirect('Artwork/'.$idArtwork);
			}
		}
		public function edite($id_comment){

			/*if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}*/
			$idArtwork = $this->input->post('idArtwork');
			$data['post'] = $this->post_model->get_posts($idArtwork);

			$this->form_validation->set_rules('comment', 'Comment', 'required');
			


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('Artwork/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->update_comment($id_comment);
				redirect('Artwork/'.$idArtwork);
			}
		}
		public function delete($id_comment){

			/*if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}*/
			$idArtwork = $this->session->userdata('item');;
			$data['post'] = $this->post_model->get_posts($idArtwork);

			    $this->load->view('templates/header');
				$this->load->view('Artwork/view', $data);
				$this->load->view('templates/footer');
			
				$this->comment_model->delete_comment($id_comment);
				redirect('Artwork/'.$idArtwork);
			
		}
		public function CALC($a ,$b){

			$f = $a+$b;
			return  $f;
		}
	}