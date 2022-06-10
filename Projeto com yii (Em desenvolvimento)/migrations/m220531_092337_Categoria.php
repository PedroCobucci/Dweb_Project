<?php

use yii\db\Migration;

/**
 * Class m220531_092337_Categoria
 */
class m220531_092337_Categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Categoria',[
            'idCategoria'=> $this->primaryKey(),
            'nome_categoria'=>$this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_092337_Categoria cannot be reverted.\n";
        $this->dropTable('Categoria');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220531_092337_Categoria cannot be reverted.\n";

        return false;
    }
    */
}
