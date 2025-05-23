<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ошибка 404 - Страница не найдена</title>
    <style>/*!
 * BootstrapTema 404 template v1.0.0
 * (c) 2022 Merenkov Mihail
 * Website - https://bootstraptema.ru
 * MIT Licensed.
 */

@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap");

html {
    font-size: 16px;
}

body {
    font-family: "Open Sans", sans-serif;
    background-color: #fff;
    font-size: 16px;
    font-size: 1rem;
    color: #525252;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
}

@media (max-width:767px) {
    body {
        font-size: 14px;
    }
}

p {
    color: #525252;
    line-height: 1.6em;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #242f6c;
}

ul {
    padding-left: 0;
    margin: 0;
}

a {
    text-decoration: none;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
}

a:hover {
    text-decoration: none;
}

img {
    max-width: 100%;
}

img {
    max-width: 100%
}

.error-404-section {
    text-align: center
}

.error-404-section .error-message {
    margin-top: 70px;
    padding: 0 200px
}

@media (max-width:991px) {
    .error-404-section .error-message {
        margin-top: 50px;
        padding: 0 100px
    }
}

@media (max-width:767px) {
    .error-404-section .error-message {
        padding: 0
    }
}

.error-404-section .error-message h3 {
    font-size: 20px;
    font-size: 1.25rem;
    margin: 0 0 0.8em
}

.error-404-section .error-message p {
    margin-bottom: 1.8em
}

.section-padding {
    padding: 100px 0
}

@media (max-width:991px) {
    .section-padding {
        padding: 90px 0
    }
}

@media (max-width:767px) {
    .section-padding {
        padding: 80px 0
    }
}

.theme-btn,
.theme-btn-s3,
.theme-btn-s4,
.view-cart-btn {
    background: #00c6d1;
    background: -webkit-linear-gradient(left, #00a7d5, #00ded8);
    background: -moz-linear-gradient(left, #00a7d5, #00ded8);
    background: -o-linear-gradient(left, #00a7d5, #00ded8);
    background: -ms-linear-gradient(left, #00a7d5, #00ded8);
    background: -webkit-gradient(linear, left top, right top, from(#00a7d5), to(#00ded8));
    background: linear-gradient(left, #00a7d5, #00ded8);
    color: #fff;
    display: inline-block;
    font-weight: 600;
    padding: 12px 22px;
    border: 0;
    border-radius: 55px;
    text-transform: capitalize;
    -webkit-box-shadow: 0 0 0 5px #c8eaf5;
    box-shadow: 0 0 0 5px #c8eaf5;
    -webkit-backface-visibility: hidden;
    z-index: 1;
    position: relative;
}

.theme-btn:after,
.theme-btn-s3:after,
.theme-btn-s4:after,
.view-cart-btn:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 55px;
    background: -webkit-linear-gradient(left, #00ded8, #00a7d5);
    background: -moz-linear-gradient(left, #00ded8, #00a7d5);
    background: -o-linear-gradient(left, #00ded8, #00a7d5);
    background: -ms-linear-gradient(left, #00ded8, #00a7d5);
    background: -webkit-gradient(linear, left top, right top, from(#00ded8), to(#00a7d5));
    background: linear-gradient(left, #00ded8, #00a7d5);
    -webkit-transition: opacity 0.5s ease-out;
    -o-transition: opacity 0.5s ease-out;
    transition: opacity 0.5s ease-out;
    opacity: 0;
    z-index: -1;
}

.theme-btn:hover,
.theme-btn-s3:hover,
.theme-btn-s4:hover,
.view-cart-btn:hover,
.theme-btn:focus,
.theme-btn-s3:focus,
.theme-btn-s4:focus,
.view-cart-btn:focus,
.theme-btn:active,
.theme-btn-s3:active,
.theme-btn-s4:active,
.view-cart-btn:active {
    color: #fff;
}

.theme-btn:hover:after,
.theme-btn-s3:hover:after,
.theme-btn-s4:hover:after,
.view-cart-btn:hover:after {
    opacity: 1;
}

@media (max-width:991px) {

    .theme-btn,
    .theme-btn-s3,
    .theme-btn-s4,
    .view-cart-btn {
        font-size: 14px;
        font-size: 0.875rem;
    }
}

@media (max-width:767px) {

    .theme-btn,
    .theme-btn-s3,
    .theme-btn-s4,
    .view-cart-btn {
        padding: 12px 18px;
        font-size: 13px;
    }
}

.theme-btn-s2 {
    background: #fff;
    color: #525252;
    display: inline-block;
    padding: 12px 22px;
    border: 1px solid #00c6d1;
    border-radius: 55px;
    text-transform: capitalize;
    -webkit-box-shadow: 0 0 0 5px #c8eaf5;
    box-shadow: 0 0 0 5px #c8eaf5;
    z-index: 1;
    position: relative;
}

.theme-btn-s2:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 55px;
    background: -webkit-linear-gradient(left, #00ded8, #00a7d5);
    background: -moz-linear-gradient(left, #00ded8, #00a7d5);
    background: -o-linear-gradient(left, #00ded8, #00a7d5);
    background: -ms-linear-gradient(left, #00ded8, #00a7d5);
    background: -webkit-gradient(linear, left top, right top, from(#00ded8), to(#00a7d5));
    background: linear-gradient(left, #00ded8, #00a7d5);
    -webkit-transition: opacity 0.5s ease-out;
    -o-transition: opacity 0.5s ease-out;
    transition: opacity 0.5s ease-out;
    opacity: 0;
    z-index: -1;
}

@media (max-width:991px) {
    .theme-btn-s2 {
        font-size: 14px;
        font-size: 0.875rem;
    }
}

.theme-btn-s2:hover,
.theme-btn-s2:focus,
.theme-btn-s2:active {
    color: #fff;
}

.theme-btn-s2:hover:after {
    opacity: 1;
}

@media (max-width:767px) {
    .theme-btn-s2 {
        padding: 12px 18px;
        font-size: 13px;
    }
}

.theme-btn-s3,
.theme-btn-s4 {
    background: #c968ff;
    -webkit-box-shadow: 0 0 0 5px #f3e0fe;
    box-shadow: 0 0 0 5px #f3e0fe;
    background: -webkit-linear-gradient(left, #6168f3, #c968ff);
    background: -moz-linear-gradient(left, #6168f3, #c968ff);
    background: -o-linear-gradient(left, #6168f3, #c968ff);
    background: -ms-linear-gradient(left, #6168f3, #c968ff);
    background: -webkit-gradient(linear, left top, right top, from(#6168f3), to(#c968ff));
    background: linear-gradient(left, #6168f3, #c968ff);
    z-index: 1;
    position: relative;
}

.theme-btn-s3:after,
.theme-btn-s4:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 55px;
    background: -webkit-linear-gradient(left, #c968ff, #6168f3);
    background: -moz-linear-gradient(left, #c968ff, #6168f3);
    background: -o-linear-gradient(left, #c968ff, #6168f3);
    background: -ms-linear-gradient(left, #c968ff, #6168f3);
    background: -webkit-gradient(linear, left top, right top, from(#c968ff), to(#6168f3));
    background: linear-gradient(left, #c968ff, #6168f3);
    -webkit-transition: opacity 0.5s ease-out;
    -o-transition: opacity 0.5s ease-out;
    transition: opacity 0.5s ease-out;
    opacity: 0;
    z-index: -1;
}

.theme-btn-s3:hover:after,
.theme-btn-s4:hover:after {
    opacity: 1;
}

.theme-btn-s3:hover,
.theme-btn-s4:hover,
.theme-btn-s3:focus,
.theme-btn-s4:focus,
.theme-btn-s3:active,
.theme-btn-s4:active {
    color: #fff;
}

.theme-btn-s4 {
    background: #f6d365;
    background: -webkit-linear-gradient(left, #f6d365, #fda085);
    background: -moz-linear-gradient(left, #f6d365, #fda085);
    background: -o-linear-gradient(left, #f6d365, #fda085);
    background: -ms-linear-gradient(left, #f6d365, #fda085);
    background: -webkit-gradient(linear, left top, right top, from(#f6d365), to(#fda085));
    background: linear-gradient(left, #f6d365, #fda085);
    -webkit-box-shadow: 0 0 0 5px #fcf5df;
    box-shadow: 0 0 0 5px #fcf5df;
    z-index: 1;
    position: relative;
}

.theme-btn-s4:after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 55px;
    background: -webkit-linear-gradient(left, #fda085, #f6d365);
    background: -moz-linear-gradient(left, #fda085, #f6d365);
    background: -o-linear-gradient(left, #fda085, #f6d365);
    background: -ms-linear-gradient(left, #fda085, #f6d365);
    background: -webkit-gradient(linear, left top, right top, from(#fda085), to(#f6d365));
    background: linear-gradient(left, #fda085, #f6d365);
    -webkit-transition: opacity 0.5s ease-out;
    -o-transition: opacity 0.5s ease-out;
    transition: opacity 0.5s ease-out;
    opacity: 0;
    z-index: -1;
}

.theme-btn-s4:hover:after {
    opacity: 1;
}

.theme-btn-s4:hover,
.theme-btn-s4:focus,
.theme-btn-s4:active {
    color: #fff;
}</style>
</head>

<body>
    <section class="error-404-section section-padding">
        <div class="error">
            <img src="/errors/images/error404.png" alt>
        </div>
        <div class="error-message">
            <h3>Ой! Страница не найдена!</h3>
            <p>К сожалению мы не можем найти запрошенную вами страницу. Возможно, вы неправильно ввели адрес либо страница была удалена.</p>
            <!-- <a href="javascript:history.go(-1)" class="theme-btn">Вернуться в поиск</a> -->
            <a href="<?=PATH;?>" class="theme-btn">Назад</a>
            <p>All rights reserved. &#169; Copyright 2025 Berry.com<br>Sait äzırleuşı Tandau-store.kz, 2025-2026</p>
        </div>
    </section>
</body>
</html>