<?php

use app\models\Good;

/** @var $goods */

?>
<div class="goods-region">
    <? foreach ($goods as $good) {?>
    <div class="good-section">
        <div class="img-region"><img class="preview" alt=<?= $good['name'] ?> src=<?= '/img/'.$good['img'] ?>></div>
        <div class="good-information">
            <span class="name"><b><?= $good['name'] ?></b></span>
            <span class="composition">Состав: <?= $good['composition'] ?></span>
            <span class="price"><b>Цена: <?= $good['price'] ?> руб.</b></span>
        </div>
        <div class="good-buttons">
            <button class="product_button__add btn btn-success">Заказать<img class="icon" src="/img/shopping-cart.svg"></button>
            <button class="product_button__more btn btn-primary"">Подробнее</button>
        </div>
    </div>
    <? } ?>
</div>