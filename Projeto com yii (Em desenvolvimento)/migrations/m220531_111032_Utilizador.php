<?php

use yii\db\Migration;

/**
 * Class m220531_111032_Utilizador
 */
class m220531_111032_Utilizador extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Utilizador',[
            'idUtilizador'=> $this->primaryKey(),
            'Email' => $this->string()->notNull(),
            'Sexo'=>$this->string()->notNull(),
            'Password'=>$this->integer(),
            'Nome'=>$this->string(),
            'Idade'=>$this->integer(),
            'Departamento_idDepartamento' => $this->integer(),
        ]);
        $this->addForeignKey(
            'fk_idDepartamento',//nome da chave estrangeira
            'Utilizador',
            'Departamento_idDepartamento',
            'Departamento',
            'idDepartamento',
            'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_111032_Utilizador cannot be reverted.\n";
        $this->dropTable('Utilizador');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220531_111032_Utilizador cannot be reverted.\n";

        return false;
    }
    */
}
