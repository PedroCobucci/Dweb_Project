<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Publicacoes;

/**
 * PublicacoesSearch represents the model behind the search form of `app\models\Publicacoes`.
 */
class PublicacoesSearch extends Publicacoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPublicacao', 'Utilizador_idUtilizador', 'Categoria_idCategoria'], 'integer'],
            [['Publicacao', 'imagem', 'Data_publicacao'], 'safe'],
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
        $query = Publicacoes::find();

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
            'idPublicacao' => $this->idPublicacao,
            'Data_publicacao' => $this->Data_publicacao,
            'Utilizador_idUtilizador' => $this->Utilizador_idUtilizador,
            'Categoria_idCategoria' => $this->Categoria_idCategoria,
        ]);

        $query->andFilterWhere(['like', 'Publicacao', $this->Publicacao])
            ->andFilterWhere(['like', 'imagem', $this->imagem]);

        return $dataProvider;
    }
}
