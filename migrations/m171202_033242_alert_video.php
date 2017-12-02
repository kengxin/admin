<?php

use yii\db\Migration;

/**
 * Class m171202_033242_alert_video
 */
class m171202_033242_alert_video extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('video', 'suffix', 'VARCHAR(255) NOT NULL DEFAULT ""');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171202_033242_alert_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171202_033242_alert_video cannot be reverted.\n";

        return false;
    }
    */
}
