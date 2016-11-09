<!DOCTYPE html>
<html>
   
    <?php
        $subtitle = "Адмінпанель || ";
        include("page_structure/head.php");
    ?>
    
    <body>
        
        <?php
            include("page_structure/header.php");
        ?>
        
        <main>
           <div class="container">
                <h2 class="sub-head-text">Послуги</h2>
                <a class="add_button" href="index.php?table=serviceslist&action=add">Додати</a>
                <table class="admin-table">
                    <tr>
                        <th>Назва послуги</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($services as $service): ?>
                    <tr>
                        <td><?=$service['title']?></td>
                        <td><a href="index.php?table=serviceslist&action=edit&id=<?=$service['id']?>">Редагувати</a></td>
                        <td><a href="index.php?table=serviceslist&action=delete&id=<?=$service['id']?>">Видалити</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
                <h2 class="sub-head-text">Юристи</h2>
                <a class="add_button" href="index.php?table=lawyerslist&action=add">Додати</a>
                <table class="admin-table">
                    <tr>
                        <th>Ім'я</th>
                        <th>Посада</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($lawyers as $lawyer): ?>
                    <tr>
                        <td><?=$lawyer['name']?></td>
                        <td><?=$lawyer['position']?></td>
                        <td><a href="index.php?table=lawyerslist&action=edit&id=<?=$lawyer['id']?>">Редагувати</a></td>
                        <td><a href="index.php?table=lawyerslist&action=delete&id=<?=$lawyer['id']?>">Видалити</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
                </div>
        </main>
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <?php
            include("page_structure/footer.php");
            include("page_structure/_js.php");
        ?>
    </body>
    
</html>