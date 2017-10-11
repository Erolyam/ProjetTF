<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 8/10/2017
 * Time: 11:51 PM
 */
namespace tests\units;

use \atoum;
    class CustomValidation extends atoum
    {
        public function test_email_check_not_valid()
        {
            $this
                ->if($v = new \CustomValidation())
                ->then
                ->boolean($v->email_regex_check('asdas'))
                ->isIdenticalTo(false);
            return 0;
        }

        public function test_email_check_valid()
        {
            $this
                ->if($v = new \CustomValidation())
                ->then
                ->boolean($v->email_regex_check('asdas@hotmail.com'))
                ->isIdenticalTo(true);
            return 0;
        }
    }