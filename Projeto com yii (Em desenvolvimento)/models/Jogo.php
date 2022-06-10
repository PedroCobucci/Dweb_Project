<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Jogo".
 *
 * @property int $idJogo
 * @property string $Dispositivo
 * @property string $Nome_jogo
 */
class Jogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Jogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Dispositivo', 'Nome_jogo'], 'required'],
            [['Dispositivo', 'Nome_jogo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idJogo' => 'Id Jogo',
            'Dispositivo' => 'Dispositivo',
            'Nome_jogo' => 'Nome Jogo',
        ];
    }
}
