<!DOCTYPE html>
@include('layout.navbar')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ url ('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>
<body>
<!-- BLOK1 -->
    <section id="landing">
        <div class="hero-100 align-items-center text-center p-5">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="overlay">
                      <h3>FILL THE FORM</h3>
                      <div class="row mb-3">
                        <div class="col-md-6 mx-auto">
                          <form>
                            <input class="form-control form-services mt-3" type="text" name="service">
                            <input class="form-control form-services mt-3" type="text" name="nama" placeholder="Nama" required> 
                            <input class="form-control form-services mt-3" type="text" name="no_telp" placeholder="Nomor Telepon" required>
                            <input class="form-control form-services mt-3" type="number" name="berat" placeholder="Estimasi Berat (kg)" required>
                            <input class="form-control form-services mt-3" type="text" name="perfume" placeholder="Jenis Parfum" required>
                            <input class="form-control form-services mt-3" type="text" name="pengiriman" placeholder="Pengiriman" required>    
                          </form>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3">&nbsp;</div>
                        <div class="col-3">&nbsp;</div>
                        <div class="col-3">&nbsp;</div>
                        <div class="col-3"><a class="btn btn-warning" href="{{ url ('/shipping') }}">Continue</a></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include("layout.footer")
</body>
</html>