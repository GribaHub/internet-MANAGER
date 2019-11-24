<?
//echo('<a href="index.php?id=konferencje"><img src="gif/baner/orgmasz.gif" class=obrazek border=1></a>');
//echo('<br><br>');

srand();
$los=rand(1,6);

switch($los)
{
case 1: echo('<img src="gif/baner/banner-anim.gif" class=obrazek border=1>'); break;
case 2: echo('<img src="gif/baner/banner-anim.gif" class=obrazek border=1>'); break;
case 3: echo('<img src="gif/baner/banner-nieanim.gif" class=obrazek border=1>'); break;
case 4: echo('<a href="http://www.ckl.com.pl/" target=okno><img src="gif/baner/cklsa.gif" title="Nasz¹ misj¹ jest kszta³cenie zdolnoœci profesjonalnych i przywódczych" class=obrazek border=1></a>'); break;
case 5: echo('<a href="http://www.gdynia.pl/" target=okno><img src="gif/baner/gdynia.gif" class=obrazek border=1></a>'); break;
case 6: echo('<a href="http://keiz.wpit.am.gdynia.pl/" target=okno><img src="gif/baner/am.jpg" class=obrazek border=1></a>'); break;

case 7: echo('<a href="http://www.wsaib.pl/" target=okno><img src="gif/baner/wsaib.gif" class=obrazek border=1></a>'); break;
case 8: echo('<a href="http://www.instytut.org.pl/" target=okno><img src="gif/baner/instytut_zr.gif" class=obrazek border=1></a>'); break;
}
?>

<br><br>
<a href="http://www.gdynia.pl/wydarzenia/70_70568.html" target=okienko><img src="gif/baner/gdynia.jpg" class=obrazek border=1></a>
