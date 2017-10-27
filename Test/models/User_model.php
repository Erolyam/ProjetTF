<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 3:34 PM
 */

namespace models\tests\units;

use \atoum;

class User_model extends atoum
{
    public function test_username_exists()
    {
        $this
            ->if($m = new \models\User_model())
            ->then
            ->boolean($m->check_username_exists('dromeror'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_email_exists()
    {
        $this
            ->if($m = new \models\User_model())
            ->then
            ->boolean($m->check_email_exists('dromeror@unal.edu.co'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_login()
    {
        $this
            ->if($m = new \models\User_model())
            ->and($d = $m->login('bilal', 'bilal'))
            ->then
            ->integer($d->num_rows)
            ->isEqualTo(1);
        return 0;
    }


}