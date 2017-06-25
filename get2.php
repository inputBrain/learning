<a href="?page=1"> Первая страница </a> | <a href="?page=2"> Вторая страница </a> | <a href="?page=3"> Третья
    страница </a>
<br/>
<?php
switch ($_GET['page']) {
    case 1 :
        echo 'Страница 1';
        break;
    case 2 :
        echo 'Страница 2';
        break;
    case 3 :
        echo 'Страница 3';
        break;

}
?>
