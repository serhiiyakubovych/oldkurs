<!DOCTYPE html>
<html>
   
    <?php
        $subtitle = "Юристи || ";
        include("page_structure/head.php");
    ?>
    
    <body>
               
        <?php
            include("page_structure/header.php");
        ?>
        
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
        
        <a href="#top" id="scrollup"></a> <!-- Кнопка "Вгору" -->
        <?php
            include("page_structure/footer.php");
            include("page_structure/_js.php");
        ?>
    </body>
    
</html>