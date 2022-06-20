<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url ('/css/style3.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../Assets/js/main.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <a class="navbar-brand" href="#"><img src="{{ url ('/image/E-LAUNDRY LOGO.png') }}" height="75"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url ('/Home') }}"><strong>Home</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/DashboardUser') }}"><strong>Dashboard</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/contact') }}"><strong>Feedback</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/userprofile2') }}"><strong>Profile</strong></a>
              </li>
            </ul>
            <div class="d-flex">
              <a class="btn btn-danger" href="{{ url ('/Home') }}"><strong>Log Out</strong></a>
            </div>
          </div>
        </div>
      </nav>
<!-- BLOK1 -->
<section class="full-bg2">
  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body bg-light">
          <h4>My Order</h4>
          <div class="row">
            <div class="col-lg-4">
              <img src="{{ url ('/image/order1.png') }}" style="width:100%">
            </div>
            <div class="col-lg-8">
              <h5 class="my-3">Layanan Same Day - 15 Juni 2022</h5>
              <h5 class="my-3">5kg</h5>
              <h5 class="my-3">Rp 30.000,00</h5>
              <h6 class="my-5 text-laundry">Diproses - Driver menuju tempat anda</h6>
              <a href="{{ url ('/details') }}"><strong><h5 class="my-3">See Details</h5></strong></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-lg-6">
      <div class="card">
          <div class="card-body bg-light">
          <h4>Order on going</h4>
          <div class="row">
            <div class="col-lg-4">
              <img src="{{ url ('/image/order2.png') }}" style="width:100%">
            </div>
            <div class="col-lg-8">
              <h5 class="my-3">Laundry kiloan - 10 Juni 2022</h5>
              <h5 class="my-3">5kg</h5>
              <h5 class="my-3">Rp 30.000,00</h5>
              <h6 class="my-5 text-laundry">Sedang diproses</h6>
              <a href="{{ url ('/details') }}"><strong><h5 class="my-3">See Details</h5></strong></a>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="col-lg-6">
      <div class="card">
          <div class="card-body bg-light">
          <h4>Finish Order</h4>
          <div class="row">
            <div class="col-lg-4">
              <img src="{{ url ('/image/order2.png') }}" style="width:100%">
            </div>
            <div class="col-lg-8">
              <h5 class="my-3">Laundry kiloan - 5 Juni 2022</h5>
              <h5 class="my-3">5kg</h5>
              <h5 class="my-3">Rp 30.000,00</h5>
              <h6 class="my-5 text-laundry">Selesai</h6>
              <a href="{{ url ('/details') }}"><strong><h5 class="my-3">See Details</h5></strong></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
