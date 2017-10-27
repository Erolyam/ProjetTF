<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 3:47 PM
 */

namespace controllers\tests\units;

use \atoum;

class User_controller extends atoum
{
    public function test_email_exists()
    {
        $this
            ->if($c = new \controllers\User_controller(false))
            ->then
            ->boolean($c->is_available_email("ewuqeuwqyiweq@gmail.com"))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_username_exists()
    {
        $this
            ->if($c = new \controllers\User_controller(false))
            ->then
            ->boolean($c->is_available_username("usernameAvailable123"))
            ->isIdenticalTo(true);
        return 0;
    }
}