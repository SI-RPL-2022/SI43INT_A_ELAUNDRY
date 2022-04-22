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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="{{ url ('/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url ('/public/js/main.js') }}"></script>
</head>
<body>
    <section class="full-bg">
        <div class="container my-5">
            <div class="row my-lg-5">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <center><img src="{{ url ('/image/logoweb.png') }}" style="width:30%"></center>
                    <input class="login-input my-3" name="" placeholder="Email">
                    <input class="login-input my-3" name="" placeholder="Password">
                    <input class="login-btn my-3" type="submit" name="" value="LOGIN">
                    <center><p class="mt-5 text-Black"><i class="fa-solid fa-lock"></i> Forgot Password</p>
                    <a href="{{ url ('/Register') }}" class="text-Black">Create an account</a></center>
                </div>
            </div>
        </div>
    </section>
</body>