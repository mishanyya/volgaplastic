
function save(el){
var nomer=el.getAttribute('name');

var text=el.previousSibling.value;//получаем предыдущий элемент


// (1) создать объект для запроса к серверу
   var req = getXmlHttp();
   //создаем объект ajax

   req.onreadystatechange = function() {
       if (req.readyState == 4) {
                    if(req.status == 200) {
                // если статус 200 (ОК) - выдать ответ пользователю
 alert('обновлено');

           }
                   }
   }


   req.open('POST', 'osnovasend.php', true);
   req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
var send='nomer='+nomer+'&text='+text;
   req.send(send);  // отослать запрос к серверу


}
