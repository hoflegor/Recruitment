<?php

require_once 'AbstractVegatable.php';

class Cabbage extends AbstractVegatable{

    public function __construct()
    {
        $this->setType('Cabbage');
    }


    public function setType(string $type)
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