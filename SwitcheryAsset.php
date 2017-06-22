<?php
/**
 * @copyright Copyright (c) 2017 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace app\widgets\switchery;

use yii\web\AssetBundle;

/**
 * @author Nikola Radovic <nikola.radovic@2amigos.us>
 * @link http://www.2amigos.us/
 * @package dosamigos\yii2\widgets
 */
class SwitcheryAsset extends AssetBundle
{
    public $sourcePath = '@app/widgets/switchery/assets';

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'css/switchery.css' : 'css/switchery.min.css';
        $this->js[] = YII_DEBUG ? 'js/switchery.js' : 'js/switchery.min.js';
    }
} 