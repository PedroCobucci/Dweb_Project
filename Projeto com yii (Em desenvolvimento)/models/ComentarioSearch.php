<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comentario;

/**
 * ComentarioSearch represents the model behind the search form of `app\models\Comentario`.
 */
class ComentarioSearch extends Comentario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idComentario', 'Utilizador_idUtilizador', 'Publicacoes_idPublicacao'], 'integer'],
            [['Comentario'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comentario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idComentario' => $this->idComentario,
            'Utilizador_idUtilizador' => $this->Utilizador_idUtilizador,
            'Publicacoes_idPublicacao' => $this->Publicacoes_idPublicacao,
        ]);

        $query->andFilterWhere(['like', 'Comentario', $this->Comentario]);

        return $dataProvider;
    }
}
