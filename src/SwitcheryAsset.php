<?php
/**
 * @link https://github.com/2amigos/yii2-switchery-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\switchery;

use yii\web\AssetBundle;

/**
 * @author Nikola Radovic <nikola.radovic@2amigos.us>
 * @link http://www.2amigos.us/
 * @package dosamigos\yii2\widgets
 */
class SwitcheryAsset extends AssetBundle
{
    public $sourcePath = '@bower/switchery/dist';

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'switchery.css' : 'switchery.min.css';
        $this->js[] = YII_DEBUG ? 'switchery.js' : 'switchery.min.js';
    }
} 