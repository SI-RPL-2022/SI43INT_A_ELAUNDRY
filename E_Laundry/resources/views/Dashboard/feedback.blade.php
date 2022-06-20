<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url ('/css/style3.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/js/main.js') }}"></script>
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
                <a class="nav-link" href="{{ url ('/DashboardAdmin') }}"><strong>Dashboard</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/userprofile') }}"><strong>Profile</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url ('/feedback') }}"><strong>Feedback</strong></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- BLOK1 -->
    <section class="full-bg2">
    <div class="container my-5">
    <h1 style="text-align:center">Feedback Details</h1>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Order Number</th>
            <th>Phone</th>
            <th>Feedback</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
</section>

