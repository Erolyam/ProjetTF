<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 3:34 PM
 */

namespace models\tests\units;

use \atoum;

class Comment_Model extends atoum
{
    public function test_get_comments()
    {
        $this
            ->if($m = new \models\Comment_Model())
            ->and($d = $m->get_comments("2"))
            ->then
            ->integer($d->num_rows)
            // ->isNotNull();
            ->isNotEqualTo(0);
    }


    public function test_AddComment()
    {
        //session_start(); 
        //  $_SESSION['idUser']='1';
        $Comment_data = array();
        $Comment_data['idArtwork'] = '1';
        $Comment_data['comment'] = 'Test Unitaire';
        $this
            ->if($m = new \models\Comment_Model())
            ->and($d = $m->AddComment($Comment_data))
            ->then
            ->boolean($d)
            ->isTrue();
    }


}