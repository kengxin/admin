<?php

use yii\db\Migration;

/**
 * Class m171202_025303_create_video
 */
class m171202_025303_create_video extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'vid' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'pause_sec' => 'INT(11) NOT NULL DEFAULT 0',
            'count' => 'TEXT',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171202_025303_create_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171202_025303_create_video cannot be reverted.\n";

        return false;
    }
    */
}
