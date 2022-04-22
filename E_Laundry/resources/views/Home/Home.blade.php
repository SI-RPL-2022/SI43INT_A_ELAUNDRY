<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url ('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <a class="navbar-brand" href="#">
              <img src={{ url ("/image/E-LAUNDRYLOGO.png") }} height="75">
            </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>Services</strong></a>
              </li>
            </ul>
            <div class="d-flex">
              <a class="btn btn-primary" href="{{ url ('/Login') }}"><strong>Sign In</strong></a>
            </div>
          </div>
        </div>
      </nav>
<!-- BLOK1 -->
    <section id="landing" >
        <div class="hero-100 align-items-center text-center pl-5">
            <h1><strong>Doing Laundry Never Been Easier</strong></h1>
            <h3><strong>Welcome User</strong></h3> 
            <img src={{ url ('/image/picture.png') }} height="500">
        </div>
    </section>
<!-- BLOK2 -->
    <section id="why">
        <div class="container my-5">
            <h3><strong>Delivering quality laundry service since 2022</strong></h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium pariatur sint laudantium vero nostrum exercitationem minima voluptatum cumque odit sed consectetur soluta molestias nam dolores modi iure saepe, nulla quos qui quas illo commodi! Vitae ipsum eligendi alias fugit illum laborum fugiat expedita eos inventore impedit ea nihil officia sint ex cum nisi debitis tenetur ducimus quam, a rerum porro? Aliquid ad ex quaerat, ipsa debitis placeat. Ipsam odio sunt sint optio, libero excepturi eligendi similique fuga fugiat, cumque expedita nesciunt velit, iste autem recusandae voluptatibus ducimus tempore qui alias voluptatum harum est. Ex nihil dolores a fuga voluptates vero.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="icon-red my-3">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h4><strong>Customer Support</strong></h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, laudantium.</p>
                    <a class="btn btn-primary" href="#">Learn More</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-blue my-3">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h4><strong>Fast Deliveries</strong></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nobis!</p>
                    <a class="btn btn-primary" href="#">Learn More</a>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="icon-purple my-3">
                      <i class="fa-solid fa-bolt"></i>
                   </div>
                    <h4><strong>Quick Work</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, officiis.</p>
                    <a class="btn btn-primary" href="#">Learn More</a>
                </div>
              <div class="col-md-6 col-lg-3">
                <div class="icon-green my-3">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <h4><strong>Quality Service</strong></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nobis!</p>
                <a class="btn btn-primary" href="#">Learn More</a>
            </div>
            </div>
        </div>
    </section>
<!-- BLOK3 -->
    <section class="container-fluid" id="services" style="background-color:#1abbcd ;">
        <div class="container py-5 text-light">
            <center><h1><strong>Laundry Service</strong></h1>
            <h3 class="text-dark"><strong>Choose your Service</strong></h3>
            <div class="yellow-line"></div>
        </center>
        <div class="row g-4 my-3">
            <div class="col-md-4">
                <div class="card shadow bg-white rounded">
                    <div class="card-body text-dark d-flex flex-column">
                        <h5 class="text-primary"><strong>Laundry Kiloan</strong></h5>
                        <h3><strong>IDR 6,000/kg</strong></h3>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Delivery</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Finish about 1-2 days</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Select parfume</li>
                        </ul>
                        <a class="btn btn-primary btn-block mt-auto" href="#">Try it!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow bg-white rounded">
                    <div class="card-body text-dark d-flex flex-column">
                      <h5 class="text-primary"><strong>Laundry Same Day</strong></h5>
                      <h4 class="text-danger"><strong>BEST!!!</strong></h4>
                      <h3><strong>IDR 10,000/kg</strong></h3>
                      <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Finish in one day</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Delivery</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Maximum pick up at 11.00</li>
                            <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Select parfume</li>
                        </ul>
                        <a class="btn btn-primary btn-block mt-auto" href="#">Try it!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow bg-white rounded">
                    <div class="card-body text-dark d-flex flex-column">
                      <h5 class="text-primary"><strong>Dry Cleaning</strong></h5>
                      <h3><strong>IDR 12,000/kg</strong></h3>
                      <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Delivery</li>
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Finish about 1-2 days</li>
                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"></i></span>Select parfume</li>
                    </ul>
                    <a class="btn btn-primary btn-block mt-auto" href="#">Try it!</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<!-- BLOK4 -->
<section id="footer">
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <div class="container align-items-center text-center pl-5">  
            <strong><p>Our laundry business was formed in 2022 in order to fulfill our big task. By using our services, you are agreeing to all the terms and conditions of our business. Thank you for using our service.</p></strong>
        </div>
        <strong><p class="copyright">E-Laundry © 2022</p></strong>
    </footer>
</div>
</section>
</body>
</html>