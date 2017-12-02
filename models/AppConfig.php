<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class AppConfig extends ActiveRecord
{

    const TYPE_ENTRANCE = 0;    // 入口
    const TYPE_JUMP     = 1;    // 跳转
    const TYPE_LANDING  = 2;    // 落地

    const STATUS_SUCCESS = 0;   // 正常
    const STATUS_ERROR   = 1;   // 错误

    public static function tableName()
    {
        return 'app_config';
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
            [['domain', 'type', 'pid'], 'required'],
            [['pid', 'status', 'type', 'created_at', 'closed_at'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'domain' => '域名',
            'pid' => '所属公众号',
            'activity_id' => '所属活动',
            'status' => '状态',
            'type' => '类型',
            'created_at' => '创建时间',
            'closed_at' => '封禁时间'
        ];
    }

    public function getPublicConfig()
    {
        return $this->hasOne(PublicConfig::className(), ['id' => 'pid']);
    }

    public static function getTypeList($type = null)
    {
        $list = [
            self::TYPE_ENTRANCE => '入口',
            self::TYPE_JUMP     => '跳转',
            self::TYPE_LANDING  => '落地'
        ];

        if (!empty($type)) {
            return $list[$type];
        }

        return $list;
    }

    public static function getStatusList($status = null)
    {
        $list = [
            self::STATUS_SUCCESS => '正常',
            self::STATUS_ERROR   => '异常'
        ];

        if (!empty($status)) {
            return $list[$status];
        }

        return $list;
    }

    public function getConfigByDomain($domain)
    {
        $model = $this->find()
            ->leftJoin('publicConfig')
            ->where(['domain' => $domain])
            ->one();

        if (!empty($model) && isset($model->publicConfig)) {
            return $model;
        }

        return false;
    }
}