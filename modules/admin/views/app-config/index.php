<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '域名管理'
?>
<?= Html::a('新增数据', ['/admin/app-config/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px;'])?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'columns' => [
        'id',
        [
            'attribute' => 'pid',
            'value' => 'publicConfig.name',
        ],
        [
            'attribute' => 'activity_id',
            'value' => 'publicConfig.activityConfig.name',
        ],
        'domain',
        [
            'attribute' => 'type',
            'value' => function ($model) {
                return \app\models\AppConfig::getTypeList()[$model->type];
            }
        ],
        [
            'attribute' => 'status',
            'value' => function ($model) {
                return \app\models\AppConfig::getStatusList()[$model->status];
            }
        ],
        'created_at:datetime',
        [
            'attribute' => 'closed_at',
            'format' => 'raw',
            'value' => function ($model) {
                if ($model->closed_at == 0) {
                    return '未封禁';
                }

                return '<span style="color: red">' . date('Y-m-d H:i:s', $model->closed_at) . '</span>';
            }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => "{update} {delete}",
            'buttons' => [
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-info">修改</span>', "/admin/app-config/update?id={$model->id}", ['title' => '修改'] );
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-danger">删除</span>', "/admin/app-config/delete?id={$model->id}", ['title' => '删除'] );
                },
            ]
        ]
    ]
])?>
