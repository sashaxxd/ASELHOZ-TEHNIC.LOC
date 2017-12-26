<?php
/**
 * Created by PhpStorm.
 * User: alex_pc
 * Date: 10.12.2017
 * Time: 18:12
 */

namespace app\controllers;

use app\models\Compare;
use Yii;
use app\models\Product;


class CompareController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');

        $product = Product::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $compare = new Compare();
        $compare->addToCompare($product);
        if (!Yii::$app->request->isAjax) {
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('index', compact('session'));
    }


}