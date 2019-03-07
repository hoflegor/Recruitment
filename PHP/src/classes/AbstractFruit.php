<?php

require_once 'AbstractPlant.php';

abstract class AbstractFruit extends AbstractPlant
{

    public static function checkObject(AbstractPlant $obj): string
    {
        return parent::checkObject($obj);
    }

}