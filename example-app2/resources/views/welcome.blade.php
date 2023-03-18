<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projet </title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/css2/bootstrap.min.css" rel="stylesheet">

        <link href="css/css2/bootstrap-icons.css" rel="stylesheet">

        <link href="css/css2/templatemo-tiya-golf-club.css" rel="stylesheet">
        
<!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
    </head>
    
    <body>

        <main>
<!-- //nav bar -->
            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            Tiya
                            <small>Golf Club</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Les Departments</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="event-listing.html">Info</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                     <li><a class="dropdown-item" href="event-listing.html">Info</a></li>
                                     <li><a class="dropdown-item" href="event-listing.html">Info</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>

                            
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Login</a>
                        </div>
                        <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample">Register</a>
                        </div>
                    </div>
                </div>
            </nav>
<!-- //nav bar -->
<!-- Login bar -->
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control" placeholder="11002560" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>

                                <input type="password" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
    
                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>
                           

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                    </form>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-3">Any Questions?</strong>

                            <a href="tel: 010-020-0340" class="contact-link">
                            	010-020-0340
                            </a>
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            <!-- Login bar -->
            <!-- register bar -->
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member register</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Name</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control" placeholder="11002560" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">prenom</label>

                                <input type="password" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
    
                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>
                           

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                    </form>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-3">Any Questions?</strong>

                            <a href="tel: 010-020-0340" class="contact-link">
                            	010-020-0340
                            </a>
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            <!-- register bar -->
<!-- section1 -->
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">

                        

                        

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>
<!-- section1 -->
<!-- section1 -->
            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    
                </div>
            </section>
<!-- section1 -->

           

<!-- section1 -->
            <section class="membership-section section-padding" id="section_3">
                <div class="container">
                    
                </div>
            </section>
<!-- section1 -->
<!-- section1 -->
            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    
                </div>
            </section>
<!-- section1 -->
<!-- section1 -->
            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    
                </div>
            </section>
        </main>
        <!-- section1 -->
        <!-- footer -->

        <footer class="site-footer">
            <div class="container">
                

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>
 <!-- footer -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/js2/jquery.min.js"></script>
        <script src="js/js2//bootstrap.bundle.min.js"></script>
        <script src="js/js2//jquery.sticky.js"></script>
        <script src="js/js2//click-scroll.js"></script>
        <script src="js/js2//animated-headline.js"></script>
        <script src="js/js2//modernizr.js"></script>
        <script src="js/js2//custom.js"></script>

    </body>
</html>