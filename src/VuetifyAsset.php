<?php
/**
 * @link https://github.com/antkaz/yii2-vue
 * @copyright Copyright (c) 2018 Anton Kazarinov
 * @license https://github.com/antkaz/yii2-vue/blob/master/LICENSE
 */

namespace myaza\vuetify;

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
