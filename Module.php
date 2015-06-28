<?php

namespace lo\modules\page;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'lo\modules\page\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
		// initialize the module with the configuration loaded from config.php
        //\Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}