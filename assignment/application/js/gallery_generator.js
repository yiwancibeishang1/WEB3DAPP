
$(document).ready(function() {

    var send = "../application/view/hook.php";
    var xmlHttp = new XMLHttpRequest();
    var htmlCode = "";
    var response;
    xmlHttp.open("GET",send,true);
    xmlHttp.send(null);

    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4){

            response = xmlHttp.responseText.split("~");

            for (var i=0; i<response.length;i++) {
                htmlCode += '<a href="'+ response[i] + ' " data-fancybox " > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
				htmlCode += '</a>';	
                }
            
            document.getElementById('gallery').innerHTML = htmlCode;


        }
    }
});
