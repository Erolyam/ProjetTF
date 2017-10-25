<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 11/10/2017
 * Time: 11:41 PM
 */
namespace utilities;
class CustomValidation
{
    public function __construct ( ) {
        return;
    }

    function normalize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function validate_name($email){
        return $this->name_regex_check($email) && strlen($email)<=45;
    }

    public function validate_title($email){
        return strlen($email)<=45;
    }

    public function validate_description($description){
        return strlen($description)<=2000;
    }

    public function validate_email($email){
        return $this->email_regex_check($email) && strlen($email)<=45;
    }

    public function validate_username($username){
        return $this->username_regex_check($username)&& strlen($username)>=6 && strlen($username)<=45;
    }

    public function validate_password($password){
        return strlen($password)>=8 && strlen($password)<=45;
    }

    public function validate_age($age){
        return $this->number_regex_check($age) && $age > 0;
    }

    public function validate_matches($m1,$m2){
        return $m1 === $m2;
    }

    public function name_regex_check($name)
    {
        return preg_match("/^[\sa-zA-Z'-]+$/", $name);
    }

    public function number_regex_check($num)
    {
        return preg_match("/^[0-9]+$/", $num);
    }

    public function username_regex_check($name)
    {
        return preg_match("/^[A-Za-z][A-Za-z0-9]+$/", $name);
    }

    public function email_regex_check($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}