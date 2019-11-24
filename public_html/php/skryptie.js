function data(nr) {
var dzisiaj=new Date();
if (dzisiaj.getDate()<10) {dz="0"+dzisiaj.getDate()} else {dz=dzisiaj.getDate()};
if ((dzisiaj.getMonth()+1)<10) {m="0"+(dzisiaj.getMonth()+1)} else {m=(dzisiaj.getMonth()+1)};
document.write("&nbsp;<font class=data align=right>"+dz+"-"+m+"-"+dzisiaj.getYear()+"&nbsp;</font>");
}

function spacja(nr) {for (i=1; i<=nr; i++) document.write('&nbsp;')}

function pasekoe(oknr) { 
document.all["opcja"+oknr].style.background="color: #aa0000"; document.all["opcja"+oknr].style.color="#ffff00";
}

function pasekon(oknr) { 
document.all["opcja"+oknr].style.background="color: #000094"; document.all["opcja"+oknr].style.color="#ffff00";
}

function pasekofe(oknr) { 
document.all["opcja"+oknr].style.background="color: #ff0000"; document.all["opcja"+oknr].style.color="#ddffdd";
}

function pasekoff(oknr) { 
document.all["opcja"+oknr].style.background="color: #5555aa"; document.all["opcja"+oknr].style.color="#ddffdd";
}

function pasekon10() {pasekoe(10);}
function pasekon11() {pasekoe(11);}
function pasekon12() {pasekoe(12);}
function pasekon13() {pasekon(13);}
function pasekon14() {pasekon(14);}
function pasekon15() {pasekon(15);}
function pasekon16() {pasekon(16);}
function pasekon17() {pasekon(17);}
function pasekon18() {pasekon(18);}
function pasekon19() {pasekon(19);}
function pasekon20() {pasekon(20);}
function pasekon21() {pasekon(21);}
function pasekon22() {pasekon(22);}
function pasekon23() {pasekon(23);}
function pasekon24() {pasekon(24);}
function pasekon25() {pasekon(25);}
function pasekon26() {pasekon(26);}
function pasekon27() {pasekon(27);}
function pasekon28() {pasekon(28);}
function pasekon29() {pasekon(29);}
function pasekon30() {pasekon(30);}
function pasekon31() {pasekon(31);}
function pasekon32() {pasekon(32);}

function pasekoff10() {pasekofe(10);}
function pasekoff11() {pasekofe(11);}
function pasekoff12() {pasekofe(12);}
function pasekoff13() {pasekoff(13);}
function pasekoff14() {pasekoff(14);}
function pasekoff15() {pasekoff(15);}
function pasekoff16() {pasekoff(16);}
function pasekoff17() {pasekoff(17);}
function pasekoff18() {pasekoff(18);}
function pasekoff19() {pasekoff(19);}
function pasekoff20() {pasekoff(20);}
function pasekoff21() {pasekoff(21);}
function pasekoff22() {pasekoff(22);}
function pasekoff23() {pasekoff(23);}
function pasekoff24() {pasekoff(24);}
function pasekoff25() {pasekoff(25);}
function pasekoff26() {pasekoff(26);}
function pasekoff27() {pasekoff(27);}
function pasekoff28() {pasekoff(28);}
function pasekoff29() {pasekoff(29);}
function pasekoff30() {pasekoff(30);}
function pasekoff31() {pasekoff(31);}
function pasekoff32() {pasekoff(32);}

//function click10() {okienko=window.open( 'http://www.aida-mg.prv.pl/', 'okienko_10', 'fullscreen=0, toolbar=1, location=1, directories=0, status=1, menuBar=1, scrollBars=1, resizable=1, width=700, height=500, top=25, left=50' );}
function click10() {location.href="index.php?id=redakcja";}
function click11() {location.href="index.php?id=konferencje";}
function click12() {location.href="index.php?id=redakcja";}
function click13() {location.href="index.php?id=menu&d=Anti-equilibrium&p=menu/13.txt";}
function click14() {location.href="index.php?id=menu&d=Bran¿e&p=menu/14.txt";}
function click15() {location.href="index.php?id=menu&d=CRM&p=menu/15.txt";}
function click16() {location.href="index.php?id=menu&d=Felietony&p=menu/16.txt";}
function click17() {location.href="index.php?id=menu&d=Informatyka w Firmie&p=menu/17.txt";}
function click18() {location.href="index.php?id=menu&d=Inkubator Mened¿erów&p=menu/18.txt";}
function click19() {location.href="index.php?id=menu&d=Ksi¹¿ki&p=menu/19.txt";}
function click20() {location.href="index.php?id=menu&d=Logistyka&p=menu/20.txt";}
function click21() {location.href="index.php?id=menu&d=Makroekonomia&p=menu/21.txt";}
function click22() {location.href="index.php?id=menu&d=Marketing&p=menu/22.txt";}
function click23() {location.href="index.php?id=menu&d=Mened¿erowie&p=menu/23.txt";}
function click24() {location.href="index.php?id=menu&d=Nobliœci&p=menu/24.txt";}
function click25() {location.href="index.php?id=menu&d=Nowe Technologie&p=menu/25.txt";}
function click26() {location.href="index.php?id=menu&d=Opinie&p=menu/26.txt";}
function click27() {location.href="index.php?id=menu&d=Prawo&p=menu/27.txt";}
function click28() {location.href="index.php?id=menu&d=Prezentacja Firmy&p=menu/28.txt";}
function click29() {location.href="index.php?id=menu&d=Raport z Rynku&p=menu/29.txt";}
function click30() {location.href="index.php?id=menu&d=Zarz¹dzanie Finansowe&p=menu/30.txt";}
function click31() {location.href="index.php?id=menu&d=Zarz¹dzanie Firm¹&p=menu/31.txt";}
function click32() {location.href="index.php?id=menu&d=Zarz¹dzanie Kadrami&p=menu/32.txt";}
