<?php

require_once 'PlantInterface.php';

abstract class AbstractPlant implements PlantInterface
{

    protected $type = "Other";

    public static function checkObject (AbstractPlant $obj):string {
        return $obj->getType();
    }

}