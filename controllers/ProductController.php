<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.07.2017
 * Time: 17:45
 */

namespace app\controllers;


use app\models\Product;
use zxbodya\yii2\galleryManager\GalleryManagerAction;

class ProductController extends AppController
{

    public function actions()
    {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'gallery' => Product::className()
                ]
            ],
        ];
    }

    public function actionView($id){


        $product = Product::findOne($id);
        if(empty($product)){
            throw new \yii\web\HttpException(404, 'Такого товара не существует');
        }


        $this->setMeta('F-ELECTRONIC | ' . $product->name, $product->keywords, $product->description);
        /**
         * Разбиваем тайтл на слова с помощью регулярных выражений
         */
        $string = $product->name;
        $pattern="~(\pL+)~u";
        preg_match_all($pattern, $string, $matches);
        $poh = $matches[1][0];



        $pohochie = Product::find()->select(['id', 'name'])->where(['like', 'name', $poh])->limit(3)->all();
         return $this->render('view',[
             'product' => $product,
             'pohochie' => $pohochie,
         ]);
    }

}