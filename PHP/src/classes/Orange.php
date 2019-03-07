<?php

require_once 'AbstractFruit.php';

class Orange extends AbstractFruit
{

    protected $type = "Orange";


    public function getType(): string
    {
        return $this->type;
    }

    public static function make()
    {
        return strtolower(get_class())." juice";
    }

    static public function checkObject(AbstractPlant $obj):string
    {
        return parent::checkObject($obj);
    }

}
