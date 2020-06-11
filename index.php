<?
session_start();
//define ('PATH_LOG', 'path_log');
include "inc/cookie.inc.php";
include "inc/headers.inc.php";
require_once "inc/lib.inc.php";
//set_error_handler ("myError");
require_once "inc/data.inc.php";
echo "<br><br>";
//echo $_GET;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
//    header ("Cache-control: no-store");
    ?>

<?
require_once "inc/top.inc.php";
?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
        <?php

if (isset($_GET["id"]))
{
  include ($_GET["id"] . ".php");
}

    /*
//Write in file and add one string to text.txt
$fileopen = file_get_contents ("text.txt");
echo "$fileopen", "<br>";
//print_r ($fileopne);

$fileopen = fopen("text.txt","a+");
//$str = fgets($fileopen);
fwrite ($fileopen, "Add text to file \n");
//echo $str;
//$str = fgets($fileopen);
//echo $str;
fclose($fileopen);
*/

// List file and dir
?>

    <!-- Область основного контента -->
    <?php // include "inc/log.inc.php"; ?>
  </div>
  <div id="nav">
    <!-- Навигация -->
<?
require_once "inc/menu.inc.php";
require_once "inc/log.inc.php";

?>

<!--
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->


    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
<?
require_once "inc/bottom.inc.php";
?>

    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>