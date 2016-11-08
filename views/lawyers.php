<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Юридична компанія юристи">
        <meta name="description" content="Міжнародна юридична компанія 'Александров і партнер'и створена в 2002 році адвокатами, що мають великий досвід роботи в різних галузях права, здатними розв'язати найскладнішу проблему.">
        <link rel="icon" href="../favicon.ico">
        <link rel="stylesheet" href="../css/style.css">
        <title>Юристи - Міжнародна юридична компанія "Александров і партнери"</title>
        <script src="../js/jquery-3.1.1.min.js"></script>
        
        <!--Для старих версій IE 9-->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        
        <header id="top" class="header">
            <div class="menu">
                <ul>
                    <li><a href="../about-us">Про нас</a></li>
                    <li><a href="../services">Послуги</a></li>
                    <li><a href="../lawyers">Юристи</a></li>
                    <li><a href="../contacts">Контакти</a></li>
                </ul>
            </div>
            <a href=".."><div class="main-logo" clicable>
                <img src="../img/main_logo.png">
            </div></a>
            <a href=".."><div class="head-text"></div></a>
        </header>
        
        <main>
            <div class="container">                
                <div id="lawyers">
                    <h2 class="sub-head-text">Наші юристи</h2>
                    <div class="lawyers-list">
                        <table>
                            <tr>
                                <th>Ім'я</th>
                                <th>Посада</th>
                                <th>Email</th>
                            </tr> <!-- Беремо дані з БД -->
                            <?php foreach($lawyers as $lawyer): ?>
                            <tr>
                                <td><?=$lawyer['name']?></td>
                                <td><?=$lawyer['position']?></td>
                                <td><?=$lawyer['email']?></td>
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>                
            </div>
        </main>
        
        <footer id="contacts">
            <h2 class="sub-head-text">Контакти</h2>
            <div class="contacts">
                <ul>
                    <li><span class="big-text">Міжнародна юридична компанія "Александров і партнери"</span></li>
                    <li><span class="grey-text">Email:</span> <a href="mailto:alexandrovandco@gmail.com">alexandrovandco@gmail.com</a></li>
                    <li><span class="grey-text">Наша адреса:</span> 05252 м. Київ, вулиця О. Теліги, 31, кв. 1а</li>
                    <li><span class="grey-text">Телефон:</span> +38 097 123 43 21</li>
                    <li><a href="../admin">Увійти</a></li>
                    <li><a href="../help">Довідка</a></li>
                </ul>
            </div>
            <div class="social">
                <a href="#"><div id="g" class="social-elem"></div></a>
                <a href="#"><div id="fb" class="social-elem"></div></a>
                <a href="#"><div id="tw" class="social-elem"></div></a>
                <a href="#"><div id="vk" class="social-elem"></div></a>
            </div>
            <div class="copyright">
                    Copyright © Міжнародна юридична компанія "Александров і партнери" 2016
            </div>
        </footer>
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <script src="../js/main.js"></script>
    </body>
    
</html>