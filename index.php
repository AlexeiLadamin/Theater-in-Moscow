<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Большой театр в Москве</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href=img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <!-- Header start -->
    <header class="header">
        <div class="wrapper">      
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo-link"> 
                        <img src="./img/svg/bolshoi-logo-main 1.svg" alt="Большой театр в Москве" class="header__logo-pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="#главная" class="header__link js-scroll">ГЛАВНАЯ</a>
                        </li>
                        <li class="header__item">
                            <a href="#о театре" class="header__link js-scroll">О ТЕАТРЕ</a>
                        </li>
                        <li class="header__item">
                            <a href="#наши постановки" class="header__link js-scroll">НАШИ ПОСТАНОВКИ</a>
                        </li>
                        <li class="header__item">
                            <a href="#партнеры театра" class="header__link js-scroll">ПАРТНЕРЫ ТЕАТРА</a>
                        </li>            
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <main class="main">

        <!-- Intro start -->
        <section class="intro" id="главная">
            <div class="wrapper">
                <h1 class="intro__title">
                    БОЛЬШОЙ ТЕАТР
                </h1>
                <p class="intro__subtitle">
                    28 марта (17-го по ст. стилю) 1776 г. Екатерина II подписала прокурору князю Петру Урусову «привилегию» на содержание спектаклей, маскарадов, балов и прочих увеселений сроком на десять лет. Эта дата считается днем основания московского Большого театра.
                </p>
                <a href="/" class="intro__afisha-link">
                    <img src="./img/svg/button.svg" alt="АФИША">
                </a>
                <h2 class="intro__form">
                    СТАТЬ МЕЦЕНАТОМ
                </h2>
                <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
                <script type="text/javascript" src="ajax.js"></script>
                <form action="action.php" class="search-form">
                    <fieldset class="search-form__wrap">
                        <p class="search-form__info">
                            <input id="name" type="text" name="user-name" class="search-form__field" placeholder="Имя">
                            <input id="phone" type="text" name="user-phone" class="search-form__field" placeholder="Телефон">
                            <button id="send_form" type="submit" class="search-form__submit">ОТПРАВИТЬ</button>
                        </p> 
                    </fieldset>
                </form>
                <a href="/" class="info__theater-link">
                <img src="./img/svg/info_theater.svg" alt="О ТЕАТРЕ">
                </a>
            </div>
        </section>
        <!-- Intro end --> 

        <!-- Info from Theater start -->
        <section class="infofromtheater">
            <div class="infofromtheater__wrap">
            </div>
        </section>
        <!-- Info from Theater end -->
    
        <!-- Performance start -->
        <section class="performances" id="наши постановки">
            <div class="wrapper-full">
                <h2 class="performances__title section-title">
                    НАШИ ПОСТАНОВКИ
                </h2>

                <div class="performances__cards">
                    <figure class="performances__card">
                        <img src="./img/performance-1.jpg" alt="ОСКАР 2020" class="performances__card-pic">
                        <figcaption class="performances__card-title">
                            ОСКАР 2020
                        </figcaption>
                        <a href="./script.php" class="performances__card-link"></a>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/performance-2.jpg" alt="РУСАЛКА" class="performances__card-pic">
                        <figcaption class="performances__card-title">
                            РУСАЛКА
                        </figcaption>
                        <a href="./script.php" class="performances__card-link"></a>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/performance-3.jpg" alt="ЗОЛОТОЙ ГРАМОФОН" class="performances__card-pic">
                        <figcaption class="performances__card-title">
                            ЗОЛОТОЙ ГРАМОФОН
                        </figcaption>
                        <a href="./script.php" class="performances__card-link"></a>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/performance-4.jpg" alt="ЩЕЛКУНЧИК" class="performances__card-pic">
                        <figcaption class="performances__card-title">
                            ЩЕЛКУНЧИК
                        </figcaption>
                        <a href="./script.php" class="performances__card-link"></a>
                    </figure>
                    <a href="/" class="best__theater-link">
                        <img src="./img/svg/besttheater.svg" alt="Лучший театр">
                    </a>
                </div>
            </div>
        </section>
        <!-- Performance end -->

        <!-- Partners start -->
        <section class="partners" id="партнеры театра">
            <div class="partners-full">
                <h2 class="partners__theater section-title">
                    ПАРТНЕРЫ ТЕАТРА
                </h2>   
                </div> 
                <div class="partners__cards">
                    <figure class="partners__card">
                        <img src="./img/logo-gazprom-1.png" width="200" height="95"alt="ГАЗПРОМ1">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ1">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ1">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ1">
                    </figure>
                    <figure class="partners__card">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ2">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ2">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ2">
                        <img src="./img/logo-gazprom-2.png" width="200" height="95"alt="ГАЗПРОМ2">
                    </figure>
            </div>>  
        </section>
        <!-- Partners end -->
    </main>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer__item">
                <div class="footer__address">
                    <img src="./img/address-footer.PNG" alt="Адрес театра" class="footer__address-pic">
                    <img src="./img/pravo-footer.png" alt="Все права защищены" class="footer__pravo-pic">
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/main.js"></script>
</body>
</html>