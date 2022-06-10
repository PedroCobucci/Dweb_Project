<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Jogo_has_Categoria".
 *
 * @property int $Jogo_idJogo
 * @property int $Categoria_idCategoria
 */
class Jogo_has_Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Jogo_has_Categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jogo_idJogo', 'Categoria_idCategoria'], 'required'],
            [['Jogo_idJogo', 'Categoria_idCategoria'], 'integer'],
            [['Categoria_idCategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['Categoria_idCategoria' => 'idCategoria']],
            [['Jogo_idJogo'], 'exist', 'skipOnError' => true, 'targetClass' => Jogo::className(), 'targetAttribute' => ['Jogo_idJogo' => 'idJogo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Jogo_idJogo' => 'Jogo Id Jogo',
            'Categoria_idCategoria' => 'Categoria Id Categoria',
        ];
    }
}
