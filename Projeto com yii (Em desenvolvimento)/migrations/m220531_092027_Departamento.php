<?php

use yii\db\Migration;

/**
 * Class m220531_092027_Departamento
 */
class m220531_092027_Departamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Departamento',[
            'idDepartamento'=> $this->primaryKey(),
            'Cargo' => $this->char(30)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_092027_Departamento cannot be reverted.\n";
        $this->dropTable('Departamento');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220531_092027_Departamento cannot be reverted.\n";

        return false;
    }
    */
}
