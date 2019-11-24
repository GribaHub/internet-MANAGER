<?

$spacja="";

$fm=fopen("menu/marker.txt", "r");
flock($fm, 1);

for($i=13; $i<33; $i++) //32
{

$marker=fgets($fm, 100);
$d=strlen($marker)-4; 
$marker=substr($marker,3,$d); 

$file=fopen("menu/$i.txt", "r");
flock($file, 1);

$dz=fgets($file, 100); 
$path=fgets($file, 100); $d=strlen($path)-2; $path=substr($path,0,$d);
$spacja=fgets($file, 100); 

$nazwa=fgets($file, 100); 
$link=fgets($file, 100); $d=strlen($link)-2; $link=substr($link,0,$d);
$spacja=fgets($file, 100); 

echo('<a class=link href="index.php?id=artykul&d=');echo($dz);echo('&p=');echo($path);echo($link);echo('">');echo($nazwa);echo('</a><br>');
echo("<font class=nowy>$marker</font><br>");

flock($file, 3);
fclose($file);

$file=fopen("$path$link", "r");
flock($file, 1);

$spacja="x";

while($spacja!='*')
{
$dt=fgets($file, 100); $d=strlen($dt)-2; $dt=substr($dt,0,$d);
if ($dt=="<p class=tekst>" || $dt=="<P class=tekst>" || $dt=="<p class=glowka>")
{
echo("<p class=tekst>");
$dt=fgets($file, 100); echo($dt);
$dt=fgets($file, 1000); echo($dt);
echo("</p>");
$spacja="*";
}
}

echo('<a class=firma href="index.php?id=artykul&d=');echo($dz);echo('&p=');echo($path);echo($link);echo('">');echo("wiêcej <font class=znak>&nbsp;>>&nbsp;</font>");echo('</a><br>');
if ($i!=32) echo('<hr class=kreska width=99% align=center>');

flock($file, 3);
fclose($file);
}

flock($fm, 3);
fclose($fm);

echo('<br>');

?>