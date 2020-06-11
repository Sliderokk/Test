    <!-- Заголовок -->
  <!--  <h1>Добро пожаловать на наш сайт!</h1>  -->
    <!-- Заголовок -->
    <!-- Область основного контента -->
<?
//include "inc/prev.log.inc.php";
if (isset ($_POST["Delete_log"])) {
	unlink ("log/log.txt");
	} else include "inc/log.inc.php";

$forlog = fopen("log/log.txt", "a+") or die ("Text file not found");
//fwrite($forlog, "$path");
fseek ($forlog, 0);
echo fread($forlog, 111111);
fclose($forlog);

?>
  <style>
    #Del_log {

    padding: 15px 22px;
    color: white;
    font-weight: 700;
    font-size: 20;
    margin: 5px;
    border: none;
    border-radius; 30%;
	width: 100%;
    border: 3px solid grey;
    }
    </style>

<form method = "post">
  <input type = "submit" value = "Delete log" id = "Del_log"/>
  <input type = "hidden" name = "Delete_log"/>
</form>

    <!-- Область основного контента -->