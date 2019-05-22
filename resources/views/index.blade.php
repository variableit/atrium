<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Artrium</title>
      <!-- owl-carousel jquery slide  -->
        <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.default.min.css') }}">
      <!-- gallery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />      <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
        <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
      <!-- bootsratp -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <!-- myCss -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">



</head>
<body>
        <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>
      <!-- Preloader End -->
         
     
     <header>

          <div class="Div" id="logo_center">
            <nav class="navbar navbar-expand-lg navbar-light " id="jump">   <!-- "fixed-top" class for fixed in the top -->
              <!-- <a class="navbar-brand" href="#"> 
                <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
              </a> --> <!-- this for logo -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                    <a class="nav-link test" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Catering <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Events <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Our story <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">FAQ <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
                
              </div>
            </nav>
          </div>

       <!--  tst code for adding image in vdo  <div class="Div">
            <div id="logo_center">
              <div class="container-fluid">
                <div class="row">
                  <img src="{{ asset('image/logo/logo1.png') }}" class="img-fluid">
                </div>
              </div>
              
            </div>
          </div> -->

      <div class="overlay"></div>
      <video poster="{{ asset('video/bg.jpg') }}" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="{{ asset('video/mergeFood720p.mp4') }}" type="video/mp4">
      </video>
    </header>
    <!--............ logo ..............-->
    <div class="container-fluid logo_back fixedElement">
      <div id="logo_center">
        <a href="#jump"><img src="{{ asset('image/logo/logo.png') }}" class="logo_size"></a>
      </div>
    </div>

    {{-- ======================================svg================================================================================================== --}}

    <div>
      <svg class="triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve" >
        <polygon fill="none" stroke-width="0.5px" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" points="14.921,2.27 28.667,25.5 1.175,25.5 "></polygon>
      </svg>
      <svg class="waves" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
        <path class="wavey" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.145,23.651 c1.092,0,1.55-0.52,2.241-1.308c0.828-0.941,1.861-2.11,4.101-2.07c0.043-0.002,0.087-0.003,0.13-0.003 c2.163,0,3.171,1.148,3.985,2.073c0.692,0.788,1.149,1.308,2.241,1.308c0.054,0,0.106,0.006,0.157,0.013 c0.051-0.007,0.104-0.013,0.157-0.013c1.093,0,1.55-0.52,2.241-1.308c0.828-0.941,1.86-2.11,4.101-2.07 c0.044-0.002,0.087-0.003,0.129-0.003c2.163,0,3.173,1.148,3.986,2.073c0.691,0.788,1.148,1.308,2.241,1.308"></path>
        <path class="wavey" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.145,16.684 c1.092,0,1.55-0.521,2.241-1.308c0.828-0.941,1.861-2.111,4.101-2.071c0.043,0,0.087-0.001,0.13-0.001 c2.163,0,3.171,1.148,3.985,2.072c0.692,0.788,1.149,1.308,2.241,1.308c0.054,0,0.106,0.005,0.157,0.012 c0.051-0.007,0.104-0.012,0.157-0.012c1.093,0,1.55-0.521,2.241-1.308c0.828-0.941,1.86-2.111,4.101-2.071 c0.044,0,0.087-0.001,0.129-0.001c2.163,0,3.173,1.148,3.986,2.072c0.691,0.788,1.148,1.308,2.241,1.308"></path>
        <path  class="wavey" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.145,9.714 c1.092,0,1.55-0.519,2.241-1.307c0.828-0.941,1.861-2.111,4.101-2.071c0.043-0.001,0.087-0.001,0.13-0.001 c2.163,0,3.171,1.147,3.985,2.072c0.692,0.788,1.149,1.307,2.241,1.307c0.054,0,0.106,0.006,0.157,0.014 c0.051-0.007,0.104-0.014,0.157-0.014c1.093,0,1.55-0.519,2.241-1.307c0.828-0.941,1.86-2.111,4.101-2.071 c0.044-0.001,0.087-0.001,0.129-0.001c2.163,0,3.173,1.147,3.986,2.072c0.691,0.788,1.148,1.307,2.241,1.307"></path>
      </svg>
    </div>
    <!-- .........................food highlite start........................... -->
    <div class="container-fluid first" style="height: 100vh">
      <div id="content" class="row content">
          <div class="col-md-6 align-self-center">   
              <h2 class=" text-justify text-center thai-h2">Thai</h2>
              <p class=" text-justify text-center thai-p">
                  Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                  Ice cream dragée marzipan. I love pastry cotton candy cookie powder.
                  
              </p>
              <div class="col-md-3 col-sm-3 col-xs-6 offset-button"> <a href="#" class="btn btn-sm animated-button-thai btn-thai">MENU</a> </div>
          </div>
          <div  class="col-md-6" >
              
          </div>
      </div>
      <div>
          <div  class="gradient-color-right-thai">
              {{-- <img  class="gradient-color-right" src="{{asset('image/foodhighlite/thai-back.png')}}"> --}}
          </div>
          <div class="overlay-right">
              <img class="img-fluid rounded float-right myImg" alt="Responsive image" src="{{asset('image/foodhighlite/thai.png')}}">
          </div>
      </div>
  </div>
  

  <div class="container-fluid second">
      <div id="content-two" class="row content-two">
          <div class="col-md-6">
              
          </div>
          <div class="col-md-6 align-self-center"> 
              <h2 class=" text-justify text-center">Indian</h2>  
              <p class=" text-justify text-center">
                Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                Ice cream dragée marzipan. I love pastry cotton candy cookie powder macaroon marshmallow muffin jelly-o. I love cupcake carrot cake.
                
              </p>
              <div class="col-md-3 col-sm-3 col-xs-6 offset-button"> <a href="#" class="btn btn-sm animated-button-indian btn-indi">MENU</a> </div>

          </div>
      </div>
      <div>
          <div class= "gradient-color-left-indian">
              {{-- <img class="gradient-color-left gradient-color" alt="Responsive image" src="{{asset('image/foodhighlite/indian-back.png')}}"> --}}
          </div>
          <div class="overlay-left">
              <img class="img-fluid rounded float-left myImg" alt="Responsive image" src="{{asset('image/foodhighlite/indian.png')}}">
          </div>
      </div>
  </div>
  

  <div class="container-fluid third">
          <div id="content" class="row content">
              <div class="col-md-6 align-self-center">  
                  <h2 class=" text-justify text-center continental-h2">Continental</h2> 
                  <p class=" text-justify text-center continental-p">
                    Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                    Ice cream dragée marzipan. I love pastry cotton candy cookie powder macaroon marshmallow muffin jelly-o. I love cupcake carrot cake.
                    
                  </p>
                  <div class="col-md-3 col-sm-3 col-xs-6 offset-button"> <a href="#" class="btn btn-sm animated-button-continental btn-con">MENU</a> </div>
              </div>
              <div class="col-md-6">
                  
              </div>
          </div>
          <div class="gradient-color-right-continental">
              <div>
                  {{-- <img  src="{{asset('image/foodhighlite/continental-back.png')}}"> --}}
              </div>
              <div class="overlay-right">
                  <img class="img-fluid rounded float-right myImg" alt="Responsive image" src="{{asset('image/foodhighlite/continental.png')}}">
              </div>
          </div>
      </div>
      
      
      <div class="container-fluid fourth">
              <div id="content-two" class="row content-two">
                  <div class="col-md-6">
                      
                  </div>
                  <div class="col-md-6 align-self-md-center">   
                      <h2 class ="text-justify text-center ">Tasty</h2>
                      <p class=" text-justify text-center continental">
                        Croissant donut cake lemon drops cake candy pudding. Lollipop I love topping jelly beans bonbon. Tart dessert croissant lemon drops biscuit bear claw sugar plum donut I love. Cotton candy pie cake liquorice wafer powder jujubes bonbon.
                        Ice cream dragée marzipan. I love pastry cotton candy cookie powder macaroon marshmallow muffin jelly-o. I love cupcake carrot cake.
                      </p>
                      <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 offset-button"> <a href="#" class="btn btn-sm animated-button victoria-four ">Learn More</a> </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div >
                      <img class="gradient-color-left gradient-color" alt="Responsive image" src="{{asset('image/foodhighlite/continental-back.png')}}">
                  </div>
                  <div class="overlay-left">
                      <img class="img-fluid rounded float-left myImg" alt="Responsive image" src="{{asset('image/foodhighlite/continental.png')}}">
                  </div>
              </div>
          </div>
<!-- 
............................................gallery -->
<div id="logo_center">
  <div class="gallery-block compact-gallery fifth">
            <div class="container-fluid">
              <div class="heading">
              </div>
              
              <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F1.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F1.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F2.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F2.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F3.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F3.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F4.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F4.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F5.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F5.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F6.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F6.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F7.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F7.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F8.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F8.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{asset('image/galleryimg/F9.jpg')}}">
                    <img class="img-fluid image" src="{{asset('image/galleryimg/F9.jpg')}}">
                    <span class="description">
                      <span class="description-heading">Cupcake Ipsum</span>
                      <span class="description-body">Lemon drops chocolate cake chocolate sweet roll chocolate. Gummies oat cake jelly chocolate bar tart soufflé cake. Carrot cake fruitcake chupa chups. Fruitcake candy canes muffin powder halvah pudding dessert candy tootsie roll.</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
</div>
          <!--........................................... review Start .......................................................-->

    <section>
      <div class="container-fluid">
        <div class="row ">
          <div id="reviews" class="owl-carousel owl-theme">
            <!-- review 01 -->
            <div class="review">

              <!-- Dhrubo ur code goes inside this div replace ur design with this black squre-->
              <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>

            </div>
            <!-- review 02 -->
            <div class="review">
              <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 03 -->
            <div class="review" data-wow-dufaion="0.6s" data-wow-delay="0.6s" >
              <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 04 -->
            <div class="review">
            <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 05 -->
            <div class="review">
            <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 06 -->
            <div class="review">
            <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 07 -->
            <div class="review">
            <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
            <!-- review 08 -->
            <div class="review">
            <div class="" style="  height: 150px;width: 200px;background-color: #555;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>  

              <!--........................................... review End .......................................................-->      




    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- library for gallery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
         <!-- lattering -->
        <script src="{{ asset('js/lettering/jquery.lettering-0.6.1.min.js') }}"></script>
        <!-- gallery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.compact-gallery',{animation:'slideIn'});
        </script>
          <!-- owl-carousel jquery slide  -->
        <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- myJS -->
        <script src="{{ asset('js/active.js') }}"></script>
        
        
        <script>
            baguetteBox.run('.compact-gallery',{animation:'slideIn'});
        </script>

  
</body>
</html>