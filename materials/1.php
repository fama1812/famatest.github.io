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
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Взлом паролей WPA2/WPA с помощью Hashcat в Kali Linux</title>



</head>

<body style="background-color: #14171a;">




    <?php require('../MobileSiteBar.php') ?>







    <div id="wrapper" style="background-color: #14171a; transition: 0.3s;">







        <?php require('../header.php') ?>








        <div class="container-fluide" id="content_materials">

            <div class="row" id="mediacontent">

                <div id="content" class="col-f">
                    <div class="inner">

                        <div class="PosterMaterials" style="background-image: url(/main/posters/hc.png);">
                            <div class="title">
                                <h1>Взлом паролей WPA2/WPA с помощью Hashcat в Kali Linux</h1>
                            </div>
                            <div class="meta">
                                <span class="pubdate">12.02.2020</span>
                                <a class="categories" href="/categories/debageanalitics.php" class="categories"><img src="/main/fire2.png" alt="">Софт</a>
                            </div>
                            <div id="action">
                                <ul class="list">
                                    <li style="padding-left: 10px;"><a class="ActionList" href="#descript"><img class="ActionListImg" src="/main/desc.png" alt="">ОПИСАНИЕ</a></li>

                                    <li class="dow"><a class="ActionListNone" href="#download"><img class="ActionListImg" src="/main/download2.png" alt="">СКАЧАТЬ</a></li>

                                    <li><a class="ActionList" href="#comments"><img class="ActionListImg" src="/main/com.png" alt="">КОММЕНТРИИ</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="descript">
                            <h1>Атака по словарю</h1>
                            <p>Раздобудьте какие-нибудь словари, вроде Rockyou</p>
                            <br>
                            <p>Для начала нам нужно узнать, какой режим использовать для файла хендшейка WPA2 WPA</p>
                            <div class="bbCodeBlock">
                                <div class="bbCodeBlock-content" dir="ltr">
                                    <pre class="bbCodeCode" dir="ltr" data-xf-init="code-block" data-lang=""><code>hashcat --help | grep WPA</code></pre>
                                </div>
                            </div>
                            <p>Т.е. это 2500.</p><br>
                            <p>Мы используем следующую команду для старта процесса взлома:</p><br>
                            <div class="bbCodeBlock">
                                <div class="bbCodeBlock-content" dir="ltr">
                                    <pre class="bbCodeCode" dir="ltr" data-xf-init="code-block" data-lang=""><code>hashcat -m 2500 /root/hs/out.hccap /root/rockyou.txt</code></pre>
                                </div>
                            </div>
                            <p>Команда может отличаться. Например, я использую следующий вариант:</p><br>
                            <div class="bbCodeBlock">
                                <div class="bbCodeBlock-content" dir="ltr">
                                    <pre class="bbCodeCode" dir="ltr" data-xf-init="code-block" data-lang=""><code>oclHashcat --force -m 2500 /root/hs/out.hccap /root/rockyou.txt</code></pre>
                                </div>
                            </div>
                            <p>Поскольку я установил oclHashcat.</p><br>
                            <p>У тех, кто установил cudaHashcat, команда выглядить так:</p><br>
                            <div class="bbCodeBlock">
                                <div class="bbCodeBlock-content" dir="ltr">
                                    <pre class="bbCodeCode" dir="ltr" data-xf-init="code-block" data-lang=""><code>cudaHashcat -m 2500 /root/hs/out.hccap /root/rockyou.txt</code></pre>
                                </div>
                            </div>
                            <p>У меня всё получилось быстро, поскольку пароль для беспроводной ТД был простым. Это заняло секунды. В зависимости от
                                размера словаря, процесс может занять довольно много времени.</p><br>
                            <p>Не забываем, что если использовать атаку по словарю, то Pyrit будет намного-намного быстрее чем любая из троицы
                                cudaHashcat или oclHashcat или Hashcat.</p><br>
                            <p>На эту тему был хороший ролик у канала <span style="color: #54e4fe;">UnderMind</span></p>

                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/4MKXuAoCjJ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>

                        <div id="download">
                            <div class="header">
                                <h2><img src="/main/download2.png" alt="">СКАЧАТЬ</h2>
                            </div>
                            <div class="dwrapper">
                                <a href="https://hashcat.net/files/hashcat-5.1.0.7z">
                                    <button class="download-start">
                                        <strong>СКАЧАТЬ</strong>
                                        <small>Объём файла: 2.7MB</small>
                                    </button>
                                </a>

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>