<?php
/**
 * @link https://github.com/2amigos/yii2-switchery-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\switchery;

use yii\helpers\Json;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Switchery renders a checkbox type iOS style toggle switch control. For example:
 *
 * ```
 * $form->field($model, 'attribute')->widget(Switchery::className(), [
 *     'options' => [
 *         'label' => false
 *     ],
 *     'clientOptions' => [
 *         'color' => '#5fbeaa',
 *     ]
 * ])
 * ```
 *
 * @author Nikola Radovic <nikola.radovic@2amigos.us>
 * @link http://www.2amigos.us/
 * @package dosamigos\switchery
 */
class Switchery extends InputWidget
{
    /**
     * @var bool whether to display the label inline or not. Defaults to true.
     */
    public $inlineLabel = true;

    /**
     * @var bool specifies whether the checkbox should be checked or unchecked, when not used with a model. If [[items]],
     * [[$checked]] will specify the value to select.
     */
    public $checked = false;
    /**
     * @var array the options for the Bootstrap Switch 3 plugin.
     * Please refer to the Bootstrap Switch 3 plugin Web page for possible options.
     * @see http://www.bootstrap-switch.org/
     */
    public $clientOptions = [];
    /**
     * @var array the event handlers for the underlying Bootstrap Switch 3 input JS plugin.
     * Please refer to the [Bootstrap Switch 3](http://www.bootstrap-switch.org/) plugin
     * Web page for possible events.
     */
    public $clientEvents = [];
    /**
     * @var string the DOM element selector
     */
    protected $selector;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            $input = Html::activeCheckbox($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::checkbox($this->name, $this->checked, $this->options);
        }
        echo $this->inlineLabel ? $input : Html::tag('div', $input);
        $this->selector = "#{$this->options['id']}";

        $this->registerClientScript();
    }

    /**
     * Registers Bootstrap Switch plugin and related events
     */
    public function registerClientScript()
    {
        $view = $this->view;
        SwitcheryAsset::register($view);

        $options = Json::encode($this->clientOptions);

        $js[] = ";var el_{$this->getId()} = document.querySelector('{$this->selector}');";
        $js[] = "var sw_{$this->getId()} = new Switchery(el_{$this->getId()}, {$options});";

        if (!empty($this->clientEvents)) {
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "el_{$this->getId()}.addEventListener('$event', $handler);";
            }
        }
        $view->registerJs(implode("\n", $js));
    }

}