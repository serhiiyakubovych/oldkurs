<!DOCTYPE html>
<html>
   
    <?php
        $subtitle = "Редагування запису || ";
        include("page_structure/head.php");
    ?>
    
    <body>
               
        <?php
            include("page_structure/header.php");
        ?>
        
        <main>
            <div class="edit_form">
               <?
                if ($table === 'serviceslist') {
                    echo "<h2>Редагування інформації про послугу</h2>";
                    echo "<form method='post' action='index.php?table=" . $table . "&action=" . $_GET['action'] . "&id=" . $_GET['id'] . "'>";
                    echo    "<label>Назва";
                    echo    "<input class='form-item' type='text' name='title' value='" . $service['title'] . "' autofocus required>";
                    echo    "</label><br>";
                    echo    "<label>Адреса зображення";
                    echo    "<input class='form-item' type='text' name='img_address' value='" . $service['img_address'] . "' required>";
                    echo    "</label><br>";
                    echo    "<label>Детальний опис";
                    echo    "<textarea class='form-item' name='content' required>" . $service['content'] . "</textarea>";
                    echo    "</label><br>";
                    echo    "<input class='green-button' type='submit' value='Зберегти'>";
                    echo "</form>";
                }
                else if ($table === 'lawyerslist') {
                    echo "<h2>Редагування інформації про юриста</h2>";
                    echo "<form method='post' action='index.php?table=" . $table . "&action=" . $_GET['action'] . "&id=" . $_GET['id'] . "'>";
                    echo    "<label>Ім'я";
                    echo    "<input class='form-item' type='text' name='name' value='" . $lawyer['name'] . "' autofocus required>";
                    echo    "</label><br>";
                    echo    "<label>Посада";
                    echo    "<input class='form-item' type='text' name='position' value='" . $lawyer['position'] . "' required>";
                    echo    "</label><br>";
                    echo    "<label>Email";
                    echo    "<input class='form-item' type='email' name='email' value='" . $lawyer['email'] . "' required>";
                    echo    "</label><br>";
                    echo    "<input class='green-button' type='submit' value='Зберегти'>";
                    echo "</form>";
                }
                ?>
            </div>
        </main>
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <?php
            include("page_structure/footer.php");
            include("page_structure/_js.php");
        ?>
    </body>
    
</html>