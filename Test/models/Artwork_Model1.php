<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 3:34 PM
 */

namespace models\tests\units;

use \atoum;

class Artwork_Model1 extends atoum
{
    public function test_getAllArtworks()
    {
        $this
            ->if($m = new \models\Artwork_Model1())
            ->and($d = $m->getAllArtworks())
            ->then
            ->integer($d->num_rows)
            // ->isNotNull();
            ->isNotNull();
        return 0;
    }

    public function test_getAllArtworksByCate()
    {

        $this
            ->if($m = new \models\Artwork_Model1())
            ->and($d = $m->getAllArtworksByCate("1"))
            ->then
            ->integer($d->num_rows)
            ->isNotEqualTo(0);
        // ->isEqualTo(1);


    }


    public function test_getArtwork()
    {

        $this
            ->if($m = new \models\Artwork_Model1())
            ->and($d = $m->getArtwork("1"))
            ->then
            ->integer($d->num_rows)
            //->isNotNull();
            ->isNotEqualTo(0);
        // ->isEqualTo(1);


    }

    public function test_getAllCategorie()
    {

        $this
            ->if($m = new \models\Artwork_Model1())
            ->and($d = $m->getAllCategorie())
            ->then
            ->integer($d->num_rows)
            //->isNotNull();
            ->isNotEqualTo(0);
        // ->isEqualTo(1);


    }


}