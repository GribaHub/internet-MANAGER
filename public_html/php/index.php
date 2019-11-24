<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Final//EN">
<HTML>
<HEAD>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<META NAME="Description" CONTENT="Portal dla top-managerów korporacji, dużych i średnich przedsiębiorstw. Aktualności, artykuły, wywiady, konferencje, opinie, komentarze i recenzje.">
<META NAME="Keywords" CONTENT="aida, aida-mg, piotr grzybowski, marek grzybowski">
<META NAME="Keywords" CONTENT="marketing, publicity, public relations, konferencje">
<META NAME="Keywords" CONTENT="usługi informatyczne, witryny internetowe, programowanie, kursy komputerowe">
<META NAME="Keywords" CONTENT="menedżer internetowy, internet manager, inkubator menadżerów, zarządzanie, technologia">
<META NAME="Keywords" CONTENT="internet, informatyka, manager, kadry, zarządzanie, crm, personel, nowe technologie, rynek, marketing, finanse, aktualności, artykuły, wywiady, konferencje, komentarze, recenzje">
<META NAME="Keywords" CONTENT="ekonometria, marek grzybowski, piotr grzybowski">
<TITLE>internet MANAGER</TITLE>

<LINK REL=stylesheet HREF="styl.css" TYPE="text/css">



<?
$x = $_SERVER['HTTP_USER_AGENT'];

if(substr_count($x,"pera")!=0)
   { $br = "Opera"; $info=4; }
else if(substr_count($x,"MSIE")!=0)
   { $br = "Internet Explorer"; $info=2;}
else if(substr_count($x,"etscape6")!=0)
   { $br = "Netscape 6"; $info=4;}
else if(substr_count($x,"rv:1.")!=0)
   { $br = "Mozilla 1.x"; $info=4;}
else if(substr_count($x,"4.7")!=0)
   { $br = "Netscape 4.7x"; $info=4;}
else
   { $br = "inna"; $info=4;}

//echo "<font color=white>Twoja przegladarka to <b>$br</b></font>";
//echo "<font color=white>Twoja przegladarka to <b>$x</b></font>";

switch ($info)
{
case 2: echo('<SCRIPT LANGUAGE="JavaScript" SRC="skryptie.js"></SCRIPT>'); break;
case 4: echo('<SCRIPT LANGUAGE="JavaScript" SRC="skryptff.js"></SCRIPT>'); break;
}
?>

</HEAD>

<BODY class=main>

<table width=100% cellspacing=1 cellpadding=0 border=0>

<tr><td colspan=3 height=100px bgcolor=#ffffbb>

<!--// ***** logo... ***** //-->

<?
// width=760px
include("logo.htm");
?>

</td></tr>

<tr>

<td width=150px height=600px valign=top bgcolor=#5555aa>

<!--// ***** menu... ***** //-->

<img src="gif/informacja.gif" class=reklama width=150 border=0><br><br>

<?
include("menu.htm");
?>

<center>

<?
switch ($info)
{
case 2: echo('<table height=374px cellspacing=0 cellpadding=0 border=0>'); break;
case 4: echo('<table height=344px cellspacing=0 cellpadding=0 border=0>'); break;
}
?>

<tr><td width=130px align=center valign=bottom>

	<form action=index.php?id=szukaj method=post>
	<input type=text name=tekst maxlength=50 style="width:130px; border-color: #000000; border-width: 1px">
	<br>

<?
switch ($info)
{
case 2: echo('<br>'); break;
case 4: echo('<br>'); break;
}
?>


	<input type="submit" value="znajdź artykuł">
	</form>

</td></tr></table>
</center>

</td>

<td bgcolor=#ffffbb align=left valign=top>

<table width=100% border=0>
<tr>
<td align=left><SCRIPT LANGUAGE="JavaScript">data();</SCRIPT></td>
<td align=right><font class=data>ISSN 1895-426X</font></td>
</tr>
</table>

<? //71

switch($id)
{
case "start":
echo('&nbsp;<font class=bfont>Strona główna</font>');
echo('<hr class=kreska width=99% align=center>');

echo("<center>");

include("banery.php");

echo("<p class=poleca>internet MANAGER<br>poleca</p>");
echo("</center>");

echo('<center><table width=99% border=0><tr><td align=left>');
include('main.php');
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;

case "menu":
echo('&nbsp;<a class=nlink href="index.php?id=start">Strona główna</a>');
echo("<font class=znak>&nbsp;>>&nbsp;</font><font class=bfont>$d</font>");
echo('<hr class=kreska width=99% align=center>');
echo('<center><table width=99% border=0><tr><td align=left>');
include('menu.php');
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;

case "szukaj":
echo('&nbsp;<a class=nlink href="index.php?id=start">Strona główna</a>');
echo("<font class=znak>&nbsp;>>&nbsp;</font><font class=bfont>Szukaj</font>");
echo('<hr class=kreska width=99% align=center>');
echo('<center><table width=99% border=0><tr><td align=left>');
include('szukaj.php');
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;

case "konferencje":
echo('&nbsp;<a class=nlink href="index.php?id=start">Strona główna</a>');
echo("<font class=znak>&nbsp;>>&nbsp;</font><font class=bfont>Konferencje</font>");
echo('<hr class=kreska width=99% align=center>');
echo('<center><table width=99% border=0><tr><td align=left>');
include('konferencje.htm');
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;

case "redakcja":
echo('&nbsp;<a class=nlink href="index.php?id=start">Strona główna</a>');
echo("<font class=znak>&nbsp;>>&nbsp;</font><font class=bfont>Redakcja</font>");
echo('<hr class=kreska width=99% align=center>');
echo('<center><table width=99% border=0><tr><td align=left>');
include('redakcja.htm');
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;

case "artykul":
echo('&nbsp;<a class=nlink href="index.php?id=start">Strona główna</a>');
echo('<font class=znak>&nbsp;>>&nbsp;</font><a class=nlink href="index.php?id=menu&d=');
echo($d);

echo('&p=');

 switch($d)
 {
 case "Anti-equilibrium": echo("menu/13.txt"); break;
 case "Branże": echo("menu/14.txt"); break;
 case "CRM": echo("menu/15.txt"); break;
 case "Felietony": echo("menu/16.txt"); break;
 case "Informatyka w Firmie": echo("menu/17.txt"); break;
 case "Inkubator Menedżerów": echo("menu/18.txt"); break;
 case "Książki": echo("menu/19.txt"); break;
 case "Logistyka": echo("menu/20.txt"); break;
 case "Makroekonomia": echo("menu/21.txt"); break;
 case "Marketing": echo("menu/22.txt"); break;
 case "Menedżerowie": echo("menu/23.txt"); break;
 case "Nobliści": echo("menu/24.txt"); break;
 case "Nowe Technologie": echo("menu/25.txt"); break;
 case "Opinie": echo("menu/26.txt"); break;
 case "Prawo": echo("menu/27.txt"); break;
 case "Prezentacja Firmy": echo("menu/28.txt"); break;
 case "Raport z Rynku": echo("menu/29.txt"); break;
 case "Zarządzanie Finansowe": echo("menu/30.txt"); break;
 case "Zarządzanie Firmą": echo("menu/31.txt"); break;
 case "Zarządzanie Kadrami": echo("menu/32.txt"); break;
 }

echo('">');

echo($d);echo('</a>');
echo("<font class=znak>&nbsp;>>&nbsp;</font><font class=bfont>Archiwum</font>");
echo('<hr class=kreska width=99% align=center>');

echo('<br>');
echo('<center><table width=99% border=0><tr><td align=left>');
include($p);
echo('</td></tr></table></center>');
echo('<hr class=nic width=450px align=center>');
break;
} 

?>

</td>

<td width=150 bgcolor=#ffffff align=center valign=top>

<img src="gif/baner-misja-firmy.gif" class=reklama width=150 border=0><br><br>

<?
include('misje.htm');
?>

</td>

</tr>

<tr><td colspan=3 bgcolor=#ffffff>

<font class=stopka>(c) 2002-10 Piotr Grzybowski</font>

</td></tr>

</table>

<?
switch ($info)
{
case 2: echo('<SCRIPT LANGUAGE="JavaScript" SRC="startie.js"></SCRIPT>'); break;
case 4: echo('<SCRIPT LANGUAGE="JavaScript" SRC="startff.js"></SCRIPT>'); break;
}
?> 

</BODY>
</HTML>
