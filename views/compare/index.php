<?php
Debug($_SESSION);

?>
<?php if(!empty($_SESSION['compare'])): ?>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
    <?php foreach($_SESSION['compare'] as $id => $item):?>
        <th><h1><div id="compare-img" style="max-width: 175px;"><?= $item['name']?></div></h1>
            <br><img src="/images/426_2.jpg" id="Image2" alt=""></th>
    <?php endforeach?>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="spoiler_title" style="cursor: pointer;"><i class="fa fa-plus-square-o" aria-hidden="true" style="color: #DC143C;"></i>  Двигатель </td>

    </tr>


    <tr class="spoiler_block">
        <td>Мощность двигателя, л.с.</td>
    <?php foreach($_SESSION['compare'] as $id => $item):?>
        <td><?= $item['engine_power_hp']?></td>
    <?php endforeach?>
    </tr>

    <tr class="spoiler_block">
        <td>Мощность двигателя, л.с.</td>
        <td> 	45</td>
        <td> 	44</td>
        <td> 	89</td>
    </tr>

    <tr>
        <td class="spoiler_title2" style="cursor: pointer;"><i class="fa fa-plus-square-o" aria-hidden="true" style="color: #DC143C;"></i>  Гидросистема</td>

    </tr>


    <tr class="spoiler_block2">
        <td>Мощность двигателя, л.с.</td>
        <td> 	45</td>
        <td> 	44</td>
        <td> 	89</td>
    </tr>

    <tr class="spoiler_block2">
        <td>Мощность двигателя, л.с.</td>
        <td> 	45</td>
        <td> 	44</td>
        <td> 	89</td>
    </tr>


    <tr>
        <td class="spoiler_title3" style="cursor: pointer;"><i class="fa fa-plus-square-o" aria-hidden="true" style="color: #DC143C;"></i>  Фронтальный погрузчик</td>

    </tr>



    <tr class="spoiler_block3">
        <td>Мощность двигателя, л.с.</td>
        <td> 	45</td>
        <td> 	44</td>
        <td> 	89</td>
    </tr>

    <tr class="spoiler_block3">
        <td>Мощность двигателя, л.с.</td>
        <td> 	45</td>
        <td> 	44</td>
        <td> 	89</td>
    </tr>

    </tbody>
</table>
</div>

<?php endif;?>