<?php

use yii\db\Migration;

/**
 * Class m171129_070451_public_config
 */
class m171129_070451_public_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('public_config', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'app_id' => 'VARCHAR(18) NOT NULL DEFAULT ""',
            'app_secret' => 'VARCHAR(32) NOT NULL DEFAULT ""',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171129_070451_public_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171129_070451_public_config cannot be reverted.\n";

        return false;
    }
    */
}
