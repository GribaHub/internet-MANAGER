<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Final//EN">
<HTML>
<HEAD>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=php/index.php?id=start">
<META NAME="Description" CONTENT="Portal dla top-managerów korporacji, dużych i średnich przedsiębiorstw. Aktualności, artykuły, wywiady, konferencje, opinie, komentarze i recenzje.">
<META NAME="Keywords" CONTENT="aida, aida-mg, piotr grzybowski, marek grzybowski">
<META NAME="Keywords" CONTENT="marketing, publicity, public relations, konferencje">
<META NAME="Keywords" CONTENT="usługi informatyczne, witryny internetowe, programowanie, kursy komputerowe">
<META NAME="Keywords" CONTENT="menedżer internetowy, internet manager, inkubator menadżerów, zarządzanie, technologia">
<META NAME="Keywords" CONTENT="internet, informatyka, manager, kadry, zarządzanie, crm, personel, nowe technologie, rynek, marketing, finanse, aktualności, artykuły, wywiady, konferencje, komentarze, recenzje">
<META NAME="Keywords" CONTENT="ekonometria, marek grzybowski, piotr grzybowski">
<TITLE>internet MANAGER</TITLE>
</HEAD>

<BODY BGCOLOR=#000000>

<?
$file=fopen("licznik.txt", "r");
flock($file, 1);
$cyfra=fgets($file, 100);
flock($file, 3);
fclose($file);
$cyfra++;

$file=fopen("licznik.txt", "w");
flock($file, 2);
fwrite($file, $cyfra);
flock($file, 3);
fclose($file);

$file=fopen("remote.txt", "a");
flock($file, 2);
fwrite($file, $cyfra);
fwrite($file, " - ");
fwrite($file, $REMOTE_ADDR);
fwrite($file, " - ");
fwrite($file, $REMOTE_HOST);
fwrite($file, " - ");
$czas=time(); fwrite($file, $czas);
fwrite($file, "\n");
flock($file, 3);
fclose($file);
?>

</BODY>
</HTML>