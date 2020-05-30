<div id="sidebar" class="col-s">
    <div class="inner">

        <div class="information" style="position: absolute;margin-top: -53px;margin-left: 18px;">
            <?php require("online/index.php"); ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <div style="animation: spinner-grow 1s linear infinite;width: 1.5rem;height: 1.5rem;opacity: .1; margin-right: 13px;" class="spinner-grow text-success" role="status"></div>
            <h5 style="color:#00bf08; font-size: 20px;margin-left: 40px;margin-top: -34px;"><?php echo $online_count; ?></h5>
            <small style="display: block;color: #535a60;font-family: Roboto,sans-serif;font-size: 12px;position: relative;top: -12px;margin-left: 40px;">онлайн</small>
        </div>

        <header>
            <h1>КАТЕГОРИИ</h1>
        </header>

        <div class="sitemenu">
            <ul>





                <li class="menudrop">
                    <a class="nodrops" onclick="myFunction()" id="menudrop"><img src="/main/fire2.svg" alt=""><img src="/main/fire2.svg" alt="" class="icoblure" style="width: 32px;"><span style="color: #8ac547;">КИБЕР</span>БЕЗОПАСТНОСТЬ</a>
                    <ul class="dropdown" id="dropdown">
                        <li><a style="font-size: 14.5px;" href="/categories/debageanalitics.php"><span>Софт</span><small>дебаг/анализ</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/basedata.php"><span>Базы данных</span><small>подборки</small></a></li>
                    </ul>
                </li>

                <li class="menudrop">
                    <a class="nodrops" onclick="myFunction2()" id="menudrop"><img src="/main/windows2.svg" alt=""><img src="/main/windows2.svg" alt="" class="icoblure" style="width: 32px;">СОФТ ДЛЯ WINDOWS</a>
                    <ul class="dropdown" id="dropdown2">
                        <li><a style="font-size: 14.5px;" href="/categories/appearance.php"><span>Внешний вид</span><small>рабочий стол/украшения</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/media.php"><span>Медиа</span><small>аудио/видео/фото</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/systems.php"><span>Система</span><small>Ускорители/оптимизаторы</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/security.php"><span>Безопасность</span><small>антивирусы/сканеры</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/programmis.php"><span>Для программиста</span><small>редакторы/эмуляторы</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/makegame.php"><span>Создание игр</span><small>движки/конструкторы</small></a></li>
                    </ul>
                </li>

                <li class="menudrop">
                    <a class="nodrops" onclick="myFunction3()" id="menudrop"><img src="/main/html2.svg" alt=""><img src="/main/html2.svg" alt="" class="icoblure" style="width: 32px;">РАЗРАБОТЧИКУ</a>
                    <ul class="dropdown" id="dropdown3">
                        <li><a style="font-size: 14.5px;" href="/categories/html.php"><span>HTML/CSS</span><small>шаблоны</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/php.php"><span>PHP/MySql</span><small>скрипты</small></a></li>
                        <li><a style="font-size: 14.5px;" href="javascript.php"><span>JavaScript</span><small>скрипты/эффекты</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/psd.php"><span>PSD макеты</span><small>для тренировки</small></a></li>
                    </ul>
                </li>

                <li class="menudrop">
                    <a class="nodrops" onclick="myFunction4()" id="menudrop"><img src="/main/photoshop2.svg" alt=""><img src="/main/photoshop2.svg" alt="" class="icoblure" style="width: 32px;">ДИЗАЙН </a>
                    <ul class="dropdown" id="dropdown4">
                        <li><a style="font-size: 14.5px;" href="/categories/pictures.php"><span>Изображения</span><small>паки</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/icons.php"><span>Иконки</span><small>подборки</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/font.php"><span>Шрифты</span><small>лучшие</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/mokaps.php"><span>Мокапы</span><small>для Photoshop</small></a></li>
                    </ul>
                </li>

                <li class="menudrop">
                    <a class="nodrops" onclick="myFunction5()" id="menudrop"><img src="/main/books.svg" alt=""> <img src="/main/books.svg" alt="" class="icoblure" style="width: 32px;">КНИГИ </a>
                    <ul class="dropdown" id="dropdown5">
                        <li><a style="font-size: 14.5px;" href="/categories/javabook.php"><span>Java</span><small>Spark/Spring</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/c.php"><span>C++</span></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/pythonbooks.php"><span>Python</span><small>django/pygame</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/javaskriptbook.php"><span>JavaScript</span><small>jquery/nodejs</small></a></li>
                        <li><a style="font-size: 14.5px;" href="/categories/CSharp.php"><span>С#</span><small>.net core</small></a></li>
                    </ul>
                </li>

                <li class="menu">
                    <a class="package" href="/categories/different.php" id="menudrop"><img src="/main/package.svg" alt=""><img src="/main/package.svg" alt="" class="icoblure" style="width: 32px;">РАЗНОЕ</a>
                </li>

            </ul>
        </div>


        <div class="vk">
            <header>
                <h1 style="margin-left: 0px;">МЫ ВО ВКОНТАКТЕ</h1>
            </header>

            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

            <!-- VK Widget -->
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {
                    mode: 4,
                    width: "300",
                    height: "600",
                    color1: '080C0F',
                    color2: 'F0F0F0',
                    color3: '1d2b18'
                }, 194660283);
            </script>

        </div>


        <div class="adv">
            <header>
                <h1>РЕКЛАМА</h1>
            </header>
            <div>

            </div>

            <div>

            </div>
        </div>

    </div>
</div>