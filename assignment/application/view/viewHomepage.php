<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href='../application/css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
  <link rel="stylesheet" href="../application/css/coke.css">
  <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">



  <title>Assignment</title>
  <style>
   #ul li.active a{
    color: #ee141b;
    background-color: rgba(255, 250, 250, 0.801);
    border-radius: 15px;
   }
   .headers{
     display: flex;
     align-items: center;
     padding-left: 20px;
    
   }
   .headers>ul{
       margin-right: 30px;
     }
  </style>
</head>

<body id="bodyColor" style="background-color: antiquewhite;">
  <!-- Logo and navigation bar -->
  <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <div class="container">
      <div class="logo">
        <a id="navhome" class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the word, one story at a time</p>
        </a>
      </div>

      <!-- menu icon -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- button and selector -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- link -->
        <ul id="ul" class="navbar-nav ml-auto">
          <li id="navHome" class="nav-item active">
            <a class="nav-link " href="javascript:swap('home')">Home</a>
          </li>

          <li class="nav-item">
            <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About YYF&HRH" data-content="Nothing is impossible!">About</a>
          </li>

          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Contact YYF&HRH" data-content="yy316@sussex.ac.uk">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- home page main body -->
  <div id="home" class="mainbody" >

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="banner1" style="width: 100%;"  alt="Coke" >
        </div>
        <div class="carousel-item">
          <img id="banner2" style="width: 100%;"  alt="sprite">
        </div>
        <div class="carousel-item">
          <img id="banner3" style="width: 100%;"  alt="schweppes">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <div class="container main_contents">

    </div>

    <div style=" align-items: center; margin:0 auto; width: 90%;" class="row">
      <div class="col-sm-4">
        <div class="card card1">
          <a  id="leftimg" data-fancybox data-caption="My 3D Coke Can Render" class="thumbnail" >
            <img id="leftcard" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola"  >
          </a>
          <div class="card-body">
            <div id="title_left" class="card-title"></div>
            <div id="subTitle_left" class="card-subtitile"></div>
            <div id="description_left" class="card-text"></div>
            <a href="https://www.coca-colacompany.com/cn/home" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card1">
          <a id="midimg" data-fancybox data-caption="My 3D Sprite Can Render" class="thumbnail">
            <img id="midcard" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
          </a>
          <div class="card-body">
            <div id="title_centre" class="card-title"></div>
            <div id="subTitle_centre" class="card-subtitile"></div>
            <div id="description_centre" class="card-text"></div>
            <a href="https://www.coca-colacompany.com/cn/brands/sprite" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card1">
          <a id="rightimg" data-fancybox data-caption="My 3D Schweppes Can Render" class="thumbnail">
            <img id="rightcard" class="card-img-top img-fluid img-thumbnail" alt="Schweppes">
          </a>
          <div class="card-body">
            <div id="title_right" class="card-title"></div>
            <div id="subTitle_right" class="card-subtitile"></div>
            <div id="description_right" class="card-text"></div>
            <a href="https://www.coca-cola.co.uk/brands/schweppes-classic" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- about  -->
  <div id="about">
  <div class="container-fluid main_contents">
    <div class="row">
      <div class="col-sm-12"  >
         <h3>Somethings about my web 3D application 204560</h3>
         <p>The front end of the page is done using html+css+javaScripit combined with bootstrap.js<br>
         The back end of the page is implemented using the php language<br>
         The application is implemented using the mvc framework.<br></p> 

         <p>In this application, excluding the data in the about page, all other data is called through the database (texts, images, models). The back-end has built four tables (models table, texts table, images table, controller table) in the database to store different categories of data for subsequent management and validation.<br></p> 
         <p>The banner combined with the card design is used on the home page. The first impression of the app is the high definition banner image, which is beautiful and comfortable, combined with the cards of the three beverage categories to guide the browsing user.<br>
         In the model page, the left-hand side uses button js to switch between the relevant description and the model.<br>
         In the model interaction, the rotation of the Coke can model was rotated sideways due to a problem with the axes in the modelling, which was declared a failure after several attempts to adjust it, due to too little knowledge of the x3d type and poor understanding due to online material.<br>
         The application files have been uploaded to github and can be accessed by clicking on the github icon in the footer.
         <p>
        <img style="width: 50%; align-items: center;  " src="../application/assets/images/screencut/homepage.png" alt="homepage">
        <img style="width: 50%; align-items: center; " src="../application/assets/images/screencut/modelpage.png" alt="modelpage">

        <!-- <h3>Database control</h3>
        <p>Text Table</p>
        <a href="../index.php/apiCreateTable2">Create</a>
			  <a href="../../index.php/apigetdata3">Read</a>
			  <a href="#">Delete</a>
        <a href="#">Create</a>
			  <a href="../index.php/dbRead">Read</a>
			  <a href="#">Delete</a> -->
      </div>
    </div>
    </div>  




  </div>
  <!-- models  -->
  <div id="models" class="mainbody" style=" align-items: center; margin:0 auto; width: 90%; display: none;">

    <div class="container-fluid main_contents">
      <div class="row">
        <!-- X3D Model -->
        <div style="min-width: 130px;" class="col-sm-2 col-md-1">
          <div class="card-header" style="border-radius: 13px; margin-bottom: 6px; width: 130px; height:99%">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a id="navCoke" class="nav-link active" href="#" style="margin-right: 10px; width: 142%; text-align:center ">Coke</a>
              </li>
              <li class="nav-item">
                <a id="navSprite" class="nav-link active" href="#" style="margin-right: 10px; width:133%;text-align:center ">Sprite</a>
              </li>
              <li class="nav-item">
                <a id="navPepper" class="nav-link active" href="#">Schweppes</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-7 ol-sm-8" ;>
          <div id="card text-left">
            <!-- <div id="main_3d_image"></div> -->
            <!-- bootstrap 4 card hold information about the X3D model -->
            <div id="coke" class="card-body model-body">
              <div id="x3dModelTitle_coke" class="card-title"></div>
              <div class="model3D">
                <x3d>
                  <scene>
                    <inline id="cokeModel" nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" >
                    </inline>
                  </scene>
                </x3d>
              </div>
              <br>
              <!-- <div id="x3dCreationMethod_coke" class="card-text"></div> -->
            </div>
            <!-- sprite 3d model  -->
            <div id="sprite" class="card-body model-body" style="display: none;">
              <div id="x3dModelTitle_sprite" class="card-title"></div>
              <div class="model3D">
                <x3d>
                  <scene>
                    <inline id="spriteModel" nameSpaceName="model1" mapDEFToID="true" onclick="animateModel();">
                    </inline>
                  </scene>
                </x3d>
              </div>
              <br>
              <!-- <div id="x3dCreationMethod_sprite" class="card-text"></div> -->
            </div>

            <!-- suda 3D model  -->
            <div id="pepper" class="card-body model-body" style="display: none;">
              <div id="x3dModelTitle_sudo" class="card-title"></div>
              <div class="model3D">
                <x3d>
                  <scene>
                    <inline id="sudoModel" nameSpaceName="model2" mapDEFToID="true" onclick="animateModel();">
                    </inline>
                  </scene>
                </x3d>
              </div>
              <br>
              <!-- <div id="x3dCreationMethod_sudo" class="card-text"></div> -->
            </div>
          </div>
        </div>

        <!-- 3D Image gallery -->
        <div class="col-sm-3 card-image">
          <div class="card text-left">
            <div class="card-header gallery-header nav-link active" href="#">Gallery 3D Images</div>
            <div class="card-body">
              <div id="galleryTitle" class="card-title" style="font-weight: bolder;"></div>
              <div class="gallery" id="gallery">
              </div>
              <div id="galleryDescription" class="card-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start the interaction panels -->
   <div class="row">
   <div id="interaction" class="col-sm-12" style="margin: 0; margin-top: 25px">
      <div class="col-sm-12">
        <div class="card card1 text-left">
          <div class="card-header headers">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"  onclick="cameraFront();">Default</a>
                  <a class="dropdown-item" href="#"  onclick="cameraRight();">Right</a>
                  <a class="dropdown-item" href="#"  onclick="cameraTop();">Top</a>
                </div>
              </li>
            </ul>


            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Animation</a>
              </li>
            </ul>


            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Lighting</a>
              </li>
            </ul>


          </div>

          <div class="card-body">
            <div id="CameraTitle" class="card-Title x3dCamera_Subtitle drinksText">
            </div>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">Default</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
            <div id="CameraDescription" class="card-text x3dCameraDescription drinksText">
            </div>
          </div>
          
          <div class="card-body">
            <div id="AnimationTitle" class="card-Title x3dAnimationSubtitle drinksText"></div>
            <a href="#" class="btn btn-success  btn-responsive" onclick="spin();">Dance!/Stop!</a>
            <div id="AnimationDescription" class="card-text x3dAnimationDescription drinksText"></div>
          </div>

          <div class="card-body">
            <div id="LightTitle" class="card-Title x3dRendersubtitle drinksText"></div>
            <a href="#" class="btn btn-secondary btn-responsive" onclick="headlight();">Headlight</a>
            <div id="LightDescription" class="card-text x3dRenderDescription drinksText"></div>
          </div>
        </div>
      </div>
    </div>
   </div>



    <div id="cokeDescription" class="row" style="margin: 0px;">
      <!-- Coca cola column -->
      <div class="col-sm-12">
        <div class="card card1">
          <div class="card-body">
            <div id="title_coke" class="card-title" style="font-size: xx-large;"></div>
            <div id="subTitle_coke" class="card-subtitle"></div>
            <div id="description_coke" class="card-text"></div>
            <a href="https://www.coca-colacompany.com/cn/home" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
      <br>
    </div>

    <div id="spriteDescription" class="row" style="margin: 0px; display: none;">
      <!-- Sprite column -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_sprite" class="card-title" style="font-size: xx-large;"></div>
            <div id="subTitle_sprite" class="card-subtitle"></div>
            <div id="description_sprite" class="card-text"></div>
            <a href="https://www.coca-colacompany.com/cn/brands/sprite" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
      <br>
    </div>

    <div id="pepperDescription" class="row" style="margin: 0px; display: none;">
      <!-- Pepper column -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_sudo" class="card-title" style="font-size: xx-large;"></div>
            <div id="subTitle_sudo" class="card-subtitle"></div>
            <div id="description_sudo" class="card-text"></div>
            <a href="https://www.coca-cola.co.uk/brands/schweppes-classic" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
      <br>
    </div>
  </div>
  <!-- 3d APP FOOTER -->
  <nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container">
      <div class="navbar-text float-left copyright">
        <p><span class="align-baseline">
            &copy 2022 Mobile Web 3D Applications |
            <a href="javascript:changeLook()">Restyle</a>
            |
            <a href="javascript:changeBack()">Reset</a>
          </span></p>
      </div>
      <div class="navbar-text float-right social">
        <a href="#"><i class="fab fa-facebook-square fa-2x" color:blue></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x" color:blue></i></a>
        <a href="#"><i class="fab fa-google-plus fa-2x" color:blue></i></a>
        <a href="https://github.com/yiwancibeishang1/WEB3DAPP.git"><i class="fab fa-github-square fa-2x" color:blue></i></a>
      </div>
    </div>
  </nav>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"        
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"        
    crossorigin="anonymous"></script> -->
  <script src="../application/js/jquery-3.4.1.js" crossorigin="anonymous"></script>
  <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../application/js/bootstrap-4.4.1.js" crossorigin="anonymous"></script>
  <script type='text/javascript' src='../application/scripts/swap.js'></script>
  <script type='text/javascript' src='../application/js/x3dom.js'></script>

  <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
  <script src="../application/js/custon.js" crossorigin="anonymous"></script>
  <script src="../application/js/gallery_generator.js"></script>


  <script src="../application/js/jquery.fancybox.min.js"></script>
  <script src="../application/scripts/modelControllor.js"></script>
  <script src="../application/scripts/getModels.js"></script>
</body>

</html>