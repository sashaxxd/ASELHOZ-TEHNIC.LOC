
<div id="wb_LayoutGrid11">
    <div id="LayoutGrid11">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">
                <div id="wb_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_zag_filtr">
                                    <div id="zag_filtr">
                                        <div class="row">
                                            <div class="col-1">
                                                <div id="wb_Text_filter">
                                                    <span id="wb_uid3"><strong>ФИЛЬТРЫ</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <?php  $i = -1; foreach($products as $product):?>
                    <?php $i++; ?>
                <div id="wb_LayoutGrid10">
                    <div id="LayoutGrid10">
                        <div class="row">

                            <div class="col-1">

                                <div id="wb_Image2">
                                    <img src="/images/426_2.jpg" id="Image2" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="wb_Text6">
                                    <h1><?= $product->name ?></h1>
                                </div>
                                <div id="wb_Text5">
                                    <span id="wb_uid4"><?= $product->content ?></span>
                                </div>
                                <div id="wb_Text3">
                                    <span id="wb_uid5"><strong>Cравнить</strong></span>
                                </div>
                                <div id="check_filter">
                                    <input type="checkbox" id="Checkbox1" class="ShowOrHide" data-id="<?= $product->id?>" name="check1" value="on">
                                </div>
                                <div id="wb_Text_sravnenie"  >
                                    <span id="wb_uid6"  data-id="div<?=$i?>" style="display: none"><strong><a href="/compare/index">К сравнению</a></strong></span>
                                    <span  class="wb_uid6" id="div<?=$i?>" style="display: none;" ><strong><a href="/compare/index">К сравнению</a></strong></span>
                                </div>
                                <hr id="Line1">
                                <input type="submit" id="Button1" name="" value="Смотреть">
                            </div>

                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGrid13">
                    <div id="LayoutGrid13">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>