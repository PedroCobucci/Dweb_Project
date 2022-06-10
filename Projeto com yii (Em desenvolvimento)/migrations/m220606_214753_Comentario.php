<?php

use yii\db\Migration;

/**
 * Class m220606_214753_Comentario
 */
class m220606_214753_Comentario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        {
            $this->createTable('Comentario',[
                'idComentario' => $this->primaryKey(),
                'Comentario' => $this->String()->notNull(),
                'Utilizador_idUtilizador' => $this->integer()->notNull(),
                'Publicacoes_idPublicacao' => $this->integer()->notNull(),
            ]);
            $this->addForeignKey(
                'fk_idUtilizador_Comentario',
                'Comentario',
                'Utilizador_idUtilizador',
                'Utilizador',
                'idUtilizador',
                'RESTRICT'
            );
            $this->addForeignKey(
                'fk_idPublicacao',//nome da chave estrangeira
                'Comentario',
                'Publicacoes_idPublicacao',
                'Publicacoes',
                'idPublicacao',
                'RESTRICT');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220606_214753_Comentario cannot be reverted.\n";
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
        echo "m220606_214753_Comentario cannot be reverted.\n";

        return false;
    }
    */
}
