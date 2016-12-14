<!DOCTYPE html>
<html>
    
    <?php
        $subtitle = "Послуги || ";
        include("page_structure/head.php");
    ?>
    
    <body>
       
        <?php
            include("page_structure/header.php");
        ?>
        
        <main>
            <div class="container">
                <div id="services">
                   <h2 class="sub-head-text">Які послуги ми надаємо</h2>
                    <? $i = 0;
                    foreach($services as $service) { //розташовуємо по два записи з БД у рядок
                        if (($i % 2) === 0) echo "<div class='row'>"; //на парному запису рядок відкривається
                            echo "<div class='cols col-6'>";
                            echo    "<figure>";
                            echo        "<img src=" . $service['img_address'] . " alt=" . $service['title'] . ">";
                            echo        "<figcaption>" . $service['title'] . "</figcaption>";
                            echo        "<button class='green-button'>Детальніше</button>";
                            echo        "<div class='description'>";
                            echo            $service['content'];
                            echo        "</div>";
                            echo    "</figure>";
                            echo "</div>";
                        if (($i % 2) === 1 || (count($services) - 1) === $i) echo "</div>"; //рядок закривається на непарному, або коли досягнуто останнього елементу масиву
                        $i++;
                    } ?>
                </div>
            </div>
        </main>
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <?php
            include("page_structure/footer.php");
            include("page_structure/_js.php");
        ?>
    </body>
    
</html>