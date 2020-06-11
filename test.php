
<pre>

<?php


/*
$arr = [7, 20, 5, 22, 43,45,32,8];
$posmin = 0;
for ($i=0; $i<count($arr); $i++) {
  if ($arr[$i] < $arr[$posmin]) $posmin = $i;
//echo $arr[$i];
}
print_r ($arr);
$help = $arr[0];
$arr[0] = $arr[$posmin];
$arr[$posmin] = $help;
print_r ($arr);

$posmin = 1;
for ($i = 1; $i < count($arr); $i++) {
  if ($arr[$i] < $arr[$posmin]) $posmin = $i;
}
$help = $arr[1];
$arr[1] = $arr[$posmin];
$arr[$posmin] = $help;
print_r ($arr);
*/


echo "<hr><hr><hr>";
$min = 41;
	if ($min >= 0 and $min <= 15)
      echo "First quarter hour";
	if ($min >= 16 and $min <= 30)
	  echo "Second quarter hour";
	if ($min >= 31 and $min <= 45)
      echo "Third quarter hour";
	if ($min >= 46 and $min <=59)
      echo "Fourth quarter hour";


echo "<hr>";
$a5 = 110;
if ($a5 == 10) {
  echo "True";
}
else {
  echo "False";
}

echo "<br><br><br>";
$arr4 = [0, 2, 4, 6, 8, 10, 12, 14];
foreach ($arr4 as $list4) {
  if ($list4 > 3)
    if ($list4 < 10)
    echo $list4 . "<br>";
}
echo "<hr>";

$arr3 = [2, 3, 4, 5];
$result3;
$sum3;
foreach ($arr3 as $list3) {
  $result3 = $list3 * $list3;
  $sum3 = $sum3 + $result3;

}
echo $sum3 . "<br>";

echo "<hr><hr>";

for ($i=1; $i<=10; $i++)
  echo $i . "<br>";
echo "<hr>";

$arr2 = [10, 15, 20, 25];
$result;
foreach ($arr2 as $sum) {
  $result = $result + $sum;
}
echo $result;
echo "<hr>";

$arr = [php, js, html, phyton];
foreach ($arr as $list) {
  echo "$list <br>";
}
echo "<hr>";

for ($i = 0; $i < 10; $i++){
	if ($i == 5)
    {
      continue;
    }

 	if ($i == 7)
      break;
 echo "Cycle" . $i*$i . "<br>";
}


interface Car {
  function Info();
}

class Track implements Car {
 public $speed;
 public $color;
 public $name;
 function __construct($speed, $color, $name){
    $this->speed = $speed;
    $this->color = $color;
 	$this->name = $name;
 }

  function Info(){
    echo "<br>My {$this->name} speed: {$this->speed}";
    echo "<br>My {$this->name} color: {$this->color}";
  }
}
$SuperTrack = new Track(100, "red", "SuperTrack");
$MegaTrack = new Track(110, "green", "MegaTrack");

$SuperTrack->Info();
$MegaTrack->Info();



echo "<hr><br>";
class User {
  public $name;
  public $login;
  public $password;

  function showInfo() {
    echo "<hr>Name: {$this->name}\n";
    echo "Login: {$this->login}\n";
    echo "Password: {$this->password}\n";
  }
}

$user1 = new User();
$user1->name = "John";
$user1->login = "john";
$user1->password = "123";
$user1->showInfo();

$user2 = new User();
$user2->name = "Mike";
$user2->login = "mike";
$user2->password = "456";
$user2->showInfo();

$user3 = new User();
$user3->name = "Sergey";
$user3->login = "sergey";
$user3->password = "789";
$user3->showInfo();

echo "<br><br>";
class Pet{
  public $name;
  public $type = "unknown";

  function __construct ($name, $type) {
  $this->name = $name;
  $this->type = $type;
  }

  function say($word){
    echo $this->name . " say $word\n";
	echo $this->drawLine();

  }
  function drawLine() {echo "<hr>";}
}

$cat = new Pet("Murzik", "cat");
$dog = new Pet("Tuzik", "dog");
$cat->say("Myau");
$dog->say("Gav");

//echo $cat->name;

echo "<br>";
$link = mysqli_connect ('localhost', 'root', '', 'specdb');
//$name = mysqli_real_escape_string ($link, "O'Brian");
$sql = "SELECT * FROM teachers WHERE 1";
$result = mysqli_query ($link, $sql);

mysqli_close ($link);


//$row = mysqli_fetch_array ($result);
//$row = mysqli_result ($result);
$rows = [];

do {
  $row = mysqli_fetch_assoc ($result);
  if(!$row)break;
  $rows[] = $row;
  }while(1);

print_r ($rows);


?>
</pre>