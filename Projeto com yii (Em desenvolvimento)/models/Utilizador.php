<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Utilizador".
 *
 * @property int $idUtilizador
 * @property string $Email
 * @property string $Sexo
 * @property int|null $Password
 * @property string|null $Nome
 * @property int|null $Idade
 * @property int|null $Departamento_idDepartamento
 */
class Utilizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Utilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Email', 'Sexo'], 'required'],
            [['Password', 'Idade', 'Departamento_idDepartamento'], 'integer'],
            [['Email', 'Sexo', 'Nome'], 'string', 'max' => 255],
            [['Departamento_idDepartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['Departamento_idDepartamento' => 'idDepartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUtilizador' => 'Id Utilizador',
            'Email' => 'Email',
            'Sexo' => 'Sexo',
            'Password' => 'Password',
            'Nome' => 'Nome',
            'Idade' => 'Idade',
            'Departamento_idDepartamento' => 'Departamento Id Departamento',
        ];
    }
}
