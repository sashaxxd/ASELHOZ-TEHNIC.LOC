<?php


namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\Pagination;

use Yii;

use app\models\ProductSearch;

class CategoryController extends AppController
{

    public function actionIndex($id)
    {

        $this->setMeta('Сельхозтехника');
        $category = Category::find()->where(['id' => $id])->one();
        $query = Product::find()
            ->where(['category_id' => $id])
            ->with('category')
            ->orderBy([
                'id' => SORT_DESC,
            ]);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false ]);

//        $products = Product::find()->where(['type' => 'Подгузники для детей'])->all();
        $products  = $query->offset($pages->offset)->limit($pages->limit)->all();


        return $this->render('index', [

            'products' => $products,
            'pages' => $pages,
            'category' =>  $category,
        ]);
    }


    public function actionCategory($alias, $id)
    {


        if(isset(Yii::$app->request->get()['_pjax'])){
            return $this->render('ajax-cart',
                [


                ]);
        }



        if(Yii::$app->request->isAjax) {




            $this->layout = false;
            $searchModel = new ProductSearch();

            $searchModel->price2 = Yii::$app->request->get()['price2'];

            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            $model = $dataProvider->sort->attributes;





            return $this->render('ajax',
                [
                    'model' => $model,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,

                ]);
        }



        $category = Category::find()->where(['alias' => $alias, 'id' => $id])->one();
        if(empty($category)){
            throw new \yii\web\HttpException(404, 'Такая категория не существует');
        }

        $this->setMeta('Магазин Подгузники в Гродно | ' . $category->name, $category->keywords, $category->description);

        $searchModel = new ProductSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);



        $model = $dataProvider->sort->attributes;

        return $this->render('category',
            [
                'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'category' =>  $category,

            ]);
    }


}