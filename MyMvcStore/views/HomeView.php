<?php

namespace views;

class HomeView
{
    function __construct($products)
    {
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="../public/css/style.css">
            <link rel="stylesheet" href="../public/css/slider.css">
            <link rel="stylesheet" href="../public/css/catalogCard.css">
            <link rel="stylesheet" href="../public/css/filters.css">
            <title>Главная страница</title>
        </head>
        <body>
        <div class="container">
        <?php

        include "./templates/header.html";
        $this->banner();
        $this->catalog($products);
        include "./templates/footer.html";
        ?>
        </div>
        <?
        include_once './templates/connectJS.html';
        ?>
        </body>
        </html>
        <?php
    }

    function banner()
    {
        ?>
        <div class="box slider">
            <div class="callout-text">
                <div class="testimonial-carousel">

                    <div class="icon-container">
                            <span class="lnr lnr-arrow-left-circle">
                                ᐸ
                            </span>
                    </div>
                    <div class="testimonial-items">
                        <h2 class="carousel-h2" ><b>Открой</b> коробку и <br>
                            <b>погрузись</b> в мир игр!</h2>
                        <div class="testimonial-item first">
                            <div>
                                <h3>Бункер</h3>
                                <p class="quote">“Выживут только сильнейшие”</p>
                            </div>
                            <img src="../public/img/bunker.png" alt="">

                        </div>
                        <div class="testimonial-item second">
                            <div>
                                <h3>Ticket to Ride: Европа</h3>
                                <p class="quote">Постройте железные дороги по всей Европе!</p>
                            </div>
                            <img src="../public/img/Ticket-to-Ride_Europe00-1000x416-wm.jpg" alt="">
                        </div>
                        <div class="testimonial-item third">
                            <div>
                                <h3>Манчкин</h3>
                                <p class="quote">Хапай сокровища, бей монстров!</p>
                            </div>
                            <img src="../public/img/homepage/banner/манчкин.png" alt="">
                        </div>
                    </div>
                    <!-- End .testimonial-items -->
                    <div class="icon-container">
                            <span class="lnr lnr-arrow-right-circle">
                                ᐳ
                            </span>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
    function catalog($products)
    {
        ?>
        <div class="catalog">
            <div class="catalog__fields">
                <input type="button" class="fields__filters-button"  value="ФИЛЬТРЫ" style="cursor: pointer">
                <input type="text" placeholder="Ищу..." class="fields__search-field">
            </div>
        <div class="catalog__container">
            <div class="filters">
            <?
            include_once 'filters.php';
            ?>
            </div>
            <div class="catalog__cards"><?
                foreach($products as $item) {
                    include 'templates/catalogCard.php';
                }
                ?>
            </div>
        </div>
        <?php
    }
}