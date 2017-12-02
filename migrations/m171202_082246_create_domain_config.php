<?php

use yii\db\Migration;

/**
 * Class m171202_082246_create_domain_config
 */
class m171202_082246_create_domain_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('domain_config', [
            'id' => $this->primaryKey(),
            'domain' => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'status' => 'INT(11) NOT NULL DEFAULT 0',
            'closed_at' => 'INT(11) NOT NULL DEFAULT 0',
            'created_at' => 'INT(11) NOT NULL DEFAULT 0'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171202_082246_create_domain_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171202_082246_create_domain_config cannot be reverted.\n";

        return false;
    }
    */
}
