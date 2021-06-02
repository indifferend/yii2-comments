<?php

namespace indifferend\comments\traits;

use Yii;
use indifferend\comments\Module;

/**
 * Class ModuleTrait
 *
 * @package indifferend\comments\traits
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
