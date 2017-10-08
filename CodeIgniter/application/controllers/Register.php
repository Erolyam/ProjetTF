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
         if(!$this->register_model->email_exists($email)){
             return true;
         }else{
             $this->form_validation->set_message('is_email_not_taken', 'Cet e-mail est déjà utilisé');
             return FALSE;
         }
     }

     public function is_username_not_taken($username){
         if(!$this->register_model->username_exists($username)){
             return true;
         }else{
             $this->form_validation->set_message('is_username_not_taken', 'Cet username est déjà utilisé');
             return FALSE;
         }
     }

     public function insert()
     {
         if ($this->is_form_valid())
         {
             $user_data = array();
             if(isset($_POST['name']))
                 $user_data['name']=strip_tags($_POST['name']);
             if(isset($_POST['lastname']))
                 $user_data['lastname']=strip_tags($_POST['lastname']);
             if(isset($_POST['age']))
                 $user_data['age']=strip_tags($_POST['age']);
             if(isset($_POST['username']))
                 $user_data['username']=strip_tags($_POST['username']);
             if(isset($_POST['email']))
                 $user_data['email']=strip_tags($_POST['email']);
             if(isset($_POST['password']))
                 $user_data['password']=strip_tags($pass = hash('sha256', $_POST['password']));

             if(isset($_FILES['photo'])){
                 $file_data = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
                 $user_data['photo']=$file_data;
             }

             $register=$this->register_model->insert_data($user_data);
             if($register){
                 $this->session->set_flashdata('msg', 'Utilisateur ajouté correctement ');
                 redirect(current_url()); //unset form values after success
                 return;
             }
         }
         $data['title']="Registration";
         $this->load->view('register_view',$data);
     }

 }