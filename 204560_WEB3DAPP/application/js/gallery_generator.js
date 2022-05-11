
$(document).ready(function() {

    var send = "./application/scripts/php/hook.php";
    var xmlHttp = new XMLHttpRequest();
    // var numberOfColumns = 4;
    var htmlCode = "";
    var response;
    xmlHttp.open("GET",send,true);
    xmlHttp.send(null);

    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4){
            // alert(xmlHttp.responseText);

            response = xmlHttp.responseText.split("~");
            // htmlCode += '<tr>';

            for (var i=0; i<response.length;i++) {
                // htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href="gallery_images'  + response[i] +'" >';
                htmlCode += '<img class="card-img-top img-thumbnail" src="gallery_images'+ response[i] + '"/>';
                htmlCode += '</a>';
                // htmlCode += '</td>';

                // if(((i+1)%numberOfColumns) == 0){
                //     htmlCode += '</tr><tr>';
                }
            

            // htmlCode += '</tr>';
            document.getElementById('gallery').innerHTML = htmlCode;
            // document.getElementById('gallery_sprite').innerHTML = htmlCode;
            // document.getElementById('gallery_pepper').innerHTML = htmlCode;

        }
    }
});
