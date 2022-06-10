<?php

use yii\db\Migration;

/**
 * Class m220606_212033_Jogo
 */
class m220606_212033_Jogo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Jogo',[
            'idJogo'=> $this->primaryKey(),
            'Dispositivo'=>$this->string()->notNull(),
            'Nome_jogo' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_092405_Jogo cannot be reverted.\n";
        $this->dropTable('Jogo');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220606_212033_Jogo cannot be reverted.\n";

        return false;
    }
    */
}
