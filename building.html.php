<!DOCTYPE html>

<?php include 'init.php' ?>

<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    </head>
    <body class="building">
        <div id="wrapper">
            <div id="content">


                <div id="header">
                    <a href="https://chasdom.ru/" class="logo">
                        <img src="<?= url('/img/logo.png') ?>" alt="">
                    </a>

                    <div class="menu">
                        <table>
                            <tr>
                                <td>
                                    <a href="https://chasdom.ru/chem-my-otlichaemsya-ot-drugih">Полезно знать</a>
                                </td>
                                <td>
                                    <a href="https://chasdom.ru/uslugi-i-ceny-na-proektirovanie">Услуги и цены</a>
                                </td>
                                <td>
                                    <a href="https://chasdom.ru/">О проектировании</a>
                                </td>
                                <td>
                                    <a href="https://chasdom.ru/building">О строительстве</a>
                                </td>
                                <td>
                                    <a href="https://chasdom.ru/contacts">Контакты</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div id="sale" style="background: url(<?= url('img/sale2.png') ?>) no-repeat top;">
                    <div class="inner">
                        <div class="container">
                            <div class="text-1">Не будьте, как все!</div>
                            <div class="text-2">
                                Сместите начала сезона и сэкономьте на росте цен в сезон
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="best">
                            <div>
                                <table>
                                    <tr>
                                        <td>
                                            <img src="<?= url('img/warinig.png') ?>" alt="">
                                        </td>
                                        <td>
                                            Выберите лучших строителей
                                            прямо сейчас, так как лучшие
                                            бригады расписываются зимой
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="how-it-work" class="block">
                    <div class="container">
                        <div class="text html-text">
                            <p>
                                Общепринято начинать строительство весной, однако тогда высока вероятность переплатить.
                            </p>
                        </div>

                        <div class="title">Как это происходит</div>

                        <table>
                            <tr>
                                <td>1</td>
                                <td>
                                    Весной все одновременно начинают заливать фундаменты — бетонные заводы поднимают
                                    ценник
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Фундаменты залили, далее все одновременно начинают стены выкладывать — поднимают
                                    цены на стеновые материалы
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Подняли стены, осенью все одновременно начинают кровли делать — цены на дерево
                                    вырастают в 2 раза
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div id="winter">
                    <div class="container">
                        <div class="text html-text">
                            Зимний период накладывает ограничения только на выполнение фасадных отделочных работ. Все
                            работы по возведению несущих конструкций дома мы спокойно проводим круглый год со строгим
                            соблюдением технологии производства.
                        </div>
                    </div>
                </div>


                <div id="social" class="block">
                    <div class="social">
                        <table>
                            <tr>
                                <td>
                                    <img src="<?= url('/img/tg.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/wa.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/yt.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/fb.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/ig.png') ?>" alt="">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div id="variants">
                    <div class="container">
                        <div class="title">Варианты работы</div>
                    </div>
                    <div class="items">

                        <div class="item">
                            <div class="img">
                                <img src="<?= url('img/variant.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="name">Вариант 1</div>
                                <div class="text">
                                    Устройство фундамента, консервация на новогодние праздники с последующим
                                    возобновлением работ и фиксация сметы
                                    на 2021 год
                                </div>
                                <div class="text-2 html-text">
                                    Идеально подходит, когда у вас есть согласованный проект на руках. Нет причин
                                    откладывать строительство на весну.
                                </div>
                            </div>
                            <div class="sale">
                                <div class="sale-title">Скидки на строительство с нами</div>
                                <table>
                                    <tr>
                                        <td class="sale-1">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                70000 - 170000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 10% от сметы по договору.
                                            </div>
                                        </td>
                                        <td class="sale-2">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                70000 - 170000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 10% от сметы по договору.
                                            </div>
                                        </td>
                                        <td class="sale-3">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                70000 - 170000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 10% от сметы по договору.
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="more">
                                <a href="https://chasdom.ru">Перейти на сайт</a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="img">
                                <img src="<?= url('img/variant2.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="name">Вариант 2</div>
                                <div class="text">
                                    Фиксация сметы сейчас по зимним ценам
                                    и строительство дома в 2021 году
                                </div>
                                <div class="text-2 html-text">
                                    Подходит, когда вы планируете уже сейчас делать проект. Одновременно с
                                    проектированием мы будем считать сметы в разных комплектациях дома и фиксировать
                                    стоимость.
                                </div>
                            </div>
                            <div class="sale">
                                <div class="sale-title">Скидки на строительство с нами</div>
                                <table>
                                    <tr>
                                        <td class="sale-1">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                40000 - 120000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 10% от сметы по договору.
                                            </div>
                                        </td>
                                        <td class="sale-2">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                90000 - 170000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 30% от сметы по договору.
                                            </div>
                                        </td>
                                        <td class="sale-3">
                                            <div class="sale-icon">
                                                <img src="<?= url('img/sale-icon.png') ?>" alt="">
                                            </div>
                                            <div class="sale-discount">
                                                Скидка <br>
                                                140000 - 220000 ₽/м²
                                            </div>
                                            <div class="sale-text">
                                                при оплате 50% от сметы по договору.
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="more">
                                <a href="https://chasdom.ru">Перейти на сайт</a>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="result">
                    <div class="container">
                        <div class="title">Таким образом мы:</div>
                        <table>
                            <tr>
                                <td>1</td>
                                <td>
                                    Фиксируем стоимость по договору, несмотря на инфляцию и рост цен на строительные
                                    материалы. Расценки по работам также будут зафиксированы для вас
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Полностью фиксируем стоимость по договору
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Резервируем стройматериалов на складах
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Ставим в график лучшую бригаду строителей
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div id="social-footer" class="block">
                    <div class="container">
                        <div class="title">Позвоните, напишите, получите проект на выгодных условиях</div>
                    </div>
                    <div class="social">
                        <table>
                            <tr>
                                <td>
                                    <img src="<?= url('/img/tg.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/wa.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/yt.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/fb.png') ?>" alt="">
                                </td>
                                <td>
                                    <img src="<?= url('/img/ig.png') ?>" alt="">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="phone">
                        <a href="tel:74950033265">+7 (495) 003-32-65</a>
                    </div>
                </div>


                <div id="footer">
                    <div class="container">
                        <div class="text">
                            Вы получили это письмо, потому что подписались на получение новостей и акций компании
                            «Частный дом». <br>
                            Рассылка производится в соответствии с <a href="#">пользовательским соглашением</a>.
                            Если вы не хотите получать рассылку, вы можете <a href="#">отписаться</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
