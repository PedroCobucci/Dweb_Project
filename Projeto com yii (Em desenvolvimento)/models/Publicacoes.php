<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Publicacoes".
 *
 * @property int $idPublicacao
 * @property string $Publicacao
 * @property string|null $imagem
 * @property string $Data_publicacao
 * @property int $Utilizador_idUtilizador
 * @property int $Categoria_idCategoria
 */
class Publicacoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Publicacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['here_field_name'], 'filter', 'filter' => 'trim'],
            [['Publicacao', 'Data_publicacao', 'Utilizador_idUtilizador', 'Categoria_idCategoria'], 'required'],
            [['Data_publicacao'], 'safe'],
            [['Utilizador_idUtilizador', 'Categoria_idCategoria'], 'integer'],
            [['Publicacao', 'imagem'], 'string'],
            [['Categoria_idCategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['Categoria_idCategoria' => 'idCategoria']],
            [['Utilizador_idUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['Utilizador_idUtilizador' => 'idUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPublicacao' => 'Id Publicacao',
            'Publicacao' => 'Publicacao',
            'imagem' => 'Imagem',
            'Data_publicacao' => 'Data Publicacao',
            'Utilizador_idUtilizador' => 'Utilizador Id Utilizador',
            'Categoria_idCategoria' => 'Categoria Id Categoria',
        ];
    }
}
