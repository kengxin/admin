<?php

use yii\db\Migration;

/**
 * Class m171130_083223_alter_activity_config
 */
class m171130_083223_alter_activity_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('activity_config', 'count', 'TEXT');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171130_083223_alter_activity_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171130_083223_alter_activity_config cannot be reverted.\n";

        return false;
    }
    */
}
