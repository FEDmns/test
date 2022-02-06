<?php


namespace FEDmns\Test;

class TochkaAPI
{


    /**
     * @var string
     */
    private $val;

    public function __construct()
    {
        echo '__constructor<br>';
        $this->val = 'Hello';
    }

    public function Test()
    {
        echo 'Test<br>';
        echo $this->val;
    }

    public function __destruct()
    {
        echo '__destruct<br>';
    }
}