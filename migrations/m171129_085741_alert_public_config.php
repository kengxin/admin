<?php

use yii\db\Migration;

/**
 * Class m171129_085741_alert_public_config
 */
class m171129_085741_alert_public_config extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('public_config', 'activity_id', 'INT(11) NOT NULL DEFAULT 0');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171129_085741_alert_public_config cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171129_085741_alert_public_config cannot be reverted.\n";

        return false;
    }
    */
}
