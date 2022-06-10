<?php

use yii\db\Migration;

/**
 * Class m220606_212218_Jogo_has_Categoria
 */
class m220606_212218_Jogo_has_Categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Jogo_has_Categoria',[
            'Jogo_idJogo' => $this->integer()->notNull(),
            'Categoria_idCategoria' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'fk_idJogo',
            'Jogo_has_Categoria',
            'Jogo_idJogo',
            'Jogo',
            'idJogo',
            'RESTRICT'
        );
        $this->addForeignKey(
            'fk_idCategoria_2',
            'Jogo_has_Categoria',
            'Categoria_idCategoria',
            'Categoria',
            'idCategoria',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_173023_Jogo_has_Categoria cannot be reverted.\n";
        $this->dropTable('Publicacoes');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220606_212218_Jogo_has_Categoria cannot be reverted.\n";

        return false;
    }
    */
}
