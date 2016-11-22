<div id="openedProduct-img">
    <img src="<?php echo $good['img']; ?>">
</div>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?php echo $good['name']; ?>
    </h1>
		
			<div class="shopUnitPrice">
                <dt>Операционная система:</dt> <dd><?php echo $good['os']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Камера:</dt>		  <dd><?php echo $good['Camera']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Число SIM-карт:</dt>  <dd><?php echo $good['sim']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Процессор:</dt> <dd><?php echo $good['proc']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Размер:</dt>			  <dd><?php echo $good['size']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Экран:</dt>  <dd><?php echo $good['display']; ?></dd>
            </div>
			<div class="shopUnitPrice">
               <dt>Аккумулятор:</dt>  <dd><?php echo $good['battery']; ?></dd>
            </div>
			<div class="shopUnitPrice">
                <dt>Цена:</dt> <?php echo $good['price']; ?> р
            </div>
			
    <div id="openedProduct-desc">
        <?php echo $good['description']; ?>
    </div>
   
</div>
