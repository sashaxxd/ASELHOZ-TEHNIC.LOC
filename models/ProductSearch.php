<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{

    public $price2;
    public $subcat2;
    public $subcat3;
    public $subcat4;
    public $subcat5;
    public $size2;
    public $size3;
    public $size4;
    public $size5;
    public $size6;
    public $size7;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [[
                'name', 'content', 'article', 'keywords', 'description', 'sale', 'price', 'price2', 'subcat',
                'subcat2', 'subcat3', 'subcat4',  'subcat5', 'size', 'size2', 'size3', 'size4', 'size5', 'size6', 'size7'
            ], 'safe'],

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



        $query = Product::find()->where(['category_id' => Yii::$app->request->get('id')]);




        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'defaultPageSize' => 9,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }




        //Если поосле выделения чексбоксов сняли все загружаем все товары и фильтруем по цене
        if(
            Yii::$app->request->get('PodguznikiProductSearch')['subcat'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat2'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat3'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat4'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat5'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size2'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size3'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size4'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size5'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size6'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size7'] == 0

        ){
            $query
            ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
            $query = PodguznikiProduct::find()->where(['category_id' => Yii::$app->request->get('id')]);
        }





//Если все размеры равны нулю ищем по виду
        if(Yii::$app->request->get('PodguznikiProductSearch')['size'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size2'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size3'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size4'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size5'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size6'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['size7'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])

                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere(['subcat' => $this->subcat,



                ])

                ->orFilterWhere(['subcat' => $this->subcat2,


                ])
                ->orFilterWhere(['subcat' => $this->subcat3,

                ])
                ->orFilterWhere(['subcat' => $this->subcat4,

                ])
                ->orFilterWhere(['subcat' => $this->subcat5,

                ])



                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
        }

//Если все виды равны нулю ищем по размеру
        elseif(Yii::$app->request->get('PodguznikiProductSearch')['subcat'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat2'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat3'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat4'] == 0
            && Yii::$app->request->get('PodguznikiProductSearch')['subcat5'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])
                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere([

                    'size' =>[
                        $this->size,
                        $this->size2,
                        $this->size3,
                        $this->size4,
                        $this->size5,
                        $this->size6,
                        $this->size7,

                    ]

                ])





                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


        }



//Если пусты гет запросы subcat2 subcat3 и subcat4
        elseif(
            Yii::$app->request->get('PodguznikiProductSearch')['subcat2'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat3'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat4'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])
//                ->andFilterWhere(['like', 'img', $this->img])
                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere(['subcat' => $this->subcat,

                    'size' =>[
                        $this->size,
                        $this->size2,
                        $this->size3,
                        $this->size4,
                        $this->size5,
                        $this->size6,
                        $this->size7,

                    ]

                ])




                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


        }




        //Если пусты гет запросы subcat subcat3 и subcat4
        elseif(
            Yii::$app->request->get('PodguznikiProductSearch')['subcat'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat3'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat4'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])
//                ->andFilterWhere(['like', 'img', $this->img])
                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere(['subcat' => $this->subcat2,

                    'size' =>[
                        $this->size,
                        $this->size2,
                        $this->size3,
                        $this->size4,
                        $this->size5,
                        $this->size6,
                        $this->size7,

                    ]

                ])




                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


        }



        //Если пусты гет запросы subcat subcat2 subcat4
        elseif(
            Yii::$app->request->get('PodguznikiProductSearch')['subcat'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat2'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat4'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])
//                ->andFilterWhere(['like', 'img', $this->img])
                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere(['subcat' => $this->subcat3,

                    'size' =>[
                        $this->size,
                        $this->size2,
                        $this->size3,
                        $this->size4,
                        $this->size5,
                        $this->size6,
                        $this->size7,

                    ]

                ])




                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


        }




        //Если пусты гет запросы subcat subcat2 и subcat3
        elseif(
            Yii::$app->request->get('PodguznikiProductSearch')['subcat'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat2'] == 0
            &&  Yii::$app->request->get('PodguznikiProductSearch')['subcat3'] == 0
        ){

            $query->andFilterWhere(['like', 'name', $this->name])

                ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'article', $this->article])
                ->andFilterWhere(['like', 'keywords', $this->keywords])
                ->andFilterWhere(['like', 'description', $this->description])
//                ->andFilterWhere(['like', 'img', $this->img])
                ->andFilterWhere(['like', 'sale', $this->sale])

                ->andFilterWhere(['subcat' => $this->subcat4,

                    'size' =>[
                        $this->size,
                        $this->size2,
                        $this->size3,
                        $this->size4,
                        $this->size5,
                        $this->size6,
                        $this->size7,

                    ]

                ])




                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


        }



//Ищем по виду и размеру
else{

        $query->andFilterWhere(['like', 'name', $this->name])

            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'article', $this->article])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'sale', $this->sale])

            ->andFilterWhere(['subcat' => $this->subcat,

                'size' =>[
                    $this->size,
                    $this->size2,
                    $this->size3,
                    $this->size4,
                    $this->size5,
                    $this->size6,
                    $this->size7,

                ]

            ])

            ->orFilterWhere(['subcat' => $this->subcat2,

                'size' =>[
                    $this->size,
                    $this->size2,
                    $this->size3,
                    $this->size4,
                    $this->size5,
                    $this->size6,
                    $this->size7,

                ]

            ])
            ->orFilterWhere(['subcat' => $this->subcat3,

                'size' =>[
                    $this->size,
                    $this->size2,
                    $this->size3,
                    $this->size4,
                    $this->size5,
                    $this->size6,
                    $this->size7,

                ]

            ])
            ->orFilterWhere(['subcat' => $this->subcat4,

                'size' =>[
                    $this->size,
                    $this->size2,
                    $this->size3,
                    $this->size4,
                    $this->size5,
                    $this->size6,
                    $this->size7,

                ]

            ])

            ->orFilterWhere(['subcat' => $this->subcat5,

                'size' =>[
                    $this->size,
                    $this->size2,
                    $this->size3,
                    $this->size4,
                    $this->size5,
                    $this->size6,
                    $this->size7,

                ]

            ])



            ->andFilterWhere(['between', 'price', $this->price, $this->price2]);


    }



        return $dataProvider;
    }
}
