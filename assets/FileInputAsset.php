<?php

namespace pendalf89\filemanager\assets;

use yii\web\AssetBundle;

class FileInputAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sibds/yii2-filemanager/assets/source';

    public $js = [
        'js/fileinput.js',
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapAsset',
        'yii\web\JqueryAsset',
        'pendalf89\filemanager\assets\ModalAsset',
    ];
}
