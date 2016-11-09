<!DOCTYPE html>
<html>
   
    <?php
        $subtitle = "Контакти || ";
        include("page_structure/head.php");
    ?>
    
    <body>
       
        <?php
            include("page_structure/header.php");
        ?>
        
        <main>
            <div class="container">
                <h2 class="sub-head-text">Контакти</h2>
                <div class="contacts">
                    <ul>
                        <li><span class="big-text">Міжнародна юридична компанія "Александров і партнери"</span></li>
                        <li>Email: <a href="mailto:alexandrovandco@gmail.com">alexandrovandco@gmail.com</a></li>
                        <li>Наша адреса: 05252 м. Київ, вулиця О. Теліги, 31, кв. 1а</li>
                        <li>Телефон: +38 097 123 43 21</li>
                    </ul>
                </div>
                <div class="edit_form">
                    <h2>Напишіть нам</h2>
                    <form method="post" action="index.php?action=send">
                        <label>Тема
                            <input class="form-item" type="text" name="subject" value="" required>
                        </label><br>
                        <label>Повідомлення
                            <textarea class="form-item" name="message" rows="10" required></textarea>
                        </label><br>
                        <input class="green-button" type="submit" value="Відправити">
                    </form>
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