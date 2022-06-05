<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <a class="navbar-brand" href="#"><img src="{{ url ("/image/E-LAUNDRYLOGO.png") }}" height="75"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url ('/Home') }}"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url ('/service') }}"><strong>Services</strong></a>
          </li>
        </ul>
        <div class="d-flex">
          <a class="btn btn-primary" href="{{ url ('/Login') }}"><strong>Sign In</strong></a>
        </div>
      </div>
    </div>
  </nav>
