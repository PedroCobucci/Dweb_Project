<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $idCategoria
 * @property string $nome_categoria
 *
 * @property JogoHasCategoria[] $jogoHasCategorias
 * @property Publicacoes[] $publicacoes
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_categoria'], 'required'],
            [['nome_categoria'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCategoria' => 'Id Categoria',
            'nome_categoria' => 'Nome Categoria',
        ];
    }

    /**
     * Gets query for [[JogoHasCategorias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogoHasCategorias()
    {
        return $this->hasMany(JogoHasCategoria::className(), ['Categoria_idCategoria' => 'idCategoria']);
    }

    /**
     * Gets query for [[Publicacoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPublicacoes()
    {
        return $this->hasMany(Publicacoes::className(), ['Categoria_idCategoria' => 'idCategoria']);
    }
}
