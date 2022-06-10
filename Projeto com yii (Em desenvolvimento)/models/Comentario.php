<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Comentario".
 *
 * @property int $idComentario
 * @property string $Comentario
 * @property int $Utilizador_idUtilizador
 * @property int $Publicacoes_idPublicacao
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Comentario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idComentario', 'Comentario', 'Utilizador_idUtilizador', 'Publicacoes_idPublicacao'], 'required'],
            [['idComentario', 'Utilizador_idUtilizador', 'Publicacoes_idPublicacao'], 'integer'],
            [['Comentario'], 'string', 'max' => 255],
            [['Publicacoes_idPublicacao'], 'exist', 'skipOnError' => true, 'targetClass' => Publicacoes::className(), 'targetAttribute' => ['Publicacoes_idPublicacao' => 'idPublicacao']],
            [['Utilizador_idUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['Utilizador_idUtilizador' => 'idUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idComentario' => 'Id Comentario',
            'Comentario' => 'Comentario',
            'Utilizador_idUtilizador' => 'Utilizador Id Utilizador',
            'Publicacoes_idPublicacao' => 'Publicacoes Id Publicacao',
        ];
    }
}
