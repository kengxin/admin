<?php
namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class PublicConfig extends ActiveRecord
{
    public static function tableName()
    {
        return 'public_config';
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
            [['name', 'app_id', 'app_secret', 'activity_id'], 'required'],
            [['created_at', 'activity_id'], 'integer'],
            [['name', 'app_id', 'app_secret'], 'string'],
            [['app_id'], 'string', 'length' => 18],
            [['app_secret'], 'string', 'length' => 32]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'app_id' => 'AppId',
            'app_secret' => 'APP密钥',
            'activity_id' => '所属活动',
            'created_at' => '创建时间'
        ];
    }

    public function getActivityConfig()
    {
        return $this->hasOne(ActivityConfig::className(), ['id' => 'activity_id']);
    }

    public function getAppConfig()
    {
        return $this->hasOne(AppConfig::className(), ['pid' => 'id']);
    }
}