<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 22.07.2017
 * Time: 16:46
 */

namespace app\models;


use yii\db\ActiveRecord;

class Compare extends ActiveRecord
{




//    public function behaviors()
//    {
//        return [
//            'image' => [
//                'class' => 'rico\yii2images\behaviors\ImageBehave',
//            ]
//        ];
//    }
    public function addToCompare($product){

//        $mainImg = $product->getImage(); //Изображение


            $_SESSION['compare'][$product->id] =[

                'name' => $product->name,
                'engine_power_hp' => $product->engine_power_hp,

//                'img' => $mainImg->getUrl(),
            ];



    }



}