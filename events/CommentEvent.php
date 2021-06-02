<?php

namespace indifferend\comments\events;

use yii\base\Event;
use indifferend\comments\models\CommentModel;

/**
 * Class CommentEvent
 *
 * @package indifferend\comments\events
 */
class CommentEvent extends Event
{
    /**
     * @var CommentModel
     */
    private $_commentModel;

    /**
     * @return CommentModel
     */
    public function getCommentModel()
    {
        return $this->_commentModel;
    }

    /**
     * @param CommentModel $commentModel
     */
    public function setCommentModel(CommentModel $commentModel)
    {
        $this->_commentModel = $commentModel;
    }
}
