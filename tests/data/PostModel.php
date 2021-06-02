<?php

namespace indifferend\comments\tests\data;

use yii\db\ActiveRecord;

/**
 * Class PostModel
 *
 * @package indifferend\comments\tests\data
 */
class PostModel extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
        ];
    }
}
