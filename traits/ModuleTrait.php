<?php

namespace indifferentmoviegoer\comments\traits;

use Yii;
use indifferentmoviegoer\comments\Module;

/**
 * Class ModuleTrait
 *
 * @package indifferentmoviegoer\comments\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return Yii::$app->getModule('comment');
    }
}
