<?php


class Artwork extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artwork_model');
    }

    public function byID($id_artwork)
    {
        $data['artwork'] = $this->artwork_model->getArtwork($id_artwork);

        $this->load->view('artwork_detailed', $data);
    }

}