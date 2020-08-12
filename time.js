

var day=new Date();
var weekday=new Array(7);
weekday[0]="Воскресенье";
weekday[1]="Понедельник";
weekday[2]="Вторник";
weekday[3]="Среда";
weekday[4]="Четверг";
weekday[5]="Пятница";
weekday[6]="Суббота";
document.write(weekday[day.getDay()]+",&nbsp;");

//выдает дату и день недели в js

var day=new Date();
var d=day.getDate();

var month=new Array(12);
month[0]="января";
month[1]="февраля";
month[2]="марта";
month[3]="апреля";
month[4]="мая";
month[5]="июня";
month[6]="июля";
month[7]="августа";
month[8]="сентября";
month[9]="октября";
month[10]="ноября";
month[11]="декабря";


var y=day.getFullYear();
var h=day.getHours();
var mi=day.getMinutes();

if(mi<10){
    mi='0'+mi;
}

document.write(d+"&nbsp;"+month[day.getMonth()]+"&nbsp;"+y+",&nbsp;"+h+":"+mi+"");






//выдает время в js

