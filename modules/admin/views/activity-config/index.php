<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '活动管理'
?>
<?= Html::a('新增活动', ['/admin/activity-config/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px;'])?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'columns' => [
        'id',
        'name',
        [
            'label' => '可用域名数量',
            'format' => 'raw',
            'value' => function($model) {
                return Html::a($model->getSuccessDomainNum(), ['/admin/app-config', 'activity_id' => $model->id]);
            }
        ],

        'created_at:datetime',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => "{view} {update} {delete}",
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-success">查看</span>', "/admin/public-config?activity_id={$model->id}", ['title' => '查看'] );
                },
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-info">修改</span>', "/admin/activity-config/update?id={$model->id}", ['title' => '修改'] );
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-danger">删除</span>', "/admin/activity-config/delete?id={$model->id}", ['title' => '删除'] );
                },
            ]
        ]
    ]
])?>
