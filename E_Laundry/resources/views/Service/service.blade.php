<!DOCTYPE html>
<html lang="id">
@include('layout.navbar')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
            <h1><strong>Choose Your Plan</strong></h1>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <a class="btn btn-lg btn-kiloan form-control mt-3" href="{{ url ('/form') }}">Laundry Kiloan</a>
                    <a class="btn btn-lg btn-sameday form-control mt-3" href="#">Laundry Same Day</a>
                    <a class="btn btn-lg btn-dry form-control mt-3" href="#">Dry Cleaning</a>
                </div>
            </div>
        </div>
    </section>
</body>
@include('layout.footer')
</html>