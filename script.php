<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши постановки</title>
</head>
<body>

    <!-- Postanovki start -->
    <section class="performances" id="наши постановки">
            <div class="wrapper-full">
                <h2 class="performances__title section-title">
                    НАШИ ПОСТАНОВКИ
                </h2>
                <div class="performances__cards">
                    <figure class="performances__card">
                        <img src="./img/oskar.jpg" alt="ОСКАР 2020" class="performances__card-pic">
                        <?php
                        $f = fopen("postanovka_1.txt", "r");
                        echo fgets($f);
                        fclose($f);
                        ?>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/rusalochka.jpg" alt="РУСАЛКА" class="performances__card-pic">
                        <?php
                        $f = fopen("postanovka_2.txt", "r");
                        echo fgets($f);
                        fclose($f);
                        ?>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/spartak.jpg" alt="ЗОЛОТОЙ ГРАМОФОН" class="performances__card-pic">
                        <?php
                        $f = fopen("postanovka_3.txt", "r");
                        echo fgets($f);
                        fclose($f);
                        ?>
                    </figure>
                    <figure class="performances__card">
                        <img src="./img/shelkynchik.jpg" alt="ЩЕЛКУНЧИК" class="performances__card-pic">
                        <?php
                        $f = fopen("postanovka_4.txt", "r");
                        echo fgets($f);
                        fclose($f);
                        ?>
                    </figure>
                </div>
            </div>
        </section>
   <!-- Postanovki end -->
   
</body>
</html>