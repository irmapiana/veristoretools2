<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminLtePluginAsset extends AssetBundle {

    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
//        'chart.js/Chart.min.css',
            // more plugin CSS here
    ];
    public $js = [
//        'chart.js/Chart.bundle.min.js'
            // more plugin Js here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
