<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Register extends CI_Controller {
     public function __construct(){
         parent::__construct();
         $this->load->model("register_model");
     }

     public function index()
     {
         $this->insert();
     }

     public function insert()
     {
         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');

         $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
         $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('age', 'Age', 'required|numeric');

         if ($this->form_validation->run())
         {
             $register=$this->register_model->insertdata($_POST);
             if($register){
                 $this->session->set_flashdata('msg', 'Utilisateur ajouté correctement');
                 redirect(current_url()); //unset form values after success
                 return;
             }
         }
         $data['title']="Registration";
         $this->load->view('register_view',$data);
     }

     public function email_regex_check($str)
     {
         if (1 !== preg_match("/(?![[:alnum:]]|@|-|_|\.)./", $str))
         {
             $this->form_validation->set_message('email_regex_check', 'The email is not valid!');
             return FALSE;
         }
         else
         {
             return TRUE;
         }
     }

 }