<?php
if((!empty($_POST['busquedacodigo']))|| isset($_POST['busquedacodigo'])){
$file = fopen ("./dni1.txt", "r");
$linea = fgets($file);
$var = $_POST['busquedacodigo'];
while (!feof($file) && $linea!=$var) {
$linea = fgets($file);
}
if ($linea==$var) {
echo "<br>";
echo "el cliente con documento $var fue encontrado exitosamente y aplica para la promo";
echo "<br>";
//echo "Sí está:".substr($pasar,9,8);
echo "<br>";
} 
else
{
$file2 = fopen ("./dni2.txt", "r");
$linea2 = fgets($file2);
$var2 = $_POST['busquedacodigo'];
while (!feof($file2) && $linea2!=$var2) {
$linea2 = fgets($file2);
}
if ($linea2==$var2) {
echo "<br>";
echo "el cliente con documento $var2 fue encontrado exitosamente y aplica para la promo";
echo "<br>";
//echo "Sí está:".substr($pasar,9,8);
echo "<br>";
}
else
{
$file3 = fopen ("./dni3.txt", "r");
$linea3 = fgets($file3);
$var3 = $_POST['busquedacodigo'];
while (!feof($file3) && $linea3!=$var3) {
$linea3 = fgets($file3);
}
if ($linea3==$var3) {
echo "<br>";
echo "el cliente con documento $var3 fue encontrado exitosamente y aplica para la promo";
echo "<br>";
//echo "Sí está:".substr($pasar,9,8);
echo "<br>";
fclose ($file3);
}
else
{	
echo "<br><br><br><h2>El documento ingresado no fue encontrado para aplicar a esta promo.";
echo "<br> Por favor intente nuevamente</h2> ";
}
}
fclose ($file);
fclose ($file2);

}
}

?>
