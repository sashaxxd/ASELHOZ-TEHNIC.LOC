<?php


namespace app\models;


use yii\db\ActiveRecord;
//use zxbodya\yii2\galleryManager\GalleryBehavior;
//use Imagine\Image\Box;
use Yii;

class Product extends ActiveRecord
{
//    public function behaviors()
//    {
//        return [
//            'image' => [
//                'class' => 'rico\yii2images\behaviors\ImageBehave',
//            ],
//            /**
//             * Загрузка галереи
//             */
//            'galleryBehavior' => [
//                'class' => GalleryBehavior::className(),
//                'type' => 'gallery',
//                'extension' => 'jpg',
//                'directory' => Yii::getAlias('@webroot') . '/uploads',
//                'url' => Yii::getAlias('@web') . '/uploads',
//                'versions' => [
//                    'small' => function ($img) {
//                        /** @var ImageInterface $img */
//                        return $img
//                            ->copy()
//                            ->thumbnail(new Box(200, 200));
//                    },
//                    'medium' => function ($img) {
//                        /** @var ImageInterface $img */
//                        $dstSize = $img->getSize();
//                        $maxWidth = 800;
//                        if ($dstSize->getWidth() > $maxWidth) {
//                            $dstSize = $dstSize->widen($maxWidth);
//                        }
//                        return $img
//                            ->copy()
//                            ->resize($dstSize);
//                    },
//                ]
//            ]
//        ];
//    }

    public  static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}