<?php

namespace App\Assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{
    public $depends = [
        YiiAsset::class
    ];
}
