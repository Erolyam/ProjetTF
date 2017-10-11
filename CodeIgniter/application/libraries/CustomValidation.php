<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 11/10/2017
 * Time: 11:41 PM
 */
class CustomValidation
{
    public function __construct ( ) {
        return;
    }

    public function email_regex_check($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return FALSE;
        }
    }
}