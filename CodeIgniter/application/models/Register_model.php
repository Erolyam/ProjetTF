<?php
 class Register_model extends CI_Model {
     function insert_data($options = array()){
         if(isset($options['name']))
             $this->db->set('name',strip_tags($options['name']));
         if(isset($options['lastname']))
             $this->db->set('lastname',strip_tags($options['lastname']));
         if(isset($options['age']))
             $this->db->set('age',strip_tags($options['age']));
         if(isset($options['username']))
             $this->db->set('username',strip_tags($options['username']));
         if(isset($options['email']))
             $this->db->set('email',strip_tags($options['email']));
         if(isset($options['password']))
             $this->db->set('password',strip_tags($pass = hash('sha256', $options['password'])));
         $this->db->insert("user");
         return $this->db->insert_id();
     }

     function username_exists($username)
     {
         $this->db->where('username',$username);
         $query = $this->db->get('user');
         return $query->num_rows() > 0;
     }

     function email_exists($email)
     {
         $this->db->where('email',$email);
         $query = $this->db->get('user');
         return $query->num_rows() > 0;
     }

 }