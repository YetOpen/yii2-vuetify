<?php
/**
 * @link https://github.com/Vaxa/yii2-vuetify
 * @copyright Copyright (c) 2018 Anton Kazarinov
 * @fork Vlad Shashkov
 * @license https://github.com/Vaxa/yii2-vuetify/blob/master/LICENSE
 */

namespace vaxa\vuetify;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VuetifyAsset
 *
 * Registers Vuetify
 *
 * @author Anton Kazarinov <askazarinov@gmail.com> and Vlad Shashkov
 * @package myaza\vuetify
 */
class VuetifyAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@npm/vuetify/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        YII_ENV_DEV ? 'vuetify.js' : 'vuetify.min.js',
    ];
    
    public $css = [
        YII_ENV_DEV ? 'vuetify.css' : 'vuetify.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = [
        'position' => View::POS_END,
    ];
}
