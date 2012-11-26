<?

include "config.php";
  
session_start();

echo "welcome" ;
echo " ",$_SESSION["username"];


echo "your current level is ";
$level=getCurrentLevel($_SESSION["username"]);
echo $level;
echo "well done";
incrementLevel($_SESSION["username"]);


echo "your current level is ";
$level=getCurrentLevel($_SESSION["username"]);
echo $level;

generateList();








echo '<p>';

echo  '<a href="./logout.php">',"logout","</a>";

echo '</p>';


?>
