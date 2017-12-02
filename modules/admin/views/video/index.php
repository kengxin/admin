<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '单页视频管理'
?>
<?= Html::a('新增视频', ['/admin/video/create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom: 20px;'])?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'columns' => [
        'id',
        'name',
        'vid',
        'pause_sec',
        'suffix',
        'created_at:datetime',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => "{view} {update} {delete}",
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-success">查看</span>', '/' . substr(md5(mt_rand(0, 999) . time() . $model->id), rand(0, 22), 10) . '.' . $model->suffix . '?wf=' .substr(md5( time() .  $model->id . mt_rand(0, 999)), rand(0, 22), 10) . '&_t=' . time() . mt_rand(1000, 9999), ['title' => '查看'] );
                },
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-info">修改</span>', "/admin/video/update?id={$model->id}", ['title' => '修改'] );
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<span class="label label-danger">删除</span>', "/admin/video/delete?id={$model->id}", ['title' => '删除'] );
                },
            ]
        ]
    ]
])?>
