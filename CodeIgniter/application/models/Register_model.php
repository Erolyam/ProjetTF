<?php
 class Register_model extends CI_Model {
     function insert_data($user_data){
        $this->db->set('name',$user_data['name']);
        $this->db->set('lastname',$user_data['lastname']);
        $this->db->set('age',$user_data['age']);
        $this->db->set('username',$user_data['username']);
        $this->db->set('email',$user_data['email']);
        $this->db->set('password',$user_data['password']);
        if(isset($user_data['photo'])){
            $this->db->set('profile_picture',$user_data['photo']);
        }
        $this->db->insert("User");
        return $this->db->insert_id();
     }

     function username_exists($username)
     {
         $this->db->where('username',$username);
         $query = $this->db->get('User');
         return $query->num_rows() > 0;
     }

     function email_exists($email)
     {
         $this->db->where('email',$email);
         $query = $this->db->get('User');
         return $query->num_rows() > 0;
     }

 }