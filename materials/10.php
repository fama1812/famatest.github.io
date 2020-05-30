<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/matereals.css">
    <link rel="stylesheet" href="/css/materealsclass.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/media_materials.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PrimoCache - Ускорение чтение/записи на жесткий диск или SSD</title>



</head>

<body style="background-color: #14171a;">




    <?php require('../MobileSiteBar.php') ?>








    <div id="wrapper" style="background-color: #14171a; transition: 0.3s;">







            <?php require('../header.php') ?>








        <div class="container-fluide" id="content_materials">

            <div class="row" id="mediacontent">

                <div id="content" class="col-f">
                    <div class="inner">

                        <div class="PosterMaterials" style="background-image: url(/main/posters/poster5.png);">
                            <div class="title">
                                <h1>PrimoCache - Ускорение чтение/записи на жесткий диск или SSD</h1>
                            </div>
                            <div class="meta">
                                <span class="pubdate">12.02.2020</span>
                                <a class="categories" href="/categories/systems.php" class="categories"><img
                                        src="/main/windows2.svg" alt="">Система</a>
                            </div>
                            <div id="action">
                                <ul class="list">
                                    <li style="padding-left: 10px;"><a class="ActionList" href="#descript"><img
                                                class="ActionListImg" src="/main/desc.png" alt="">ОПИСАНИЕ</a></li>

                                    <li class="dow"><a class="ActionListNone" href="#download"><img
                                                class="ActionListImg" src="/main/download2.png" alt="">СКАЧАТЬ</a>
                                    </li>

                                    <li><a class="ActionList" href="#comments"><img class="ActionListImg"
                                                src="/main/com.png" alt="">КОММЕНТРИИ</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="descript">
                            <br></br>
                            <p>Может показаться что это гонево и не правда.</p>
                            <p>Но если разобраться с технической стороной того как работает прога - то становится всё понятно.</p>
                            
                            <br>
                            <br>
                            
                            <p>А дело в том что у жесткого диска или SSD на компьютере есть так называемая кэш-память.</p>
                            
                            <p>И если вкратце, то это своеобразная мини ОЗУ выступающая в качестве буфера для хранения данных, которые уже считаны с
                            диска но которые еще не были запрошены компьютером на обработку.</p>
                            <br>
                            <p>И чаще всего на компьютерах сегодня размер данной кэш-памяти составляет 32 или 64 мегабайта .. а её скорость как правило
                            равна скорости самого носителя и думаю не надо говорить, что скорость любой оперативки будет в десятки раз быстрее!</p>
                            
                            <br>
                            <br>
                            
                            <p>Так вот что делает программа PrimoCache .. так это заставляет Ваш компьютер использовать в качестве кэш-памяти Вашу
                            реальную оперативную память.</p>
                            <br>
                            <p>И это значит что во-первых объем такой новой кэш-памяти ограничен только объемом вашей оперативки, а во вторых это
                            значит что скорость чтения и записи данных в такую кэш память равняется скорости работы Вашей оперативной памяти.</p>
                        </div>

                        <div id="download">
                            <div class="header">
                                <h2><img src="/main/download2.png" alt="">СКАЧАТЬ</h2>
                            </div>
                            <div class="dwrapper">
                                <a href="/download/PrimoCache.Setup.zip" download>
                                    <button class="download-start"><strong>СКАЧАТЬ</strong><small>Размер файла 6.6МВ</small></button></a>

                            </div>
                        </div>

                        

                        <?php require('../Comments.php') ?>

                    </div>

                </div>


<?php require('../SiteBar.php') ?>


            </div>

        </div>









        <?php require('../footer.php') ?>





    </div>


    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>