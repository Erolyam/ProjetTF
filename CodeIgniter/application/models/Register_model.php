<?php
 class Register_model extends CI_Model {
     function insertdata($options = array()){
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
             $this->db->set('password',strip_tags($options['password']));
         $this->db->insert("user");
         return $this->db->insert_id();
     }
 }