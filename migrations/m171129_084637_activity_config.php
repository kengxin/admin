<?php

use yii\db\Migration;

/**
 * Class m171129_084637_activity_config
 */
class m171129_084637_activity_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('activity_config', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(32) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171129_084637_activity_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171129_084637_activity_config cannot be reverted.\n";

        return false;
    }
    */
}
