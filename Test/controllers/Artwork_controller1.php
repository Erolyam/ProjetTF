<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 3:47 PM
 */

namespace controllers\tests\units;

use \atoum;

class Artwork_controller1 extends atoum
{
    public function test_view()
    {
        $this
            ->if($c = new \controllers\Artwork_controller1(false))
            ->then
            ->boolean($c->view("1"))
            ->isIdenticalTo(true);

    }

    public function test_getAllcategotie()
    {
        $this
            ->if($c = new \controllers\Artwork_controller1(false))
            ->and($d = $c->getAllcategotie())
            ->then
            ->integer($d->num_rows)
            // ->isNotNull();
            ->isNotEqualTo(0);
        return 0;
    }

    public function test_getAllcategotieByide()
    {
        $this
            ->if($c = new \controllers\Artwork_controller1(false))
            ->then
            ->boolean($c->getAllcategotieByid("1"))
            ->isIdenticalTo(false);

    }
    /*
         public function test_addComment()
        {

            $_POST['idArtwork']='1';
            $_POST['comment']='Test ajouter commentaire';

            $this
                ->if($c = new \controllers\Artwork_controller1(false))
                ->then
                ->boolean($c->addComment())
                ->isIdenticalTo(true);

        }
    */


}