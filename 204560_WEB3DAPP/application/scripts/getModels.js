$(document).ready(function () {

        //homepage text loading
        $.getJSON('../index.php/getJSON', function (jsonObj){
            console.log(jsonObj);
            $('#title_home').html('<h2>' + jsonObj[0].title + '<h2>');
            $('#subTitle_home').html('<h3>' + jsonObj[0].subTitle + '<h3>');
            $('#description_home').html('<p>' + jsonObj[0].description + '<p>');
    
            $('#title_left').html('<h2>' + jsonObj[1].title + '<h2>');
            $('#subTitle_left').html('<h3>' + jsonObj[1].subTitle + '<h3>');
            $('#description_left').html('<p>' + jsonObj[1].description + '<p>');
    
            $('#title_centre').html('<h2>' + jsonObj[2].title + '<h2>');
            $('#subTitle_centre').html('<h3>' + jsonObj[2].subTitle + '<h3>');
            $('#description_centre').html('<p>' + jsonObj[2].description + '<p>');
    
            $('#title_right').html('<h2>' + jsonObj[3].title + '<h2>');
            $('#subTitle_right').html('<h3>' + jsonObj[3].subTitle + '<h3>');
            $('#description_right').html('<p>' + jsonObj[3].description + '<p>');
        });

        //img url loading
        $.getJSON('../index.php/getJSON1', function (jsonObj1){
            console.log(jsonObj1);
            $('#banner1').attr('src', jsonObj1[0].bannerUrl);
            $('#leftimg').attr('href', jsonObj1[0].imageUrl);
            $('#leftcard').attr('src', jsonObj1[0].cardUrl);
    
            $('#banner2').attr('src', jsonObj1[1].bannerUrl);
            $('#midimg').attr('href', jsonObj1[1].imageUrl);
            $('#midcard').attr('src', jsonObj1[1].cardUrl);
    
            $('#banner3').attr('src', jsonObj1[2].bannerUrl);
            $('#rightimg').attr('href', jsonObj1[2].imageUrl);
            $('#rightcard').attr('src', jsonObj1[2].cardUrl);
    
        });

        //models loading
        $.getJSON('../index.php/getJSON2', function (jsonObj2){
            console.log(jsonObj2);
            $('#x3dModelTitle_coke').html('<h2>' + jsonObj2[0].modelTitle + '<h2>');
            // $('#cokeModel').attr('url', jsonObj2[0].modelUrl);
            $('#title_coke').html('<h2>' + jsonObj2[0].title + '<h2>');
            $('#subTitle_coke').html('<h3>' + jsonObj2[0].subTitle + '<h3>');
            $('#description_coke').html('<p>' + jsonObj2[0].description + '<p>');
            var file = jsonObj2[0].modelUrl;
            if(file != $('#cokeModel').attr('url'))
            $('#cokeModel').attr('url', file); 


            $('#x3dModelTitle_sprite').html('<h2>' + jsonObj2[1].modelTitle + '<h2>');
            // $('#spriteModel').attr('url', jsonObj2[1].modelUrl);
            $('#title_sprite').html('<h2>' + jsonObj2[1].title + '<h2>');
            $('#subTitle_sprite').html('<h3>' + jsonObj2[1].subTitle + '<h3>');
            $('#description_sprite').html('<p>' + jsonObj2[1].description + '<p>');
            var file1 = jsonObj2[1].modelUrl;
            if(file1 != $('#spriteModel').attr('url'))
            $('#spriteModel').attr('url', file1); 


            $('#x3dModelTitle_sudo').html('<h2>' + jsonObj2[2].modelTitle + '<h2>');
            // $('#sudoModel').attr('url', jsonObj2[2].modelUrl);
            $('#title_sudo').html('<h2>' + jsonObj2[2].title + '<h2>');
            $('#subTitle_sudo').html('<h3>' + jsonObj2[2].subTitle + '<h3>');
            $('#description_sudo').html('<p>' + jsonObj2[2].description + '<p>');
            var file2 = jsonObj2[2].modelUrl;
            if(file2 != $('#sudoModel').attr('url'))
            $('#sudoModel').attr('url', file2); 
        });

        $.getJSON('../index.php/getJSON3', function (jsonObj3){
            console.log(jsonObj3);
            $('#galleryTitle').html('<h3>' + jsonObj3[0].controTitle + '<h3>');
            $('#galleryDescription').html('<p>' + jsonObj3[0].controDesc + '<p>');
    
            $('#CameraTitle').html('<h3>' + jsonObj3[1].controTitle + '<h3>');
            $('#CameraDescription').html('<p>' + jsonObj3[1].controDesc + '<p>');

            $('#AnimationTitle').html('<h3>' + jsonObj3[2].controTitle + '<h3>');
            $('#AnimationDescription').html('<p>' + jsonObj3[2].controDesc + '<p>');
    
            $('#LightTitle').html('<h3>' + jsonObj3[3].controTitle + '<h3>');
            $('#LightDescription').html('<p>' + jsonObj3[3].controDesc + '<p>');
        });

});