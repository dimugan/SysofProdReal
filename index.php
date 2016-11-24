<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/pgwslider.min.js"></script>
	<link rel="stylesheet" href="css/pgwslider.min.css">
	<link rel="stylesheet" href="css/demo.css">
	
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="index.php">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
	 require_once("database.php");
	 require_once("phones.php");
	 $link = db_connect();
    $goods = phones_all($link);

    $page = $_GET['page'];
	
    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
		$tmp=0;
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
				$tmp=1;
                break;
            }
        }
		if ($tmp!=1)  require('templates/main.php');
        require('templates/openedProduct.php');
    }
?>

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
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
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