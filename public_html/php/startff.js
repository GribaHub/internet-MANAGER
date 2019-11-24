okienko="";

j=109;
xx=9;

document.getElementById('opcja0').style.top=j + 'px';
document.getElementById('opcja0').style.left=xx+ 'px';
document.getElementById('opcja0').style.visibility='visible';

j=j+1;

i=0;

for (i=10; i<=32; i++)
{
document.getElementById('opcja'+i).style.top=j + 'px';
document.getElementById('opcja'+i).style.left=xx + 'px';
document.getElementById('opcja'+i).style.visibility='visible';

j=j+14;
}

//document.getElementById('opcja10').style.visibility='hidden';

document.getElementById('opcja10').onmouseover=pasekon10;
document.getElementById('opcja11').onmouseover=pasekon11;
document.getElementById('opcja12').onmouseover=pasekon12;
document.getElementById('opcja13').onmouseover=pasekon13;
document.getElementById('opcja14').onmouseover=pasekon14;
document.getElementById('opcja15').onmouseover=pasekon15;
document.getElementById('opcja16').onmouseover=pasekon16;
document.getElementById('opcja17').onmouseover=pasekon17;
document.getElementById('opcja18').onmouseover=pasekon18;
document.getElementById('opcja19').onmouseover=pasekon19;
document.getElementById('opcja20').onmouseover=pasekon20;
document.getElementById('opcja21').onmouseover=pasekon21;
document.getElementById('opcja22').onmouseover=pasekon22;
document.getElementById('opcja23').onmouseover=pasekon23;
document.getElementById('opcja24').onmouseover=pasekon24;
document.getElementById('opcja25').onmouseover=pasekon25;
document.getElementById('opcja26').onmouseover=pasekon26;
document.getElementById('opcja27').onmouseover=pasekon27;
document.getElementById('opcja28').onmouseover=pasekon28;
document.getElementById('opcja29').onmouseover=pasekon29;
document.getElementById('opcja30').onmouseover=pasekon30;
document.getElementById('opcja31').onmouseover=pasekon31;
document.getElementById('opcja32').onmouseover=pasekon32;

document.getElementById('opcja10').onmouseout=pasekoff10;
document.getElementById('opcja11').onmouseout=pasekoff11;
document.getElementById('opcja12').onmouseout=pasekoff12;
document.getElementById('opcja13').onmouseout=pasekoff13;
document.getElementById('opcja14').onmouseout=pasekoff14;
document.getElementById('opcja15').onmouseout=pasekoff15;
document.getElementById('opcja16').onmouseout=pasekoff16;
document.getElementById('opcja17').onmouseout=pasekoff17;
document.getElementById('opcja18').onmouseout=pasekoff18;
document.getElementById('opcja19').onmouseout=pasekoff19;
document.getElementById('opcja20').onmouseout=pasekoff20;
document.getElementById('opcja21').onmouseout=pasekoff21;
document.getElementById('opcja22').onmouseout=pasekoff22;
document.getElementById('opcja23').onmouseout=pasekoff23;
document.getElementById('opcja24').onmouseout=pasekoff24;
document.getElementById('opcja25').onmouseout=pasekoff25;
document.getElementById('opcja26').onmouseout=pasekoff26;
document.getElementById('opcja27').onmouseout=pasekoff27;
document.getElementById('opcja28').onmouseout=pasekoff28;
document.getElementById('opcja29').onmouseout=pasekoff29;
document.getElementById('opcja30').onmouseout=pasekoff30;
document.getElementById('opcja31').onmouseout=pasekoff31;
document.getElementById('opcja32').onmouseout=pasekoff32;

document.getElementById('opcja10').onclick=click10;
document.getElementById('opcja11').onclick=click11;
document.getElementById('opcja12').onclick=click12;
document.getElementById('opcja13').onclick=click13;
document.getElementById('opcja14').onclick=click14;
document.getElementById('opcja15').onclick=click15;
document.getElementById('opcja16').onclick=click16;
document.getElementById('opcja17').onclick=click17;
document.getElementById('opcja18').onclick=click18;
document.getElementById('opcja19').onclick=click19;
document.getElementById('opcja20').onclick=click20;
document.getElementById('opcja21').onclick=click21;
document.getElementById('opcja22').onclick=click22;
document.getElementById('opcja23').onclick=click23;
document.getElementById('opcja24').onclick=click24;
document.getElementById('opcja25').onclick=click25;
document.getElementById('opcja26').onclick=click26;
document.getElementById('opcja27').onclick=click27;
document.getElementById('opcja28').onclick=click28;
document.getElementById('opcja29').onclick=click29;
document.getElementById('opcja30').onclick=click30;
document.getElementById('opcja31').onclick=click31;
document.getElementById('opcja32').onclick=click32;
