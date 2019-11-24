<?
function up ($txt)
	{
	$tab=array($txt => 0);
	$tab=array_change_key_case($tab, CASE_UPPER);
	$tab = array_flip ($tab); 
	return $tab[0];
	}

function dziel ($txt) //10
	{
	$tab=array();
	$wyraz="";
	$txt.=" ";
	$d=strlen($txt);

	for($i=0; $i<$d; $i++)
		{
		$znak="";
		$znak=substr($txt,$i,1);
		if ($znak!=" ") {$wyraz.=$znak;} else {array_push ($tab, $wyraz); $wyraz="";};
		}
	return $tab;
	}

echo('<br><font class=tytul>');echo('Szukaj');echo('</font>');
echo('<hr width=300px class=kreska align=left>');

if ($tekst!="")
{

$tab1=dziel(up($tekst));
$tab3=dziel($tekst);
$ti1=count($tab1);
$ile=0;
$spacja="";

for($i=13; $i<33; $i++)
	{
	$file=fopen("menu/$i.txt", "r");
	flock($file, 1);

	$dz=fgets($file, 100); 
	$path=fgets($file, 100);
	$spacja=fgets($file, 100); 

		while($spacja!="*")
		{
		$nazwa=fgets($file, 100); 
		$link=fgets($file, 100); 
		$spacja=fgets($file, 100); 

		$d=strlen($nazwa)-2;
		$n=substr($nazwa,0,$d);

		$tab2=dziel(up($n));
		$ti2=count($tab2);

		if (up($n)==up($tekst))
		{
		echo('<a class=link href="index.php?id=artykul&d=');echo($dz);echo('&p=');echo($path);echo($link);echo('">');echo($nazwa);echo('</a><br>');
		$ile++;
		} // if

			for($j=0; $j<$ti1; $j++)
			{
				if (in_array($tab1[$j],$tab2))
				{
				echo('<a class=link href="index.php?id=artykul&d=');echo($dz);echo('&p=');echo($path);echo($link);echo('">');echo($nazwa);echo('</a><br>');
				$ile++;
				} // if
			}

		} // while

	flock($file, 3);
	fclose($file);
	} // for

echo('<br>');
echo("<font class=bfont>Szukano: '$tekst'");

if ($ti1>1)
{
for($j=0; $j<$ti1; $j++) echo(", '$tab3[$j]'");
};

echo(". Znaleziono $ile&nbsp;");
if ($ile==1) echo("dokument.</font>");
if ($ile>1 && $ile<5) echo("dokumenty.</font>");
if ($ile==0 || $ile>4) echo("dokumentów.</font>");

}
else
{
echo("<p class=glowka>");
echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
echo("Nie podano kryterium wyszukiwania...");
echo("</p>");
}
?>