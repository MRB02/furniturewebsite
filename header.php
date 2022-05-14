<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header for all</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<?php 
echo '
<div class="top">
<span class="material-icons">
        delivery_dining
        </span>
<p>Доставка и сборка по Харькову бесплатно!</p>
</div>
<div class="middle">
<div class="middle-top">
    <img src="./image/Group.png" alt="">
    <span class="caterogy">
    <span class="material-icons" style="color:white;" >
        apps
    </span>
    <p>Каталог</p>
    </span>
    <span class="search-input">
    <input type="search" placeholder="Искать Товар">
    <span class="material-icons" style="color:#d1d1d1;" id="search">
        search
    </span>
    </span>
    <span class="number" style="display: flex;max-height:27px; height:100">
    <p>+998-93-778-46-56</p>
    <span class="material-icons">
        expand_more
    </span>
    </span>
    <div class="icons">
        <span class="material-icons">
        favorite_border
        </span>
        <span class="material-icons">
            shopping_cart
            </span>
        <span class="material-icons">
                person
        </span>
    </div>
</div>

</div>
<div class="middle-bottom">
<nav>
    <ul class="middle-bottom_list">
        <li>
            <a href="#" class="middle-bottom_link active">
                Харьков мебель
            </a>
        </li>
        <li>
            <a href="#" class="middle-bottom_link">
                Про нас
            </a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">
                Мебель под заказ
            </a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">
                Шкафы купе
            </a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">
                Доставка і оплата
            </a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">Контакты</a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">Письмо директору</a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">Бренды</a>
        </li>
        <li>
            <a href="" class="middle-bottom_link">Дизайн интерьера</a>
        </li>
    </ul>
</nav>
</div>

'

?>
</body>

</html>