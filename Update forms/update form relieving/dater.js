function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('dater()',refresh)
}

function dater() {
var strcount
var x = new Date()
var m=x.getMonth()+1;
var s=x.getSeconds();
var da=x.getDate();
if(m==0)
{
m="00";
}
if(m==1)
{
m="01";
}
if(m==2)
{
m="02";
}
if(m==3)
{
m="03";
}
if(m==4)
{
m="04";
}
if(m==5)
{
m="05";
}
if(m==6)
{
m="06";
}
if(m==7)
{
m="07";
}
if(m==8)
{
m="08";
}
if(m==9)
{
m="09";
}


if(da==0)
{
da="00";
}
if(da==1)
{
da="01";
}
if(da==2)
{
da="02";
}
if(da==3)
{
da="03";
}
if(da==4)
{
da="04";
}
if(da==5)
{
da="05";
}
if(da==6)
{
da="06";
}
if(da==7)
{
da="07";
}
if(da==8)
{
da="08";
}
if(da==9)
{
da="09";
}


var x1= da + "-" +m+"-"+ x.getFullYear(); 
var h=x.getHours( );
var m1=x.getMinutes() ;
if
(h==12)
{
var status="( Pm )";
}
else if(h>12)
{
h=h-12;
var status="( Pm )";
}
else
{
status="( Am )";
}
if(h==0)
{
h="00";
}
if(h==1)
{
h="01";
}
if(h==2)
{
h="02";
}
if(h==3)
{
h="03";
}
if(h==4)
{
h="04";
}
if(h==5)
{
h="05";
}
if(h==6)
{
h="06";
}
if(h==7)
{
h="07";
}
if(h==8)
{
h="08";
}
if(h==9)
{
h="09";
}

if(s==0)
{
s="00";
}
if(s==1)
{
s="01";
}
if(s==2)
{
s="02";
}
if(s==3)
{
s="03";
}
if(s==4)
{
s="04";
}
if(s==5)
{
s="05";
}
if(s==6)
{
s="06";
}
if(s==7)
{
s="07";
}
if(s==8)
{
s="08";
}
if(s==9)
{
s="09";
}

if(m1==0)
{
m1="00";
}
if(m1==1)
{
m1="01";
}
if(m1==2)
{
m1="02";
}
if(m1==3)
{
m1="03";
}
if(m1==4)
{
m1="04";
}
if(m1==5)
{
m1="05";
}
if(m1==6)
{
m1="06";
}
if(m1==7)
{
m1="07";
}
if(m1==8)
{
m1="08";
}
if(m1==9)
{
m1="09";
}




x1 = x1 ;
$('#date-of-printing').val(x1);

tt=display_c();
 }