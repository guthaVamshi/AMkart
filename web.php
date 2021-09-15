<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 
?>














 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my amKart</title>
    <link rel="icon" href="487-4874977_we-seamlessly-become-the-voice-of-your-company.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>




    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>header</title>



    <style>
    
    .tcb-product-slider {
      
  background: #333;
  background-image: radial-gradient(circle, #ede6e9 10%, #020202 90%);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 0;
}
.tcb-product-slider .carousel-control {
  width: 5%;
}
.tcb-product-item a {
  color: #147196;
}
.tcb-product-item a:hover {
  text-decoration: none;
}
.tcb-product-item .tcb-hline {
  margin: 10px 0;
  height: 1px;
  background: #ccc;
}
@media all and (max-width: 768px) {
  .tcb-product-item {
    margin-bottom: 30px;
  }
}
.tcb-product-photo {
  text-align: center;
  height: 180px;
  background: #fff;
}
.tcb-product-photo img {
  height: 100%;
  display: inline-block;
}
.tcb-product-info {
  background: #f0f0f0;
  padding: 15px;
}
.tcb-product-title h4 {
  margin-top: 0;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.tcb-product-rating {
  color: #acacac;
}
.tcb-product-rating .active {
  color: #FFB500;
}
.tcb-product-price {
  color: firebrick;
  font-size: 18px;
}



.details {
    margin: 50px 0; }
 .details h1 {
      font-size: 32px;
      text-align: center;
      margin-bottom: 3px; }
    .details .back-link {
      text-align: center; }
      .details .back-link a {
        display: inline-block;
        margin: 20px 0;
        padding: 15px 30px;
        background: #333;
        color: #fff;
        border-radius: 24px; }
        .details .back-link a svg {
          margin-right: 10px;
          vertical-align: text-top;
          display: inline-block; }
        #he1 {
            color: white;
            padding: 4px;
        }

        #he1:hover{
            border-radius: 5px;
            border-color: aliceblue;
            border: 1px solid;
         }

        .big {
          background-image: radial-gradient(circle, #ede6e9 10%, #020202 90%);
        }

        .gh-2 {
            max-height: 420px;
            max-width: 400px;
        }
        #play {
    position: center;
    opacity: 1;
    align-content: center;
  }
  .col{
    max-width: 30px;
    margin-top: 20px;
  }
  .b1{
      height: 200px;
  }
  
    </style>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#"> <img class="mx-4" src="onlinelogomaker-022421-1219-0063-2000-transparent.png" width="200" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fad fa-home ms-2 " style="color:white;"></i>home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html"><i class="fad fa-headset " style="color:white;"></i>Contactus</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fad fa-shopping-cart " style="color:white;"></i>Cart</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fad fa-exchange-alt " style="color:white;"></i>Orders & return</a>
                    </li>

                </ul>
                
                <ul>
                <li class="nav-items">
                    
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>

                </form>
                <ul>
                    <li class="nav-items">
                        <button class=" btn btn-danger mx-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><a class="text-decoration-none text-light" href="login.php"> logout</a></button>
                        </li>

                    
                </ul>
               
                    
                
            </div>
        </div>
    </nav>
    <!-- Button trigger modal -->


    <!-- Modal -->
    

    <class class="header d-flex justify-content-start  bg-dark ">

        <a class=" m-3    text-decoration-none " id="he1" href="pay.html" style="font:bold;">Amkart-pay</a>
        <a class="m-3  text-decoration-none" id="he1" href="">New-releases</a>
        <a class="m-3  text-decoration-none" id="he1" href="">bestseller</a>
        <a class="m-3  text-decoration-none" id="he1" href="">customer service</a>
        <a class="m-3  text-decoration-none" id="he1" href="">electronics</a>
        <a class="m-3  text-decoration-none" id="he1" href="">prime</a>
        <a class="m-3 text-decoration-none" id="he1" href="">today deals</a>
        <a class="m-3 text-decoration-none" id="he1" href="">mobile</a>
        <a class="m-3 text-decoration-none" id="he1" href="">buyagain</a>
        <a class="m-3 text-decoration-none" id="he1" href="">pantry</a>
        <a class="m-3 text-decoration-none" id="he1" href="music/music.html" target="blank">Amazon music</a>


    </class>
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert text-center">
    hi
  <strong><?php echo $_SESSION['username']; ?> </strong>welcome to Amkart
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->



    <div class="big">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>slider</title>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="pay.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="container d-flex justify-content-center align-items-center ">
                            

                            <div class="1 bg-dark mx-4">
                                <h5 style="padding-top: 5px;">pay creditcard bill</h5>
                                <img src="credit.jpg" alt="">
                                <a href="" class="text-light p-2 text-decoration-none">paynow</a>

                            </div>
                            <div class="1 bg-light">
                                <h4 class="text-dark p-3">EOSS | Style for Women | Up to 70% off</h4>
                                <div class="container ">
                                    <div class="row g-2 ">
                                        <div class="col-6 ">
                                            <img src="clothing.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">clothing</a>
                                        </div>
                                        <div class="col-6  ">
                                            <img class="mx-2" src="j.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">jewellery</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="tv.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">T.V</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="maxhine.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">c</a>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="samsung.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>pay creditcard bill</h5>
                        <img src="credit.jpg" alt="">
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="oneplus.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                    <div class="container d-flex justify-content-center align-items-center ">
                            <div class="1 bg-light">
                                <h4 class="text-dark pt-3"> hi , <strong> <?php echo $_SESSION['username']; ?></strong></h4>
                                <h6 class="text-dark "> customer since 2021 </h6>
                                <div class="container ">
                                    <div class="row g-2 ">
                                        <div class="col-6 p-2 ">
                                            <img src="https://m.media-amazon.com/images/G/01/HUD/Dashboard/ProfileCard/orders._AC_SR120,80_.png" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">Your Orders</a>
                                        </div>
                                        <div class="col-6 p-2 ">
                                            <img class="mx-2" src="https://m.media-amazon.com/images/G/31/HUD/Dashboard/ProfileCard/976419031._AC_SR120,80_.png" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">Mobiles</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="https://m.media-amazon.com/images/G/31/HUD/Dashboard/ProfileCard/6648217031._AC_SR120,80_.png" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">Fashion</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="https://m.media-amazon.com/images/G/31/HUD/Dashboard/ProfileCard/2454178031._AC_SR120,80_.png" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">groccery</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="1 bg-dark mx-4" style="width: 80%;">
                                
                                <img src="h.jpg" style="width:100%" alt="">
                                <a href="" class="text-light p-2 text-decoration-none">Buy Now</a>

                            </div>
                            
                            <div class="1 bg-light">
                                <h4 class="text-dark p-3">EOSS | Style for Women </h4>
                                <div class="container ">
                                    <div class="row g-2 ">
                                        <div class="col-6 ">
                                            <img src="clothing.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">clothing</a>
                                        </div>
                                        <div class="col-6  ">
                                            <img class="mx-2" src="j.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">jewellery</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="tv.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">T.V</a>
                                        </div>
                                        <div class="col-6 p-2">
                                            <img src="maxhine.jpg" width="150px" alt="">
                                            <a href="" class="text-dark text-decoration-none">c</a>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                  
                                
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions"  role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon "  aria-hidden="true" ></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        
        <div class="group d-flex justify-content-center align-items-center">
            <div class="g1 ms-4">
                <img src="master.jpg" width="720" height="420" alt="">
            </div>
            <div class="g m-4">
                <div class="1 bg-light">
                    <h4 class="text-dark fw-bolder m-4">Amazon Pay | be secure</h4>
                    <div class="container">
                        <div class="row gh-2  ">
                            <div class="col-6 ">
                                <img src="Desktop_QuadCard_Secure-your-bike._SY116_CB660819531_.jpg" width="164px"
                                    alt="">
                                <p>Clothing</p>
                            </div>
                            <div class="col-6  ">
                                <img class="mx-2" src="Desktop_QuadCard_secure-your-car._SY116_CB660819531_.jpg"
                                    width="164px" alt="">
                                <a href="" class="text-dark text-decoration-none">jewellery</a>
                            </div>
                            <div class="col-6 ">
                                <img src="Desktop_QuadCard_Set-reminders._SY116_CB660819531_.jpg" width="164px" alt="">
                                <p> <a href="" class="text-dark text-decoration-none">T.V</a></p>
                            </div>
                            <div class="col-6 ">
                                <img src="Desktop_QuadCard_Vehicle-accessories._SY116_CB660819531_.jpg" width="164px"
                                    alt="">
                                <p> <a href="" class="text-dark text-decoration-none">c</a></p>
                            </div>

                           


                        </div>
                    </div>
                </div>

            </div>
            <div class="g m-4">
                <div class="1 bg-light">
                    <h4 class="text-dark p-3">welcome | @ vamshi</h4>
                    <div class="container ">
                        <div class="row gh-2 ">
                            <div class="col-6 ">
                                <img src="B00OT9CS5S_186x116._SY116_CB417134289_.jpg" width="164px" alt="">
                                <a href="" class="text-dark text-decoration-none">clothing</a>
                            </div>
                            <div class="col-6  ">
                                <img class="mx-2" src="B08345R1ZW_186x116._SY116_CB417134289_.jpg" width="164px" alt="">
                                <a href="" class="text-dark text-decoration-none">jewellery</a>
                            </div>
                            <div class="col-6 ">
                                <img src="B01N5KIHWN_186x116._SY116_CB417134288_.jpg" width="164px" alt="">
                                <a href="" class="text-dark text-decoration-none">T.V</a>
                            </div>
                            <div class="col-6 ">
                                <img src="WFH_186x116._SY116_CB417134289_.jpg" width="164px" alt="">
                                <a href="" class="text-dark text-decoration-none">c</a>
                            </div>
                            <p>see more deals</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="container-1 d-flex justify-content-center my-4">
            <div class="box1 ">
                <img src="tv.jpg" alt="">
                <p>telivision</p>
            </div>
            <div class="box2 mx-4">
                <img src="fridge.jpg" alt="">
                <p>refrigirator</p>
            </div>
            <div class="box3">
                <img src="maxhine.jpg" alt="">
                <p>Washing machine</p>
            </div>
            <div class="box4 mx-4">
                <img src="fashion.jpg" alt="">
                <p>fashion</p>
            </div>
            <div class="box5">
                <img src="footwear.jpg" alt="">
                <p>footwear</p>
            </div>
            <div class="box6 mx-4">
                <img src="j.jpg" alt="">
                <p>jewellery</p>
            </div>
            <div class="box7">
                <img src="clothing.jpg" alt="">
                <p>clothing</p>
            </div>


        </div>
        <div class="headbar ms-4">
    


        <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Downloads</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
          <p class="leading-relaxed">Files</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
          <p class="leading-relaxed">Places</p>
        </div>
      </div>
    </div>
  </div>
</section>

      
      <section class="text-center mb-4" >

        
        <div class="row wow fadeIn "  >

         
          <div class="col-lg-3 col-md-6 mb-4" >

          
            <div class="card" >

              
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              

             
              <div class="card-body text-center">
               
                <a href="" class="grey-text">
                  <h5>Shirt</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Denim shirt
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>120$</strong>
                </h4>

              </div>
              

            </div>
         

          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Sweatshirt</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>139$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Grey blouse
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>99$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Outwear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Black jacket</a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>219$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
         

        </div>
        

      </section>
      

    </div>

  </main>

  </div>
 
  <div class="tcb-product-slider">
  <div class="container">
  <h4 class="text-light text-center  ">Latest products</h4>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/Z7eqMnj.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Olympus Photo Camera </a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(4,585 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 495.00 (17% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/fCrZot6.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Coca Cola Bottle</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(245 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 99.00 (21% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/kTmJp8W.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Jewel from Italy</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(345 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 999.00 (33% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/sMwmKmh.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">White Pepper</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(45 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 199.00 (37% off)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/RuPhz54.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Belt Improted From Japan</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(2,125 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 49.00 (40% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/e4ARfEJ.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Tomato</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(5 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 9.00
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/ZlchtwK.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Tape Line</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(215 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 39.00 (15% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/GRPrGN6.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Test Glasses For Lab</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i>
                    <a href="#">(10,345 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 11,999.00 (37% off)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/Ds5mtGy.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Jewel From India</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(945 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 299.00 (54% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/e7IYyso.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Red Pepper</a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(15 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 5.00 (11% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/vuRE1W6.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Pro Cell Batteries </a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(745 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 19.00 (63% off)
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="tcb-product-item">
                <div class="tcb-product-photo">
                  <a href="#"><img src="https://i.imgur.com/UibcRla.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="tcb-product-info">
                  <div class="tcb-product-title">
                    <h4><a href="#">Eye Glasses </a></h4>
                  </div>
                  <div class="tcb-product-rating">
                    <i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="active glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i>
                    <a href="#">(145 ratings)</a>
                  </div>
                  <div class="tcb-hline"></div>
                  <div class="tcb-product-price">
                    $ 129.00 (29% off)
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<section class="text-gray-400 bg-gray-900 body-font">
  <div class="h2 text-light text-center   p-0">
  wear  masks-stay safe
  </div>
  <div class="container px-5 py-23 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="51Tr64HMhWL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">The pinko</h2>
          <p class="mt-1">160.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://m.media-amazon.com/images/I/41UG2xvY6LL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">hulk masks</h2>
          <p class="mt-1">210.15</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://m.media-amazon.com/images/I/41iuQb+hqqL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">dsgn</h3>
          <h2 class="text-white title-font text-lg font-medium">dsgn</h2>
          <p class="mt-1">120.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://m.media-amazon.com/images/I/41AZYhV6AjL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">blow masks</h2>
          <p class="mt-1">180.40</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="41gGT3lJuaL.__AC_SY200_.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Choclate</h3>
          <h2 class="text-white title-font text-lg font-medium">brownwile</h2>
          <p class="mt-1">160.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://m.media-amazon.com/images/I/31gMhwnkBIL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">solimo</h2>
          <p class="mt-1">$21.15</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="51Tr64HMhWL.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">dsian</h2>
          <p class="mt-1">$2.00</p>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://m.media-amazon.com/images/I/51cE4vyL-lL._AC_UL480_FMwebp_QL65_.jpg">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">masks</h3>
          <h2 class="text-white title-font text-lg font-medium">solimo masks</h2>
          <p class="mt-1">200 /-</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Tech you need  everyday</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Here are some of the tech which are very helpfull to improve your productivity.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full  object-center" src="https://m.media-amazon.com/images/I/41oc1XtI8XL._AC_SY200_.jpg" >
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Bluetooth earpods</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Boat audio 800</h1>
            <p class="leading-relaxed">latest Bluetoothv 5.0, standby time 24 hours.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full  object-center" src="https://m.media-amazon.com/images/I/41szFXwrqsL._AC_SY200_.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Bluetooth earpods</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Boat audio 850</h1>
            <p class="leading-relaxed">latest Bluetoothv 5.0, standby time 24 hours.ipv6 certification.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full  object-center" src="https://m.media-amazon.com/images/I/31Wx2Pn7SVL._AC_SY200_.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Bluetooth earpods</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Bault audio 850</h1>
            <p class="leading-relaxed">latest Bluetoothv 5.0, standby time 24 hours.ipv6 certification..</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full object-cover object-center" src="https://m.media-amazon.com/images/I/51-m8BPxgHL._AC_SY200_.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full object-cover object-center" src="https://m.media-amazon.com/images/I/41zs4v3adaL._AC_SY200_.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0  h-full object-cover object-center" src="https://m.media-amazon.com/images/I/41bGZKo7JtL._AC_SY200_.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->




        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>footer</title>


        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
                <p class="mb-1">Conditions of Use &amp; SalePrivacy NoticeInterest-Based Ads© 1996-2021, Amazon.com,
                </p>
                <p class="mb-0">Inc. or its affiliates <a href="/">Visit the homepage</a> or read our <a
                        href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    </div>
</body>

</html>