<?php

use yii\db\Migration;

/**
 * Class m220531_172933_Publicacao
 */
class m220531_172933_Publicacao extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Publicacoes',[
            'idPublicacao'=> $this->primaryKey(),
            'Publicacao' => $this->string()->notNull(),
            'imagem' => $this->string(),
            'Data_publicacao' => $this->date()->notNull(),
            'Utilizador_idUtilizador' => $this->integer()->notNull(),
            'Categoria_idCategoria' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'fk_idUtilizador',
            'Publicacoes',
            'Utilizador_idUtilizador',
            'Utilizador',
            'idUtilizador',
            'RESTRICT'
        );
        $this->addForeignKey(
            'fk_idCategoria',
            'Publicacoes',
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
        echo "m220531_172933_Publicacao cannot be reverted.\n";
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
        echo "m220531_172933_Publicacao cannot be reverted.\n";

        return false;
    }
    */
}
