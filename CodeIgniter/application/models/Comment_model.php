<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_comment($Artwork_idArtwork){
			$data = array(
				'Artwork_idArtwork' => $Artwork_idArtwork,
				'comment' => $this->input->post('comment'),
				'date' => date('Y-m-d H:i:s'),
				'User_idUser' => $this->session->userdata('idUser')
			);

			return $this->db->insert('Comment', $data);
		}

		public function get_comments($idArtwork){
			         $this->db->order_by('Comment.date', 'DESC');
			$query = $this->db->get_where('Comment', array('Artwork_idArtwork' => $idArtwork));

			return $query->result_array();
		}

		public function update_comment($id_comment){
			

			$data = array('Comment' => $this->input->post('Comment')
				
			);

			$this->db->where('id_comment',$id_comment);
			return $this->db->update('Comment', $data);
		}

		public function delete_comment($id_comment){
			
			$this->db->where('id_comment', $id_comment);
			$this->db->delete('Comment');
			return true;
		}
	}