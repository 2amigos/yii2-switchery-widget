yii2-widget-switchery
======================


Yii2 wrapper for [iOS 7 style switches](http://abpetkov.github.io/switchery/) for your checkboxes 

## Installation

Not available yet, but it would probably be something like this:

To install it manually 

```
$ php composer.phar require 2amigos/yii2-switchery-widget "*"
```

or add inside compsoer.json

```
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
