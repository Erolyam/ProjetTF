<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 8/10/2017
 * Time: 11:51 PM
 */

namespace utilities\tests\units;

use \atoum;

class CustomValidation extends atoum
{
    public function test_email_check_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_email('asdas@hotmail.com'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_email_check_valid_length_but_not_regex()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_email('asdas'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_email_check_not_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_email('asdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasaasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdashotmail.com'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_email_check_valid_regex_but_not_length()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_email('asdas@hotmailasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasaasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdas.com'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_name_check_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_name('Diego Romero Rodriguez'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_name_check_valid_2()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_name('Thibault'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_name_check_valid_length_but_not_regex()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_name('Diego5 Romero'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_username_check_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_username('dromero2'))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_username_check_valid_length_but_not_regex()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_username('2dromero'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_username_check_valid_length_but_not_regex_2()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_username('2dromero$'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_username_check_valid_regex_but_not_length()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_username('a'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_username_check_valid_regex_but_not_length_2()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_username('aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12aasdas12'))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_age_check_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_age("23"))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_age_check_not_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_age(-1))
            ->isIdenticalTo(false);
        return 0;
    }

    public function test_matches_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_matches("qwerty", "qwerty"))
            ->isIdenticalTo(true);
        return 0;
    }

    public function test_matches_not_valid()
    {
        $this
            ->if($v = new \utilities\CustomValidation())
            ->then
            ->boolean($v->validate_matches("qwerty", "azerty"))
            ->isIdenticalTo(false);
        return 0;
    }

}