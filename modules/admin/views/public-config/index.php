<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '公众号管理'
?>
<?= Html::a('新增公众号', ['/admin/public-config/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px;'])?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'columns' => [
        'id',
        'name',
        'app_id',
        'app_secret',
        'created_at:datetime',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => "{view} {update} {delete}",
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-success">查看</span>', "/admin/app-config?pid={$model->id}", ['title' => '查看'] );
                },
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-info">修改</span>', "/admin/public-config/update?id={$model->id}", ['title' => '修改'] );
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-danger">删除</span>', "/admin/public-config/delete?id={$model->id}", ['title' => '删除'] );
                },
            ]
        ]
    ]
])?>
