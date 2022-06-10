<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Departamento".
 *
 * @property int $idDepartamento
 * @property string $Cargo
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Cargo'], 'required'],
            [['Cargo'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDepartamento' => 'Id Departamento',
            'Cargo' => 'Cargo',
        ];
    }
}
