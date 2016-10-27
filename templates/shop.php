<h1>
    Каталог товаров
</h1>

<div>
    <?php foreach ($goods as $good): ?>
        <div class="shopUnit">
            <img src="<?php echo $good['img']; ?>"/>

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                ОC: <?php echo $good['os']; ?>
            </div>
			<div class="shopUnitShortDesc">
               Камера:			  <?php echo $good['Camera']; ?>
            </div>
			<div class="shopUnitShortDesc">
               Число SIM-карт:  <?php echo $good['sim']; ?>
            </div>
            <div class="shopUnitPrice">
                Цена: <?php echo $good['price']; ?> р
            </div>
            <a href="index.php?page=product&id=<?php echo $good['id']; ?>" class="shopUnitMore">
                Подробнее
            </a>
        </div>
    <?php endforeach; ?>
</div>
