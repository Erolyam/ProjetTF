<?php

class Acceuil extends CI_Controller {

    public function index(){
        $this->view('index');
    }

    public function view($page = 'index'){
        if(!file_exists(APPPATH.'views/page_acceuil/'.$page.'.php')){
            echo APPPATH.'views/'.$page.'.php';
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('page_acceuil/'.$page, $data);

    }
}