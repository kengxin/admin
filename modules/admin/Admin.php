<?php

namespace app\modules\admin;

use yii\filters\AccessControl;

/**
 * Admin module definition class
 */
class Admin extends \yii\base\Module
{
    //public $layout = 'main';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['*'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
