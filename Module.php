<?php

namespace indifferentmoviegoer\comments;

use Yii;

/**
 * Class Module
 *
 * @package indifferentmoviegoer\comments
 */
class Module extends \yii\base\Module
{
    /**
     * @var string the class name of the [[identity]] object
     */
    public $userIdentityClass;

    /**
     * @var string the class name of the comment model object, by default its indifferentmoviegoer\comments\models\CommentModel
     */
    public $commentModelClass = 'indifferentmoviegoer\comments\models\CommentModel';

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'indifferentmoviegoer\comments\controllers';

    /**
     * @var bool when admin can edit comments on frontend
     */
    public $enableInlineEdit = false;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        if (null === $this->userIdentityClass) {
            $this->userIdentityClass = Yii::$app->getUser()->identityClass;
        }
    }
}
