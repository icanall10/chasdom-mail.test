<!DOCTYPE html>

<?php include 'init.php' ?>

<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    </head>
    <body>
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


                <div id="sale" style="background: url(<?= url('img/sale.png') ?>) no-repeat top #25344C;">
                    <div class="container">
                        <div class="text-1">Не будьте, как все!</div>
                        <div class="text-2">Подготовьтесь к началу строительства обстоятельно и с умом вместе с нами
                        </div>
                    </div>
                </div>


                <div id="after-sale" class="block">
                    <div class="container">
                        <p>
                            Если вы хотите начать строительство в 2021 году, будет очень разумно начать проектные работы
                            уже сейчас — у вас будет достаточно времени без спешки подумать с семьей над предлагаемыми
                            решениями.
                        </p>
                    </div>
                </div>


                <div id="price" class="block">
                    <div class="container">
                        <div class="header">
                            <table>
                                <tr>
                                    <td>
                                        Архитектурный<br>
                                        проект под вас
                                    </td>
                                    <td>
                                        <div class="plus">
                                            <img src="<?= url('/img/plus.png') ?>" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="presents">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="<?= url('/img/present.png') ?>" alt="">
                                                    </td>
                                                    <td>подбор фасадных материалов</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= url('/img/present.png') ?>" alt="">
                                                    </td>
                                                    <td>сравнение стоимости вариантов</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="free">
                            <table>
                                <tr>
                                    <td>
                                        <img src="<?= url('/img/present2.png') ?>" alt="">
                                    </td>
                                    <td>
                                        <div class="title">Бесплатно до конца декабря</div>
                                        <div class="text">Подбор фасадных материалов + сравнение стоимости вариантов
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="total">
                            Всего за 250 ₽/м²

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


                <div id="steps">
                    <div class="container">
                        <div class="title">Этапы работы</div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="container">
                                <div class="name">Анализ участка</div>
                            </div>
                            <div class="img">
                                <img src="<?= url('/img/step1.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="text html-text">
                                    <p>
                                        <strong>Чтобы убедиться, надо проанализировать:</strong>
                                    </p>
                                    <p>
                                        Выясняем, можно ли строить на имеющемся участке. Как бы удивительно это ни
                                        звучало, но встречаются участки, на которых строить нельзя.
                                    </p>
                                    <ul>
                                        <li>градостроительный план</li>
                                        <li>правила поселка</li>
                                        <li>топосъемку участка</li>
                                        <li>геологию участка</li>
                                    </ul>
                                    <p>
                                        Последние 2 документа позволят в дальнейшем провести сравнительный анализ цен
                                        ВСЕХ типов фундамента.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="<?= url('/img/step2.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="name">
                                    Понимание стоимости строительства и анализ бюджета
                                </div>
                                <div class="text">
                                    <p>
                                        Под стоимостью строительства подразумевается полная стоимость дома со всем
                                        необходимым для проживания.
                                    </p>
                                    <p>
                                        Важно, что это не просто коробка дома, стоимость которой озвучивают многие
                                        строительные компании. В полную стоимость включено все: коробка, фасады с
                                        окнами,
                                        внутренняя инженерка, черновая и чистовая, внутренняя отделка, черновая и
                                        чистовая,
                                        вся мебель. Дом в состоянии «заходи и живи».
                                    </p>
                                    <p>
                                        Из практики «теплый контур» — это порядка 40% от общих затрат. Остальные 60% —
                                        внутренняя отделка с инженерными коммуникациями.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="<?= url('/img/step3.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="name">Формирование пожеланий</div>
                                <div class="text">
                                    <p>
                                        Формирование пожеланий к дому — это основа качественного дома. Бездумное
                                        принятие всех пожеланий заказчика, к сожалению, не приводит к качественному
                                        дому, потому что заказчик не знает множества нюансов.
                                    </p>
                                    <p>
                                        Проект выполненный «в точности по пожеланиям заказчика» может сначала очень
                                        понравится заказчику, но то, что будущий дом будет также радовать, маловероятно.
                                        Игнорировать пожелания заказчика тоже недопустимо. Поэтому в основу формирования
                                        пожеланий к дому мы ставим диалог заказчика с профессионалом, а не запись
                                        монолога заказчика молча под диктовку.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="<?= url('/img/step4.png') ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="name">
                                    Проектирование дома для вас в установленную стоимость в условиях конкретно вашего
                                    участка
                                </div>
                                <div class="text">
                                    <p>
                                        Мы придумываем дом и концепцию участка. В результате — виртуальная модель дома в
                                        соответствии с вашими пожеланиями, условиями участка и нашей системой лучших
                                        решений. Дом, который вам нравится во всех отношениях: как он расположен на
                                        участке, планировка дома, внешний вид и цветовые решения. Дом, который вы хотите
                                        построить.
                                    </p>
                                    <p>
                                        Во время проектирования мы делаем точную (!) экономическую оценку стоимости
                                        строительства, чтобы убедиться, что мы находимся в рамках бюджета.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="more">
                            <a href="https://chasdom.ru">Перейти на сайт</a>
                        </div>
                    </div>
                </div>


                <div id="result" class="block">
                    <div class="container">
                        <div class="title">Что получается в итоге нашей совместной работы:</div>
                        <table>
                            <tr>
                                <td>1</td>
                                <td>
                                    У вас есть понимание, каким будет ваш дом.
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Понимание стоимости реализации дома. Не цены за квадратный метр, умноженную на
                                    площадь дома, а сумму на основе проектных решений, при реализации которых и
                                    получится задуманный дом.
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Надежные технические решения, принятые не на коленке в процессе строительства, а по
                                    результатам инженерных расчетов
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Надежные технические решения, принятые не на коленке в процессе строительства, а по
                                    результатам инженерных расчетов
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
