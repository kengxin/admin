<?php
namespace app\models;

use yii\db\ActiveRecord;

class ThirdPartyConfig extends ActiveRecord
{
    public static function tableName()
    {
        return 'third_party_config';
    }

    public function rules()
    {
        return [
            [['name', 'app_id', 'app_secret', 'token', 'encoding_aes_key'], 'required'],
            [['expires_at', 'created_at'], 'integer'],
            [['name', 'app_id', 'app_secret', 'token', 'encoding_aes_key', 'auth_code'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'app_id' => 'APPId',
            'app_secret' => 'AppSecret',
            'token' => 'TOKEN',
            'auth_code' => '授权码',
            'encoding_aes_key' => '加密KEY',
            'expires_at' => '有效期',
            'created_at' => '创建时间'
        ];
    }
}