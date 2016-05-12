<?php

namespace app\modules\main;

/**
 * main module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\main\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setLayoutPath('@frontend/views/layouts'); //указываем где искать Layouts
        parent::init();

        // custom initialization code goes here
    }
}
