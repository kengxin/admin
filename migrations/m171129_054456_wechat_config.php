<?php

use yii\db\Migration;

/**
 * Class m171129_054456_wechat_config
 */
class m171129_054456_wechat_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('app_config', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'status' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'type' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'domain' => 'VARCHAR(128) NOT NULL DEFAULT ""',
            'pid' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0',
            'closed_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171129_054456_wechat_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171129_054456_wechat_config cannot be reverted.\n";

        return false;
    }
    */
}
