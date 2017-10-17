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
}