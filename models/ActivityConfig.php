<?php
namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class ActivityConfig extends ActiveRecord
{
    public static function tableName()
    {
        return 'activity_config';
    }

    public function behaviors()
{
    return [
        [
            'class' => TimestampBehavior::className(),
            'attributes' => [
                ActiveRecord::EVENT_BEFORE_INSERT => ['created_at']
            ],
        ],
    ];
}

    public function rules()
    {
        return [
            [['name', 'count'], 'required'],
            [['name', 'count'], 'string'],
            [['created_at'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'count' => '统计代码',
            'created_at' => '创建时间'
        ];
    }

    public function getSuccessDomainNum($id = null)
    {
        if ($id == null) {
            $id = $this->id;
        }

        return PublicConfig::find()
            ->joinWith('appConfig')
            ->where(['public_config.activity_id' => $id])
            ->andWhere(['status' => AppConfig::STATUS_SUCCESS])
            ->count('domain');
    }
}