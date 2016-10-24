<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="#">
                Главная
            </a>
            <a href="#">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Iphone',
            'desc' => 'Описание для Iphone',
            'img' => '/images/goods/iphone.jpg',
            'price' => '2000 $'
        ],
        [
            'id' => 2,
            'name' => 'HTC',
            'desc' => 'Описание для HTC',
            'img' => '/images/goods/htc.jpg',
            'price' => '1200 $'
        ],
        [
            'id' => 3,
            'name' => 'Samsung',
            'desc' => 'Описание для Samsung',
            'img' => '/images/goods/samsung.jpg',
            'price' => '1400 $'
        ],
    ];

    foreach ($goods as $key => $good) {
        echo 'Ключ массива: ' . $key . '<br>';
        echo $good['id'] . '<br>';
        echo $good['name'] . '<br>';
        echo $good['desc'] . '<br>';
        echo $good['img'] . '<br>';
        echo $good['price'] . '<br>';

        echo '<hr>';
    }

    ?>

    <!--<div id="promo">
        <h1 id="promoText">
            Здесь будет рекламный заголовок
        </h1>
    </div>

    <div id="mainTextWrap">
        <div id="mainText">
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
            Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.
        </div>
    </div>

    <div style="width: 1100px; margin: 0 auto">
        <hr>
        <h2>
            Это будет отдельная страница с открытым магзином
        </h2>

        <div style="width: 1100px; margin: 0 auto">
            <h1>
                Каталог товаров
            </h1>
            <div>
                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>

                <div class="shopUnit">
                    <img src="http://placehold.it/308x231" />

                    <div class="shopUnitName">
                        Название продукта
                    </div>
                    <div class="shopUnitShortDesc">
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                        Здесь будет немного текста описывающего продукт.
                    </div>
                    <div class="shopUnitPrice">
                        Цена: 0000 $
                    </div>
                    <a href="#" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px; float: left;">
            <hr>
            <h2>
                Это будет отдельная страница с открытым товаром
            </h2>

            <div id="openedProduct-img">
                <img src="http://placehold.it/342x260">
            </div>
            <div id="openedProduct-content">
                <h1 id="openedProduct-name">
                    Название продукта
                </h1>
                <div id="openedProduct-desc">
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                    Здесь будет описание продукта. Здесь будет описание продукта. Здесь будет описание продукта.
                </div>
                <div id="openedProduct-price">
                    Цена: 0000 $
                </div>
            </div>
        </div>


    </div>-->
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                donntu.edu
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                +38 071 000 00 01
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Донецк, пр-т Ленина, д. 15, офис 205
            </div>
        </div>

        <div id="footerNav">
            <a href="#">Главная</a>
            <a href="#">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brand</div>
    </div>
</footer>

</body>
</html>
