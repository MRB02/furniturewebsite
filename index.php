<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <header>
    <?php echo include './header.php' ;?>
    </header>

    <section class="home">

        <span class="home-top">
            <p>Главная</p>
            <span class="material-icons" style="padding: 0 15px;">
                arrow_right_alt
                </span>
        <a href="">Дизайн Интерьера</a>
        </span>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./image/home.png" />
                </div>
                <div class="swiper-slide">
                    <img src="./image/home2.png" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

            <div class="home-main">
                <div class="main-title">
                    <h1>Дизайн <span style="color: #72BF44;">Интерьера</span></h1>
                </div>
                <div class="main-text">
                    <h3>Трехмерная 3D-визуализация интерьера БЕСПЛАТНО!</h3>
                    <p>При заказе любого дизайн-проекта интерьера до 15 июня, 3D-визуализация всех помещений абсолютно бесплатна и уже включена в стандартный проект.</p>
                </div>
                <div class="main-btn">
                    <a href="#" class="btn1">Смотреть проекты</a>
                    <a href="#" class="btn2">Оформить заявку</a>
                </div>
            </div>
        </div>




    </section>



<footer>
    <?php echo include './footer.php';?>
</footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>


    <script src="./script.js"></script>
</body>

</html>