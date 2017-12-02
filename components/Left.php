<?php

namespace app\components;

use app\models\User;
use app\modules\admin\Admin;
use yii\base\Object;

class Left extends Object 
{
    static public function getAdminLeft()
    {
        return [
                ['label' => '管理菜单', 'options' => ['class' => 'header']],
//                ['label' => '用户管理', 'icon' => 'fa fa-file-code-o', 'url' => ['/user/admin']],
                [
                    'label' => '项目管理',
                    'icon' => 'fa fa-share',
                    'items' => [
                        ['label' => '活动管理', 'icon' => 'fa fa-file-code-o', 'url' => ['/admin/activity-config/index']],
                        ['label' => '公众号管理', 'icon' => 'fa fa-file-code-o', 'url' => ['/admin/public-config/index']],
                        ['label' => '域名管理', 'icon' => 'fa fa-file-code-o', 'url' => ['/admin/app-config/index']]
                    ],
                ],
                [
                    'label' => '单页视频管理',
                    'icon' => 'fa fa-share',
                    'url' => '/admin/video',
                ]
            ];
    }
}
