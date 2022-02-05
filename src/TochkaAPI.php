<?php


namespace FEDmns\TochkaAPI;

use FEDmns\TochkaAPIAuth;


class TochkaAPI
{


    /**
     * @var string
     */
    private $val;

    public function __constructor()
    {
        $this->val = 'Hello';
    }

    public function Test()
    {
        echo $this->val;
    }
}