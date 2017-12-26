

                            <?php $i = 0; foreach ($dataProvider->getModels() as $product) : ?>                                <?php  $i++; ?>
                                <?php $mainImg = $product->getImage(); ?>
                            <div class="col-1">
                                <div id="pampers_Image9">
                                    <?php if($product->sale):  ?>
                                        <div class="podnew" style="position: absolute; width: 66px; height: 24px; right: 30px; top: 20px;">
                                            <?= Html::img("@web/images/sale.png", ['alt' => 'Новинка', 'class'=>'sale'])  ?></div>
                                    <?php endif;  ?>

                                    <a href="<?= \yii\helpers\Url::to(['podguzniki-product/view', 'id' => $product->id])?>">
                                        <?= Html::img($mainImg->getUrl(), ['alt' => $product->name, 'id' => "Image9"])  ?>
                                        </a>
                                </div>
                                <div id="pampers_Text18">
                                    <a href="<?= \yii\helpers\Url::to(['podguzniki-product/view', 'id' => $product->id])?>">
                                    <span id="pampers_uid17"><?= $product->name ?></span>
                                        </a>
                                </div>
                                <hr id="Line25">
                                <div id="pampers_Text19">
                                    <span id="pampers_uid18"><?= $product->price ?> руб.</span>
                                </div>
                                <hr id="Line26">
                                <hr id="Line27">
                                <div id="pampers_Shape4">
                                    <a href="" id="FontAwesomeIcon6" data-id="<?= $product->id?>" class="addtocartone"><img class="hover" src="/images/img0004_hover.png" alt="" id="pampers_uid19"><span><img src="/images/img0004.png" id="Shape4" alt=""></span></a>
                                </div>
                                <hr id="Line28">
                            </div>														<?php    if ($i % 3 == 0): ?>                           <hr id="Line28">                          <?php endif;   ?>							                          
                            <?php endforeach; ?>


                            <hr class="Line_m">


                            <?php


                            echo \yii\widgets\LinkPager::widget([
                                'pagination'=>$dataProvider->pagination,

                            ]);

                            ?>

                            <?php if(!$dataProvider->getModels()): ?>
                                <div id="pampers_Text19">
                                    <span id="pampers_uid18"><strong>Ничего не найдено</strong></span>
                                </div>

                            <?php endif; ?>

