<?

$file=fopen($p, "r");
flock($file, 1);

$ile=0;
$spacja="";

$dz=fgets($file, 100); 
$path=fgets($file, 100);
$spacja=fgets($file, 100); 

echo('<br><font class=tytul>');echo($dz);echo('</font>');
echo('<hr width=300px class=kreska align=left>');

while($spacja!='*')
{
$nazwa=fgets($file, 100); 
$link=fgets($file, 100); 
$spacja=fgets($file, 100); 

echo('<a class=link href="index.php?id=artykul&d=');echo($dz);echo('&p=');echo($path);echo($link);echo('">');echo($nazwa);echo('</a><br>');
$ile++;
}

flock($file, 3);
fclose($file);

echo('<br>');
echo("<font class=bfont>$d: Znaleziono $ile&nbsp;");
if ($ile==1) echo("dokument.</font>");
if ($ile>1 && $ile<5) echo("dokumenty.</font>");
if ($ile>4) echo("dokumentów.</font>");
?>