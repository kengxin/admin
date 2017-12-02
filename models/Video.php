<?php
namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Video extends ActiveRecord
{
    public static function tableName()
    {
        return 'video';
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
            [['name', 'vid', 'pause_sec', 'count', 'suffix'], 'required'],
            [['pause_sec', 'created_at'], 'integer'],
            [['name', 'vid', 'count', 'suffix'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'vid' => '视频Vid',
            'pause_sec' => '暂停时间',
            'count' => '统计代码',
            'suffix' => '文件后缀',
            'created_at' => '创建时间'
        ];
    }
}