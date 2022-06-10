<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jogo;

/**
 * JogoSearch represents the model behind the search form of `app\models\Jogo`.
 */
class JogoSearch extends Jogo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idJogo'], 'integer'],
            [['Dispositivo', 'Nome_jogo'], 'safe'],
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
        $query = Jogo::find();

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
            'idJogo' => $this->idJogo,
        ]);

        $query->andFilterWhere(['like', 'Dispositivo', $this->Dispositivo])
            ->andFilterWhere(['like', 'Nome_jogo', $this->Nome_jogo]);

        return $dataProvider;
    }
}
