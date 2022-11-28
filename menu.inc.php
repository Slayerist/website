<?php
$menu=["Моё обучение","Портфолио","Мои работы","Контакты"];
?>


            <nav>
                <ul>
                    <?php foreach ($menu as $menu_item) {?>
                    <li><a href="#"> <?php echo $menu_item?> </a></li>
                    <?php } ?>

                </ul>    
            </nav>