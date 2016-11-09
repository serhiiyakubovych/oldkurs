<!DOCTYPE html>
<html>
    
    <?php
        include("page_structure/head.php");
    ?>
    
    <body>
               
        <?php
            include("page_structure/header.php");
        ?>
        
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
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <?php
            include("page_structure/footer.php");
            include("page_structure/navmenu.php");
            include("page_structure/_js.php");
        ?>
    </body>
    
</html>