<!DOCTYPE html>
<html>
    
    <?php
        include("head.php");
    ?>
    
    <body>
        
        <header id="top" class="header">
            <div class="menu">
                <ul>
                    <li><a href="about-us">Про нас</a></li>
                    <li><a href="services">Послуги</a></li>
                    <li><a href="lawyers">Юристи</a></li>
                    <li><a href="contacts">Контакти</a></li>
                </ul>
            </div>
            <a href="#"><div class="main-logo">
                <img src="img/main_logo.png">
            </div></a>
            <a href="#"><div class="head-text"></div></a>
        </header>
        
        <main>
            <div class="container">
               
                <div id="about-us-id">
                    <h2 class="sub-head-text">Про нас</h2>
                    <figure class="main-page-figure">
                        <img src="img/main_1.jpg" alt="Про нас">
                        <figcaption>Міжнародна юридична компанія "Александров і партнери"</figcaption>
                        <a href="about-us"><button class="green-button">Детальніше</button></a>
                    </figure>
                </div>
                
                <div id="services">
                   <h2 class="sub-head-text">Які послуги ми надаємо</h2>
                   <figure class="main-page-figure">
                        <img src="img/main_2.jpg" alt="Послуги">
                        <figcaption>Наші послуги</figcaption>
                       <a href="services"><button class="green-button">Детальніше</button></a>
                    </figure>

                </div>
                
                <div id="lawyers">
                    <h2 class="sub-head-text">Наші юристи</h2>
                    <figure class="main-page-figure">
                        <img src="img/main_3.jpg" alt="Юристи">
                        <figcaption>Юристи</figcaption>
                        <a href="lawyers"><button class="green-button">Детальніше</button></a>
                    </figure>
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
                    <li><a href="admin">Увійти</a></li>
                    <li><a href="help">Довідка</a></li>
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
                
        <a href="#" id="onmenu"></a> <!-- Кнопка "Відкрити навігаціне меню" -->
        <div id="menu"> <!-- Навігаційне меню -->
            <a href="#"><h2>Александров<br>і партнери</h2></a>
            <a href="#" id="offmenu"></a>
            <ul>
                <a href="#"><li>На головну</li></a>
                <a href="#about-us-id"><li>Про нас</li></a>
                <a href="#services"><li>Послуги</li></a>
                <a href="#lawyers"><li>Юристи</li></a>
                <a href="#contacts"><li>Контакти</li></a>
            </ul>
        </div>
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <script src="js/main.js"></script>
    </body>
    
</html>