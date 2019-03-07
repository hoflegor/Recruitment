<?php

require_once 'AbstractVegatable.php';

class Potato extends AbstractVegatable
{

    protected $type;

    public function __construct()
    {
        $this->type = "Potato";
    }


    public function getType(): string
    {
        return $this->type;
    }

    static public function checkObject(AbstractPlant $obj):string
    {
        return parent::checkObject($obj);
    }

}
