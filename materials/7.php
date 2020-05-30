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

    <title>Taskplay - Мультимедиа кнопки на панели задач</title>



</head>

<body style="background-color: #14171a;">




    <?php require('../MobileSiteBar.php') ?>








    <div id="wrapper" style="background-color: #14171a; transition: 0.3s;">







            <?php require('../header.php') ?>








        <div class="container-fluide" id="content_materials">

            <div class="row" id="mediacontent">

                <div id="content" class="col-f">
                    <div class="inner">

                        <div class="PosterMaterials" style="background-image: url(/main/posters/poster2.jpg);">
                            <div class="title">
                                <h1>Taskplay - Мультимедиа кнопки на панели задач</h1>
                            </div>
                            <div class="meta">
                                <span class="pubdate">12.02.2020</span>
                                <a class="categories" href="/categories/appearance.php" class="categories"><img
                                        src="/main/windows2.svg" alt="">Внешний Вид</a>
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
                            <img src="/main/MaterialsImg/B1YkfJtrys8.jpg" alt="" style="width: auto;margin: 0px 0px 50px 0px;">
                            <p>Вот такие 3 кнопочки в трее добавляет эта утилита.</p>   
                            <p>Особенно полезно будет тем, у кого на клавиатуре нет мультимедийных клавиш.</p><br>
                            <p>Причём управлять этими кнопками можно не только аудио плеером, но даже воспроизведением видео на <span style="color: #e74c3c; font-weight: 700;">YouTube</span> или во
                            <span style="color: #2880b9;font-weight: 700;">ВКонтакте</span>.</p>
                            <p>Это вообще круто, потому что например я люблю слушать музыку в ютубе.</p>
                            <p>Например, слушаю 🎧<a href="https://www.youtube.com/watch?v=5qap5aO4i9A" target="_blank">Lofi Hip-Hop Radio</a>.</p> 
                            <p>И чтобы поставить на паузу музыку, мне (и Вам) теперь не придётся разворачивать браузер/плеер.</p>
                            <p>Тупо жмякнул на кнопку - и вуаля!</p>
                        </div>

                        <div id="download">
                            <div class="header">
                                <h2><img src="/main/download2.png" alt="">СКАЧАТЬ</h2>
                            </div>
                            <div class="dwrapper">
                                <a href="/download/Taskplay.zip" download>
                                    <button class = "download-start"><strong>СКАЧАТЬ</strong><small>С нашего сервера</small></button></a>
                                
                            </div>
                            <style>
                                
                            </style>
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