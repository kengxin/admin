<?php

namespace app\models;

use yii\web\User as BaseUser;
use Yii;

class WebUser extends BaseUser
{
    public static $permissions;

    protected function afterLogin($identity, $cookieBased, $duration)
    {
        parent::afterLogin($identity, $cookieBased, $duration);
        if(is_a($identity, 'app\models\User')) {
            Yii::$app->session['username'] = $identity->username;
        }
    }

    public function getUserName()
    {
        return Yii::$app->session['username'];
    }

}
