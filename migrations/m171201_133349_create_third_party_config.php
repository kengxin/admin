<?php

use yii\db\Migration;

/**
 * Class m171201_133349_create_third_party_config
 */
class m171201_133349_create_third_party_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('third_party_config', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'app_id' => 'VARCHAR(128) NOT NULL DEFAULT ""',
            'app_secret' => 'VARCHAR(128) NOT NULL DEFAULT ""',
            'encoding_aes_key' => "VARCHAR(128) NOT NULL DEFAULT ''",
            'token' => "VARCHAR(128) NOT NULL DEFAULT ''",
            'auth_code' => "VARCHAR(128) NOT NULL DEFAULT ''",
            'expires_at' => "INT(11) NOT NULL DEFAULT 0",
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171201_133349_create_third_party_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171201_133349_create_third_party_config cannot be reverted.\n";

        return false;
    }
    */
}
