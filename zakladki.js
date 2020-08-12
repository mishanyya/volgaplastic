var a=new Array();
var q=document.getElementsByClassName('fotka');//для подсчета количества фоток
for (var i=0;i<q.length;i++) {
	a[i]=document.getElementsByClassName('fotki'+i)[0].getAttribute('src');//в новый массив вносятся ссылки на каждую фотку
	if (i==0) {document.getElementsByClassName('fotki'+i)[0].style.display='block';}//первую фотку видно
	else{document.getElementsByClassName('fotki'+i)[0].style.display='none';}//остальные не видно
}
function clicks(a){
var b=a.getAttribute('class');//у выбранного элемента берем его класс и помещаем в переменную
b=b.substr(5);//такое же название как у большого фото
document.getElementsByClassName(b)[0].style.display='display';
for (var i=0;i<q.length;i++) {	
	if (document.getElementsByClassName(b)[0].getAttribute('class')==document.getElementsByClassName('fotki'+i)[0].getAttribute('class'))
	 {document.getElementsByClassName('fotki'+i)[0].style.display='block';}
	else{document.getElementsByClassName('fotki'+i)[0].style.display='none';}
}
}

