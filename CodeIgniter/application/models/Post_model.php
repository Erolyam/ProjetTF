<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($title = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($title === FALSE){
				$this->db->order_by('Artwork.idArtwork', 'DESC');
				$this->db->join('Category', 'Category.idCategory = Artwork.category_idCategory');
				$query = $this->db->get('Artwork');
				return $query->result_array();
			}

			$query = $this->db->get_where('Artwork', array('idArtwork' => $title));

			return $query->row_array();
		}


		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image
			);

			return $this->db->insert('posts', $data);
		}



	}