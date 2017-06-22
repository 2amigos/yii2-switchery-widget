# yii2-switchery-widget

[![Latest Version](https://img.shields.io/github/release/2amigos/yii2-switchery-widget.svg?style=flat-square)](https://github.com/2amigos/yii2-switchery-widget/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-switchery-widget/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-switchery-widget)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-switchery-widget/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-switchery-widget.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-switchery-widget)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-switchery-widget.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-switchery-widget)

Yii2 wrapper for [iOS 7 style switches](http://abpetkov.github.io/switchery/) for your checkboxes 

## Install

Via Composer

```bash
$ composer require 2amigos/yii2-switchery-widget
```

or add inside compsoer.json

```bash
"2amigos/yii2-switchery-widget": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php

use dosamigos\switchery\Switchery;
use yii\web\JsExpression;
 
 
// usage with model
echo $form->field($model, 'is_required')->widget(Switchery::className(), [
      'options' => [
          'label' => false
      ],
      'clientOptions' => [
          'color' => '#5fbeaa',
      ]
 ]);
 
 
// usage without model
echo Switchery::widget([
    'name' => 'is_required', 
    'value' => $model->is_required,
    'clientOptions' => [
        'color' => '#5FBEAA',
        'secondaryColor' => '#CCCCCC',
        'jackColor' => '#FFFFFF',
    ],
    'clientEvents' => [
        'change' => new JsExpression('function() {
            console.log("Cool! You changed my state.");
        }')
    ]
]);


```

## Testing

```bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nikola Radovic](https://github.com/dzona)
- [All Contributors](../../contributors)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.

<blockquote>
    <a href="http://www.2amigos.us"><img src="http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png"></a><br>
    <i>web development has never been so fun</i><br>
    <a href="http://www.2amigos.us">www.2amigos.us</a>
</blockquote>
