<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Explore YZU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon.jpg" alt="Icon" style="width: 40px; height: 40px;">
                    </div>
                    <h1 class="m-0 text-primary">
                        <span style="color:#272727;">Explore</span>
                        <span style="color:#FF2D2D;">Y</span><span style="color:#46A3FF;">Z</span><span style="color:#FFDC35;">U</span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="eat.php" class="nav-item nav-link">Eat</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Play</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.php" class="dropdown-item">Property List</a>
                                <a href="property-type.php" class="dropdown-item">Property Type</a>
                                <a href="property-agent.php" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Traffic</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="about.php" class="nav-item nav-link">About Us</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Sign In</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/index/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/index/carousel-2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/index/carousel-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->
         


        <!-- YZ Gallery Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Yuan Ze University</h1>
                    <p>There is so much more to discover about Yuan Ze University, from its state-of-the-art facilities to its vibrant campus life and dynamic surrounding community. For a deeper dive into all that YZU has to offer, check out the quick link to explore more!</p>
                </div>
                <div class="row g-4">

                    <!-- ABOUT -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\website.jpg" alt="Icon">
                                </div>
                                <h6>WEBSITE</h6>
                                <span>Official Website</span>
                            </div>
                        </a>
                    </div>

                    <!-- CSE -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.cse.yzu.edu.tw/">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\cse.jpg" alt="Icon">
                                </div>
                                <h6>CSE</h6>
                                <span>CSE Department</span>
                            </div>
                        </a>
                    </div>

                    <!-- PORTAL -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://portalx.yzu.edu.tw/PortalSocialVB/Login.aspx">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\portal.jpg" alt="Icon">
                                </div>
                                <h6>PORTAL</h6>
                                <span>YZU Portal System</span>
                            </div>
                        </a>
                    </div>

                    <!-- LIBRARY -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/library/index.php/tw/">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\library.jpg" alt="Icon">
                                </div>
                                <h6>LIBRARY</h6>
                                <span>School Library Website</span>
                            </div>
                        </a>
                    </div>

                    <!-- ADMISSIONS -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/admissions/index.php/tw/">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\admissions.jpg" alt="Icon">
                                </div>
                                <h6>ADMISSIONS</h6>
                                <span>Admissions Informations</span>
                            </div>
                        </a>
                    </div>

                    <!-- CALENDAR -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/admin/aa/index.php/tw/2016-05-30-06-28-15">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\calendar.jpg" alt="Icon">
                                </div>
                                <h6>CALENDAR</h6>
                                <span>Calendar for Each Year</span>
                            </div>
                        </a>
                    </div>

                    <!-- CAMPUS MAP -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/admin/ga/index.php/tw/xiao-yuan-ping-mian-tu">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\campus-map.jpg" alt="Icon">
                                </div>
                                <h6>CAMPUS MAP</h6>
                                <span>Campus Map of YZU</span>
                            </div>
                        </a>
                    </div>

                    <!-- ADMINISTRATIVE UNIT -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="https://www.yzu.edu.tw/index.php/tw/administrative-unit">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img\index\yz gallery\administrative-unit.jpg" alt="Icon">
                                </div>
                                <h6>ADMINISTRATIVE UNIT</h6>
                                <span>More Details</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!-- Restaurant Gallery Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Restaurant Gallery</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#level-1">NTD$ 0 ~ NTD$ 200</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#level-2">NTD$ 200 ~ NTD$ 400</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#level-3">NTD$ 400 Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">

                    <!-- 0 - 200 Start -->
                    <div id="level-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/ADDcmV7A7t4HgKEr9"><img class="img-fluid" src="img/index\restaurant gallery\smiling-fish-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/ADDcmV7A7t4HgKEr9">Smiling Fish</a>
                                        <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 6, Lane 8, Xing'an 1st Street, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>0930369812</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.6 / 5.0</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/MLSoP2Ee3PuUDkLz6"><img class="img-fluid" src="img/index\restaurant gallery\xingren-canteen-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        
                                        <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/MLSoP2Ee3PuUDkLz6">Xingren Canteen</a>
                                        <h6 class="mb-3">Cash、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 39, Lane 67, Section 2, Xingren Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034631111</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.1 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/DMtscWRwwPpbRaMF6"><img class="img-fluid" src="img\index\restaurant gallery\muti-italian-kitchen-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Italy</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/DMtscWRwwPpbRaMF6">Muti Italian Kitchen</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 202, Section 1, Xingren Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034626858</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.2 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/oSQgs5MYBNwrnwXy6"><img class="img-fluid" src="img\index\restaurant gallery\yixin-cold-noodles-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/oSQgs5MYBNwrnwXy6">Yixin Cold Noodles</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 112, Xinyi Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034334671</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.2 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/kt9xtBxHXnchcgBG9"><img class="img-fluid" src="img\index\restaurant gallery\cross-run-1.jpg" alt="" width="400px" height="400px"></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/kt9xtBxHXnchcgBG9">Cross Run</a>
                                    <h6 class="mb-3">Cash、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 13, Lane 8, Xing'an 1st Street, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>0903329680</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.5 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/tkDFnLo7gDGx9wCM7"><img class="img-fluid" src="img\index\restaurant gallery\Sauce-roasted-pork-and-egg-toast-1.jpg"></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 0 ~ NTD$ 200</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/tkDFnLo7gDGx9wCM7">Sauce</a>
                                    <h6 class="mb-3">Cash、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 143, Xingnong Road, Zhongli District, Taoyuan City 32067</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034611198</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.4 / 5</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 0 - 200 End -->



                    <!-- 200 - 400 Start -->
                    <div id="level-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/7HJAcd54GjkPqNoP7m"><img class="img-fluid" src="img\index\restaurant gallery\abiko-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~ NTD$ 400</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Japanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/7HJAcd54GjkPqNoP7">Abiko</a>
                                    <h6 class="mb-3">Cash、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 7, Lane 67, Section 2, Xingren Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>032853135</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.6 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/evyASaAgEbUupgcS9?g_st=com.google.maps.preview.copy"><img class="img-fluid" src="img\index\restaurant gallery\muti-italian-kitchen-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~ NTD$ 400</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Korean</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/evyASaAgEbUupgcS9?g_st=com.google.maps.preview.copy">Matchi Korean Cuisine</a>
                                    <h6 class="mb-3">Cash、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 73, Lane 67, Section 2, Xingren Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034350580</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.3 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/41ody3iou2ZpRvSM7"><img class="img-fluid" src="img\index\restaurant gallery\clouds-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~ NTD$ 400</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Italy</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/41ody3iou2ZpRvSM7">Clouds</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 145, Huanzhong Rd., Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034535316</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.4 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/fcBujJXqdrVo8Kmf6"><img class="img-fluid" src="img\index\restaurant gallery\yongxin-tea-stall-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~ NTD$ 400</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Hong Kong</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/41ody3iou2ZpRvSM7">Yongxin Tea Stall</a>
                                    <h6 class="mb-3">NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 61, Chengzhang 4th Street, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034341913</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.7 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/5ecS7sGDuRKv53Du6"><img class="img-fluid" src="img\index\restaurant gallery\zui-shen-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~NTD$ 400</div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/5ecS7sGDuRKv53Du6">Zui Shen</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 271, Rongmin Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034629333</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.1 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/qdgWXx7NW1gCdGHg8"><img class="img-fluid" src="img\index\restaurant gallery\mummum-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 200 ~NTD$ 400</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">American</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/qdgWXx7NW1gCdGHg8">Mummum</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 73, Section 2, Xingren Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034623775</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.4 / 5</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 200 - 400 End -->



                    <!-- 400 Up Start -->
                    <div id="level-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/EmXcCVoShrkua2sJ6"><img class="img-fluid" src="img\index\restaurant gallery\mr-may-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Italy</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/EmXcCVoShrkua2sJ6">Mr.May</a>
                                    <h6 class="mb-3">Credit Card、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 626, Huanzhong Rd., Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034622790</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.5 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/aACYMybF5dZGKHmP6"><img class="img-fluid" src="img\index\restaurant gallery\old-gourmet-house-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Chinese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/aACYMybF5dZGKHmP6">Old Gourmet House</a>
                                    <h6 class="mb-3">NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 197, Rongmin Road, Zhongli District, Taoyuan City 32071</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034613130</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.5 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/nzoRWZjK84VXkbQM7"><img class="img-fluid" src="img\index\restaurant gallery\yideoku-oshima-kappo-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Japanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/nzoRWZjK84VXkbQM7">Yideoku Oshima Kappo</a>
                                    <h6 class="mb-3">Credit Card</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 31, Chengzhang 1st Street, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>0910288804</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.1 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/uWYBzMNfUZV9w4pm8"><img class="img-fluid" src="img\index\restaurant gallery\green-garden-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/uWYBzMNfUZV9w4pm8">Green Garden</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 347, Huanzhong Rd., Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034354678</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.0 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/eACqWECD2arEkWxB8"><img class="img-fluid" src="img\index\restaurant gallery\haifeng-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Taiwanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/eACqWECD2arEkWxB8">Haifeng</a>
                                    <h6 class="mb-3">Credit Card、NFC</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 166, Wenhua Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034551177</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.0 / 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="https://maps.app.goo.gl/49cjendB1kREz1a7A"><img class="img-fluid" src="img\index\restaurant gallery\jinju-cuisine-1.jpg" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">NTD$ 400 up</div>
                                        <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Japanese</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2 text-primary" href="https://maps.app.goo.gl/49cjendB1kREz1a7A">Jinju Cuisine</a>
                                    <h6 class="mb-3">Cash</h6>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>No. 36, Lane 165, Rongmin Road, Zhongli District, Taoyuan City 320</p>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>034331203</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>4.5 / 5</small>
                                    </div>
                                </div>
                            </div>
                        </div>    
                </div>
                <!-- 400 Up End -->
            

            </div>
        </div>
        <!-- Property List End -->


        <!-- Professor Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Website Production Team</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                        </div>
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/index/professor-tinin.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">簡廷因 / Ting-Ying Chien</h1>
                                    <p>Dr. Ting-Ying Chien is an Associate Professor in the Department of Computer Science and Engineering at Yuan Ze University. He earned his Ph.D. from National Taiwan University, specializing in computational biology and bioinformatics. His research focuses on using deep learning to study diseases like Alzheimer’s, and his work has been widely recognized with over 267 citations. Dr. Chien is also passionate about teaching and mentoring students in computer science.</p>
                                </div>
                                <a href="tel:03-4638800" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>03 4638 800 #3004</a>
                                <a href="mailto:tinin@saturn.yzu.edu.tw" class="btn btn-dark py-3 px-4"><i class="fa fa-envelope me-2"></i>tinin@saturn.yzu.edu.tw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Professor End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Website Production Team</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./img/index/team/aslan.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href="https://www.facebook.com/aslan.chen.75"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href="https://x.com/_moyu0730"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href="https://www.instagram.com/_moyu.73/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Aslan Chen</h5>
                                <small>Full Stack Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Ann Yeh</h5>
                                <small>User Interface Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Yupi Yu</h5>
                                <small>User Experience Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Lica Chen</h5>
                                <small>Back End Engineer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Comment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>

                <!-- Comment 1 Start -->
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>I recently used a website designed for exploring the area around YZU, and it was fantastic! It's a must-try for anyone looking to navigate and enjoy the surroundings effortlessly!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\Ching-Lueh Chang.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Peter</h6>
                                    <small>Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 1 End -->

                <!-- Comment 2 Start -->
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>YZU offers a perfect blend of academic excellence and vibrant campus life. Its surrounding area is filled with great stores and restaurants that make student life even more enjoyable.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\I-Shyan Hwang.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Simon</h6>
                                    <small>Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 2 End -->

                <!-- Comment 3 Start -->
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>This website highlights the charm of Yuan Ze University and its nearby attractions. It’s a fantastic resource for students, visitors, and anyone curious about the area.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\Ji-Cherng Lin.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Henry</h6>
                                    <small>Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 3 End -->

                <!-- Comment 4 Start -->
                <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>The modern facilities at Yuan Ze University create an excellent learning environment. Combined with the lively local community, it’s an ideal place to grow and thrive.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\Quang-Thai Ho.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Eric</h6>
                                    <small>Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 4 End -->

                <!-- Comment 5 Start -->
                <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Exploring the shops and cafes near Yuan Ze University is always a delightful experience. They add warmth and vibrancy to the student lifestyle.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\Ran-Zan Wang.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Andy</h6>
                                    <small>Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 5 End -->

                <!-- Comment 6 Start -->
                <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Yuan Ze University is not only known for its academic achievements but also for its inviting atmosphere. The surrounding area enhances this with its friendly.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img\index\comment\Shang-Kuan Chen.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Cindy</h6>
                                    <small>Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Comment 6 End -->

                </div>
            </div>
        </div>
        <!-- Comment End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No.135 Yuan-Tung Road, Chung-Li</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+886 03 463 8800</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>yzusaworking@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Group Member</h5>
                        <p>Full Stack Developer:  Aslan Chen</p>
                        <p>User Interface Designer: Ann Yeh</p>
                        <p>User Experience Designer: Yupi Yu</p>
                        <p>Back End Engineer: Yuan Chen</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Explore YZU</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>