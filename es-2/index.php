<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$age = (int)$age;

if( (strlen($name)>3) && (strpos($mail, '.') !== false && strpos($mail, '@') !== false) && (is_numeric($age) == 1 )){
    echo "accesso riuscito";
}
else{
    echo "accesso negato";
}

?>
