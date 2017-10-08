<?php

class Artwork_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getAllArtworks()
    {
        $query = $this->db->get('Artwork');
        return $query->result_array();
    }

    public function getArtwork($id_artwork)
    {
        $query = $this->db->get_where('Artwork', array('idArtwork' => $id_artwork));
        return $query->row_array();
    }
}