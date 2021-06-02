<?php

namespace indifferend\comments;

use Yii;

/**
 * Class Module
 *
 * @package indifferend\comments
 */
class Module extends \yii\base\Module
{
    /**
     * @var string the class name of the [[identity]] object
     */
    public $userIdentityClass;

    /**
     * @var string the class name of the comment model object, by default its indifferend\comments\models\CommentModel
     */
    public $commentModelClass = 'indifferend\comments\models\CommentModel';

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'indifferend\comments\controllers';

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
