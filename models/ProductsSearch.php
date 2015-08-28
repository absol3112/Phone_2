<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['No', 'Cost'], 'integer'],
            [['ProductCode', 'ProductName', 'Image', 'Type', 'Company'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'No' => $this->No,
            'Cost' => $this->Cost,
        ]);

        $query->andFilterWhere(['like', 'ProductCode', $this->ProductCode])
            ->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Company', $this->Company]);

        return $dataProvider;
    }
}
