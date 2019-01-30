<p align="center">
    <a href="//vuetifyjs.com" target="_blank" rel="external">
        <img src="https://cdn.vuetifyjs.com/images/logos/v-alt.svg" width="200" />
    </a>
    <h1 align="center">Vuetify Extension for Yii2</h1>
    <br>
</p>

This is the <a href="//vuetifyjs.com" target="_blank">Vuetify</a> extension for Yii2.

# Requirements
<a href="//github.com/antkaz/yii2-vue" target="_blank" rel="external">antkaz/yii2-vue</a>

# Installation

The preferred way to install this extension is through composer.

Run

```bash
php composer.phar require vaxa/yii2-vuetify
```

or add

```
"vaxa/yii2-vuetify": "~1.0"
```

to the **require** section of your `composer.json` file.


# Usage 

php template:
```
<?php
use antkaz\vue\VueAsset;
VueAsset::register($this);
use vaxa/vuetify/VuetifyAsset;
VuetifyAsset::register($this);
```

twig template :
```
{{ use('antkaz/vue/VueAsset') }}
{{ use('vaxa/vuetify/VuetifyAsset') }}
{{ register_vue_asset() }}
{{ register_vuetify_asset() }}
```

