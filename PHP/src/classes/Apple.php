<?php

require_once 'AbstractFruit.php';

class Apple extends AbstractFruit
{

    protected $type;

    public function __construct()
    {
        $this->setType();
    }


    private function setType($type="Apple"): void
    {
        $this->type = $type;
    }


    public function getType():string
    {
        return $this->type;
    }

    static public function checkObject(AbstractPlant $obj):string
    {
        return parent::checkObject($obj);
    }


}

