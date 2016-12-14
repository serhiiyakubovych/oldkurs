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
                    echo "<h2>Редагування інформації про послугу</h2>
                            <form method='post' action='index.php?table={$table}&action={$_GET['action']}&id={$_GET['id']}'>
                                <label>Назва
                                <input class='form-item' type='text' name='title' value='{$service['title']}' autofocus required>
                                </label><br>
                                <label>Адреса зображення
                                <input class='form-item' type='text' name='img_address' value='{$service['img_address']}' required>
                                </label><br>
                                <label>Детальний опис
                                <textarea class='form-item' name='content' required>{$service['content']}</textarea>
                                </label><br>
                                <input class='green-button' type='submit' value='Зберегти'>
                            </form>";
                }
                else if ($table === 'lawyerslist') {
                    echo "<h2>Редагування інформації про юриста</h2>
                            <form method='post' action='index.php?table={$table}&action={$_GET['action']}&id={$_GET['id']}'>
                                <label>Ім'я
                                <input class='form-item' type='text' name='name' value='{$lawyer['name']}' autofocus required>
                                </label><br>
                                <label>Посада
                                <input class='form-item' type='text' name='position' value='{$lawyer['position']}' required>
                                </label><br>
                                <label>Email
                                <input class='form-item' type='email' name='email' value='{$lawyer['email']}' required>
                                </label><br>
                                <input class='green-button' type='submit' value='Зберегти'>
                            </form>";
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