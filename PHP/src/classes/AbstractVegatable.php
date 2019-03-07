<?php

require_once 'AbstractPlant.php';

abstract class AbstractVegatable extends AbstractPlant
{

    public static function checkObject(AbstractPlant $obj): string
    {
        return parent::checkObject($obj);
    }

}