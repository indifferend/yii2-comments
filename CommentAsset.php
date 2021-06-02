<?php

namespace indifferend\comments;

use yii\web\AssetBundle;

/**
 * Class CommentAsset
 *
 * @package indifferend\comments
 */
class CommentAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/indifferend/yii2-comments/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/comment.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/comment.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
}
